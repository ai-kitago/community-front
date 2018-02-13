<?php
class panelClass {
	public function getPanel(){
?>

<div class="panel-search">
	<h3 class="panel-title">簡単検索</h3>
	<ul class="panel-ul">
		<li class="panel-li">
		    <label class="panel-label">キーワード</label>
			<input type="text" class="input-field" placeholder="スタジオ名・駅名など">
		</li>
		<li>
            <label class="panel-label">スタイル</label>
			<div class="cntr checkbox">
			    <label for="cbx-style-01">
				    <input id="cbx-style-01" class="checkbox-input" type="checkbox" value="style-01">
					<span class="checkbox-parts">ホットヨガ</span>
				</label>
			</div>
			<div class="cntr checkbox">
			    <label for="cbx-style-02">
				    <input id="cbx-style-02" class="checkbox-input" type="checkbox" value="style-02">
					<span class="checkbox-parts">アシュタンガヨガ</span>
				</label>
			</div>
			<div class="cntr checkbox">
			    <label for="cbx-style-03">
				    <input id="cbx-style-03" class="checkbox-input" type="checkbox" value="style-03">
					<span class="checkbox-parts">ハタヨガ</span>
				</label>
			</div>
			<div class="cntr checkbox">
			    <label for="cbx-style-04">
				    <input id="cbx-style-04" class="checkbox-input" type="checkbox" value="style-04">
					<span class="checkbox-parts">シヴァナンダヨガ</span>
				</label>
			</div>
			<div class="cntr checkbox">
			    <label for="cbx-style-05">
				    <input id="cbx-style-05" class="checkbox-input" type="checkbox" value="style-05">
					<span class="checkbox-parts">パワーヨガ</span>
				</label>
			</div>
			<div class="cntr checkbox">
			    <label for="cbx-style-06">
				    <input id="cbx-style-06" class="checkbox-input" type="checkbox" value="style-06">
					<span class="checkbox-parts">ヨギックアーツ</span>
				</label>
			</div>
			<div class="cntr checkbox">
			    <label for="cbx-style-07">
				    <input id="cbx-style-07" class="checkbox-input" type="checkbox" value="style-07">
					<span class="checkbox-parts">イシュタヨガ</span>
				</label>
			</div>
        </li>
		<li>
			<label class="panel-label">条件検索</label>
			<div class="panel-checkbox">
				<div class="cntr checkbox">
				    <label for="cbx-style-01">
					    <input id="cbx-style-01" class="checkbox-input" type="checkbox" value="style-01">
						<span class="checkbox-parts">ホットヨガ</span>
					</label>
				</div>
				<div class="cntr checkbox">
				    <label for="cbx-style-02">
					    <input id="cbx-style-02" class="checkbox-input" type="checkbox" value="style-02">
						<span class="checkbox-parts">岩盤ヨガ</span>
					</label>
				</div>
				<div class="cntr checkbox">
				    <label for="cbx-style-03">
					    <input id="cbx-style-03" class="checkbox-input" type="checkbox" value="style-03">
						<span class="checkbox-parts">常温ヨガ</span>
					</label>
				</div>
				<div class="cntr checkbox">
				    <label for="cbx-style-04">
					    <input id="cbx-style-04" class="checkbox-input" type="checkbox" value="style-04">
						<span class="checkbox-parts">女性限定</span>
					</label>
				</div>
			</div>
		</li>
	</ul>
</div>

<?php
	}
	public function getCity($pref){
		$dataClass = new dataClass;
		$areaArray = $dataClass->areaArray('kanto');
?>
<div class="panel-area">
<?php foreach ($areaArray as $area => $pref_id) : ?>
	<ul class="pref-ul">
		<li class="pref-li">
			<span class="pref-title"><?php echo $dataClass->prefArray($pref_id); ?></span>
			<div class="pref-content">
				<div class="row">
					<div class="col-pc-6 col-sp-12">
						<label class="button button-footer" for="modal-trigger-city-<?php echo $pref_id; ?>">市区町村で検索<small class="category-color">CITY SEARCH</small></label>
						<?php include(get_template_directory().'/template-parts/modal-city.php'); ?>
					</div>
					<div class="col-pc-6 col-sp-12">
						<label class="button button-footer" for="modal-trigger-line-<?php echo $pref_id; ?>">路線・駅で検索<small class="category-color">LINE SEARCH</small></label>
						<?php include(get_template_directory().'/template-parts/modal-line.php'); ?>
					</div>
				</div>
			</div>
		</li>	
	<ul>
<?php endforeach; ?>
</div>
<?php
	}
	public function getSearch($option,$category,$pref_id = NULL){
		$dataClass = new dataClass;
		$class_name = NULL;
		if($line != NULL) $class_name = ' line-control';
?>

<div class="search-control<?php echo $class_name; ?>">
    <div class="wrapper">
        <div class="row">
            <div class="field-group">
                <label>都道府県</label>
                <select class="input-field pref-select">
                    <option>すべて</option>
                    <?php foreach($dataClass->prefArray() as $key => $value) : ?>
                    <?php
                        $selected = NULL;
                        if( $pref_id != NULL && $key == $pref_id) $selected = ' selected';
                    
                    ?>
                    <option value="<?php echo $key; ?>"<?php echo $selected; ?>><?php echo $value; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="field-group">
            	<?php if($option == 'city') : ?>
                <label>市区町村</label>
                <select class="input-field city-select" disabled="disabled">
                    <option>すべて</option>
                    <?php foreach($dataClass->getCity(13) as $key => $value) : ?>
                    <option value="<?php echo $value[3]; ?>"><?php echo $value[1]; ?></option>
                    <?php endforeach; ?>
                </select>
                <?php endif; ?>
                <?php if($option == 'station') : ?>
                <?php $pl = $dataClass->getPrefline(13); ?>
                <label>路線・駅</label>
                <select class="input-field city-select">
                    <option>すべて</option>
                    <?php
                        global $term;
                        foreach( $pl as $plValue) :
                            $li = $dataClass->getLine($plValue[1]);
                            echo '<optgroup label="'. $li[1] .'">';
                            foreach ($dataClass->getStation($plValue) as $stKey => $stValue) :
                                $st_id = $plValue[1].'-'.$stValue[1];
                                $selected = NULL;
                                if($st_id == $term) $selected = ' selected';
                    ?>
                    <option value="<?php echo $plValue[1]; ?>-<?php echo $stValue[1]; ?>"<?php echo $selected; ?>><?php echo $stValue[2]; ?></option>
                    <?php
                            endforeach;
                            echo '</optgroup>';
                        endforeach;
                    ?>
                </select>
                <?php endif; ?>
                <?php if($option == 'date') : ?>
                <label>開催日</label>
                <select class="input-field date-select">
                    <option>すべて</option>
                    <optgroup label="2018年">
                    <option>2018年1月</option>
                    <option>2018年2月</option>
                    <option>2018年3月</option>
                    <option>2018年4月</option>
                    <ooption>2018年5月</option>
                    <option>2018年6月</option>
                    <option>2018年7月</option>
                    <option>2018年8月</option>
                    <option>2018年9月</option>
                    <option>2018年10月</option>
                    <option>2018年11月</option>
                    <option>2018年12月</option>
                    </optgroup>
                    <optgroup label="2019年">
                    <option>2019年1月</option>
                    </optgroup>
                </select>
                <?php endif; ?>
                <?php if($option == 'sort') : ?>
                <label>並び順</label>
                <select class="input-field date-select">
                    <option>新着順</option>
                    <option>更新順</option>
                    <option>人気順</option>
                </select>
                <?php endif; ?>
                <?php if($option == 'type') : ?>
                <label>職種</label>
                <select class="input-field date-select">
                    <option>すべて</option>
                    <option>スタジオスタッフ</option>
                    <option>スタジオマネージャー</option>
                    <option>インストラクター</option>
                    <option>企画</option>
                    <option>営業</option>
                    <option>販売／接客</option>
                    <option>ライター</option>
                    <option>カメラマン</option>
                    <option>コンテンツクリエイター</option>
                    <option>読者モデル</option>
                    <option>ブロガー</option>
                </select>
                <?php endif; ?>
                <?php if($option == 'license') : ?>
                <label>資格・修了</label>
                <select class="input-field date-select">
                    <option>すべて</option>
                    <optgroup label="全米ヨガアライアンス">
                    <option>RYT200</option>
                    <option>RYT500</option>
                    <option>RPYT</option>
                    <option>RCYT</option>
                    </optgroup>
                    <optgroup label="インド政府公認">
                    <option>プロフェッショナルヨガ検定</option>
                    <option>インド政府公認校</option>
                    </optgroup>
                    <optgroup label="その他">
                    <option>顔ヨガ</option>
                    <option>マタニティヨガ</option>
                    <option>キッズヨガ</option>
                    </optgroup>
                </select>
                <?php endif; ?>
            </div>
            <div class="field-group">
                <?php if($category == 'event') : ?>
                <label>カテゴリ</label>
                <select class="input-field">
                    <option>すべて</option>
                    <option>イベント</option>
                    <option>ワークショップ</option>
                </select>
                <?php endif; ?>
                <?php if($category == 'style') : ?>
                <label>スタイル</label>
                <select class="input-field">
                    <option>すべて</option>
                    <?php foreach($dataClass->styleArray() as $key => $val) : ?>
                    <option value="<?php echo $key; ?>"><?php echo $val[0]; ?></option>
                    <?php endforeach; ?>
                </select>
                <?php endif; ?>
                <?php if($category == 'sort') : ?>
                <label>並び順</label>
                <select class="input-field date-select">
                    <option>新着順</option>
                    <option>更新順</option>
                    <option>人気順</option>
                </select>
                <?php endif; ?>
                <?php if($category == 'status') : ?>
                <label>雇用形態</label>
                <select class="input-field date-select">
                    <option>すべて</option>
                    <option>正社員</option>
                    <option>アルバイト・パート</option>
                    <option>契約社員</option>
                    <option>業務委託</option>
                    <option>在宅</option>
                    <option>その他</option>
                </select>
                <?php endif; ?>
                <?php if($line != NULL) : ?>
                <label>並び順</label>
                <select class="input-field date-select">
                    <option>新着順</option>
                    <option>更新順</option>
                    <option>人気順</option>
                </select>
                <?php endif; ?>
            </div>
            <div class="field-group">
                <label>キーワード</label>
                <input type="text" class="input-field" placeholder="キーワード">
            </div>
            <div class="field-button">
                <label>&nbsp;</label>
                <input type="submit" class="button button-primary button-block float-right" value="検索">
            </div>
        </div>
    </div>
</div>
<?php if($option == 'city') : ?>
<script>
<!--
var _city = <?php print json_encode($dataClass->getCity()); ?>;
var c_select;
jQuery(function($){
    $('.pref-select').change(function(){
        var pref = $(this).val();
        if($.isNumeric(pref)) {
            console.log(pref);
            cityChange($(this),pref);
        } else {
            console.log('DIS');
            //c_select.multipleSelect("disable");
            $('.city-select').attr("disabled", "disabled");
        }
    });
    function cityChange(element, pref = 13) {
        var parent = element.closest('.row');
        c_select = parent.find('.city-select');
        c_select.empty();
        
        c_select.append(
            $("<option />")
                .val('')
                .text('すべて')
        );
        
        for(c in _city){
            if(_city[c][2] == pref) {
                c_select.append(
                    $("<option />")
                        .val(_city[c][3])
                        .text(_city[c][1])
                );
            }
        }
        c_select.removeAttr("disabled");
        /*
        c_select.multipleSelect({
            placeholder: "複数選択可",
            selectAllText: "すべて"
        });
        c_select.multipleSelect("enable");
        */
    }
});
-->
</script>
<?php endif; ?>
<?php
	}
}
?>