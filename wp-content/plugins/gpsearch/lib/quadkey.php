<?php
/**
 * QuadKeyクラス
 *
 * GPS世界座標系の座標をQuadKeyに変換します。
 * 
 *
 * 2012/10/04 1.0      初期版
 * 2012/12/13 1.1      地球の端での境界条件を追加
 * 2012/12/19 1.2      変換ロジックを簡単化
 *
 * @package 
 * @access  public
 * @author  OHTSUKA Ko-hei
 * @create  2012/10/04
 * @version 1.2
 **/

class QuadKey {

    const M_ON_EQ       = 40075016.68557849;   //地球を半径6378.137kmの球として赤道での周(m)
    const DEG_TO_RAD    = 0.017453292519943295; //度をラジアンにするための定数

    const EarthRadius   = 6378137;
    const MinLatitude   = -85.05112878;
    const MaxLatitude   = 85.05112878;
    const MinLongitude  = -180;
    const MaxLongitude  = 180;

    private $codingMap=array();

    private $add = array( 'right'  =>  1,
                          'left'   => -1,
                          'top'    => -2,
                          'bottom' =>  2);

    public  $lat;
    public  $long;
    public  $hash;
    public  $level;

    public function QuadKey($alathash=null,$along=null,$alevel=null)
    {
        if ($alathash !== null) {
            if ($along !== null) {
                $this->setLatLng($alathash,$along,$alevel);
            } else {
                $this->setHash($alathash);
            }
        }
    }

    public function setLatLng($alat,$along,$alevel=null)
    {
        $this->lat   = $alat;
        $this->long  = $along;
        if ($alevel !== null) {
            $this->level = $alevel;
        } else {
            $this->level = 18;
        }

        $this->hash = $this->LatLngToQuadKey($this->lat,$this->long,$this->level);
    }

    public function setHash($ahash) {
        $this->hash = $ahash;
        $coord = $this->QuadKeyToLatLng($ahash);

        $this->lat   = $coord[0];
        $this->long  = $coord[1];

        $this->level = strlen($ahash);
    }

    public function getWhere($radius) {
        $this->setOptimizedLevel($radius);
        $list = $this->getNeighbors();

        if ($list === 'all_globe') {
            return 'WHERE 1 ';
        }

        //nullや重複があり得るようになったのでクリーニング
        $cleaning = array();

        foreach ($list as $qkey) {
            if ($qkey !== null) $cleaning[$qkey] = 1;
        }

        $where = join("%' OR `quadkey` LIKE '",array_keys($cleaning));
        $where = "WHERE ( `quadkey` LIKE '" . $where ."%' ) ";

        return $where;
    }

    /**
     * ┌─┬─┬─┐
     * │０│１│２│
     * ├─┼─┼─┤
     * │３│４│５│ 4=mine
     * ├─┼─┼─┤
     * │６│７│８│
     * └─┴─┴─┘
     * 
     */
    public function getNeighbors($srcHash=null) {
        if ($srcHash === null) {
            $srcHash = $this->hash;
        }
        // 地球全体とか大きすぎ
        if ($srcHash === '' || preg_match('/^[0-3]$/',$srcHash)) return 'all_globe';

        // 3x3の9マスを隣接として返す
        $matrix = array(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

        $matrix[4] = $srcHash;
        $matrix[1] = $this->calculateAdjacent($srcHash, 'top');
        $matrix[3] = $this->calculateAdjacent($srcHash, 'left');
        $matrix[5] = $this->calculateAdjacent($srcHash, 'right');
        $matrix[7] = $this->calculateAdjacent($srcHash, 'bottom');

        $matrix[0] = $this->calculateAdjacent($matrix[1], 'left');
        $matrix[6] = $this->calculateAdjacent($matrix[7], 'left');

        $matrix[2] = $this->calculateAdjacent($matrix[1], 'right');
        $matrix[8] = $this->calculateAdjacent($matrix[7], 'right');

        return $matrix;
    }

    /**
     * $dir = top / left / bottom / right
     */
    public function calculateAdjacent($srcHash, $dir=null) {
        if ($srcHash === null) return null;

        if ($dir === null) {
            $dir     = $srcHash;
            $srcHash = $this->hash;
        }

        //極域の境界条件
        if (preg_match('/^[01]+$/',$srcHash) && $dir == 'top') {
            return null;
        } else if (preg_match('/^[23]+$/',$srcHash) && $dir == 'bottom') {
            return null;
        }

        $tileXY = $this->QuadKeyToTileXY($srcHash);
        if ($dir == 'top') {
            $tileXY[1]--;
        } else if ($dir == 'bottom') {
            $tileXY[1]++;
        }
        if ($dir == 'left') {
            $tileXY[0]--;
        } else if ($dir == 'right') {
            $tileXY[0]++;
        }
        return $this->TileXYToQuadKey($tileXY[0],$tileXY[1],strlen($srcHash));
    }    

    /**
    * calcurate precise of given latlng
    */
    public function setOptimizedLevel($radius) {
        $this->level = $this->getOptimizedLevel($radius);

        $this->hash  = substr($this->hash,0,$this->level);
    }

    /**
    * calcurate optimized level of given radius
    */
    public function getOptimizedLevel($alat, $along=null, $radius=null) {
        if ($along === null) {
            $radius = $alat;
            $alat   = $this->lat;
            $along  = $this->long;
        }

        $norm_radius = $radius / cos($alat * self::DEG_TO_RAD);

        for ($lv=18;$lv>0;$lv--) {
            $lat_bit = self::M_ON_EQ / pow(2, $lv);

            if ($lat_bit >= $norm_radius) {
                return $lv;
            }
        }

        return 0;
    }

    private function _Clip($n, $minValue, $maxValue) {
        return min(max($n, $minValue), $maxValue);
    }

    public function MapSize($levelOfDetail) {
        return 256 << $levelOfDetail;
    }

    public function LatLngToPixelXY($lat, $lng, $levelOfDetail) {
        $lat = $this->_Clip($lat, self::MinLatitude, self::MaxLatitude);
        $lng = $this->_Clip($lng, self::MinLongitude, self::MaxLongitude);

        $x = ($lng + 180) / 360;
        $sinLat = sin($lat * M_PI / 180);
        $y = 0.5 - log((1 + $sinLat) / (1 - $sinLat)) / (4 * M_PI);

        $mapSize = $this->MapSize($levelOfDetail);
        $pixelX  = (int) $this->_Clip($x * $mapSize + 0.5, 0, $mapSize - 1);
        $pixelY  = (int) $this->_Clip($y * $mapSize + 0.5, 0, $mapSize - 1);

        return array($pixelX, $pixelY);
    }

    public function pixelXYToLatLng($pixelX, $pixelY, $levelOfDetail) {
        $mapSize = $this->MapSize($levelOfDetail);
        $x = ($this->_Clip($pixelX, 0, $mapSize - 1) / $mapSize) - 0.5;
        $y = 0.5 - ($this->_Clip($pixelY, 0, $mapSize - 1) / $mapSize);

        $lat = 90 - 360 * atan(exp(-$y * 2 * M_PI)) / M_PI;
        $lng = 360 * $x;

        return array($lat, $lng);
    }

    public function PixelXYToTileXY($pixelX, $pixelY) {
        $tileX = $pixelX / 256;
        $tileY = $pixelY / 256;
        return array((int)$tileX, (int)$tileY);
    }

    public function TileXYToPixelXY($tileX, $tileY) {
        $pixelX = $tileX * 256;
        $pixelY = $tileY * 256;
        return array($pixelX, $pixelY);
    }

    public function TileXYToQuadKey($tileX, $tileY, $levelOfDetail) {
        $xbin = substr(decbin($tileX), -$levelOfDetail);
        $ybin = substr(decbin($tileY), -$levelOfDetail);

        $quadKey = substr('00000000000000000000' . ($xbin + $ybin * 2) , -$levelOfDetail);

        return $quadKey;
    }

    public function QuadKeyToTileXY($quadKey) {
        $xbin  = preg_replace(array('/[13]/','/[02]/'),array('1','0'),$quadKey);
        $ybin  = preg_replace(array('/[01]/','/[23]/'),array('0','1'),$quadKey);

        $tileX = bindec($xbin);
        $tileY = bindec($ybin);

        return array($tileX, $tileY);
    }

    public function LatLngToTileXY($lat, $lng, $levelOfDetail) {
        list($px, $py) = $this->LatLngToPixelXY($lat, $lng, $levelOfDetail);
        return $this->PixelXYToTileXY($px, $py);
    }

    public function LatLngToQuadKey($lat, $lng, $levelOfDetail) {
        list($px, $py) = $this->LatLngToPixelXY($lat, $lng, $levelOfDetail);
        list($x, $y) = $this->PixelXYToTileXY($px, $py);

        $quadKey = $this->TileXYToQuadKey($x, $y, $levelOfDetail);
        return $quadKey;
    }

    public function QuadKeyToLatLng($quadKey) {
        list($x, $y) = $this->QuadKeyToTileXY($quadKey);
        list($pixelX, $pixelY) = $this->TileXYToPixelXY($x, $y);
        return $this->pixelXYToLatLng($pixelX, $pixelY, strlen($quadKey));
    }
}
?>