<?php
    class mapClass {
        public function getMap(){
?>
<!--
<div class="maparea">
	<div class="maparea-box maparea-hokkaido">
		<a href="#">
			<span class="maparea-title">北海道</span>
			<p class="maparea-list">北海道</p>
		</a>
	</div>
	<div class="maparea-box maparea-tohoku">
		<a href="#">
			<span class="maparea-title">東北</span>
			<p class="maparea-list">青森｜岩手｜秋田<br>宮城｜山形｜福島</p>
		</a>
	</div>
	<div class="maparea-box maparea-hokuriku">
		<a href="#">
			<span class="maparea-title">甲信越・北陸</span>
			<p class="maparea-list">山梨｜長野｜新潟<br>富山｜石川｜福井</p>
		</a>
	</div>
	<div class="maparea-box maparea-kanto">
		<a href="/studio/area/kanto/">
			<span class="maparea-title">関東</span>
			<p class="maparea-list">東京｜神奈川<br>千葉｜埼玉｜茨城<br>栃木｜群馬</p>
		</a>
	</div>
	<div class="maparea-box maparea-tokai">
		<a href="#">
			<span class="maparea-title">東海</span>
			<p class="maparea-list">愛知｜静岡<br>岐阜｜三重</p>
		</a>
	</div>
	<div class="maparea-box maparea-kansai">
		<a href="#">
			<span class="maparea-title">関西</span>
			<p class="maparea-list">大阪｜兵庫｜京都<br>滋賀｜奈良｜和歌山</p>
		</a>
	</div>
	<div class="maparea-box maparea-chugoku">
		<a href="#">
			<span class="maparea-title">中国</span>
			<p class="maparea-list">岡山｜広島<br>鳥取｜島根<br>山口</p>
		</a>
	</div>
	<div class="maparea-box maparea-shikoku">
		<a href="#">
			<span class="maparea-title">四国</span>
			<p class="maparea-list">愛媛｜香川<br>高知｜徳島</p>
		</a>
	</div>
	<div class="maparea-box maparea-kyushu">
		<a href="#">
			<span class="maparea-title">九州・沖縄</span>
			<p class="maparea-list">福岡｜佐賀｜長崎<br>熊本｜大分｜宮崎<br>鹿児島｜沖縄</p>
		</a>
	</div>
	<button class="button button-studio"><i class="icon icon-gps"></i>GPS検索</button>
</div>
-->
		
<div class="mapArea studioSearch">
	<ul id="studioMap">
		<li class="hokkaidoMap"><a href="#hokkaido"><span>北海道</span></a></li>
		<li class="touhokuMap"><a href="#tohoku"><span>東北</span></a></li>
		<li class="hokurikuMap"><a href="#hokuriku"><span>北陸</span></a></li>
		<li class="kantoMap"><a href="#kanto"><span>関東</span></a></li>
		<li class="tokaiMap"><a href="#toukai"><span>東海</span></a></li>
		<li class="kansaiMap"><a href="#kansai"><span>関西</span></a></li>
		<li class="chugokuMap"><a href="#chugoku"><span>中国</span></a></li>
		<li class="shikokuMap"><a href="#shikoku"><span>四国</span></a></li>
		<li class="kyushuMap"><a href="#kyushu"><span>九州</span></a></li>
		<li class="okinawaMap"><a href="#okinawa"><span>沖縄</span></a></li>
    </ul>
    <ul class="hokkaido prefList">
        <li><a href="/studio/area/hokkaido/hokkaido/">北海道</a></li>
    </ul>
    <ul class="touhoku prefList">
        <li><a href="/studio/area/tohoku/aomori/">青森</a></li>
        <li><a href="/studio/area/tohoku/iwate/">岩手</a></li>
        <li><a href="/studio/area/tohoku/miyagi/">宮城</a></li>
        <li><a href="/studio/area/tohoku/akita/">秋田</a></li>
        <li><a href="/studio/area/tohoku/yamagata/line/">山形</a></li>
        <li><a href="/studio/area/tohoku/fukushima/line/">福島</a></li>
    </ul>
    <ul class="hokuriku prefList">
        <li><a href="/studio/yamanashi/line/">山梨</a></li>
        <li><a href="/studio/nagano/line/">長野</a></li>
        <li><a href="/studio/nigata/line/">新潟</a></li>
        <li><a href="/studio/toyama/line/">富山</a></li>
        <li><a href="/studio/ishikawa/line/">石川</a></li>
        <li><a href="/studio/fukui/line/">福井</a></li>
    </ul>
    <ul class="kanto prefList">
        <li><a href="/studio/area/kanto/tokyo/">東京</a></li>
        <li><a href="/studio/area/kanto/kanagawa/line/">神奈川</a></li>
        <li><a href="/studio/area/kanto/chiba/line/">千葉</a></li>
        <li><a href="/studio/area/kanto/saitama/line/">埼玉</a></li>
        <li><a href="/studio/area/kanto/ibaraki/line/">茨城</a></li>
        <li><a href="/studio/area/kanto/tochigi/line/">栃木</a></li>
        <li><a href="/studio/area/kanto/gunma/line/">群馬</a></li>
    </ul>
    <ul class="tokai prefList">
        <li><a href="/studio/aichi/line/">愛知</a></li>
        <li><a href="/studio/shizuoka/line/">静岡</a></li>
        <li><a href="/studio/gifu/line/">岐阜</a></li>
        <li><a href="/studio/mie/line/">三重</a></li>
    </ul>
    <ul class="kansai prefList">
        <li><a href="/studio/osaka/line/">大阪</a></li>
        <li><a href="/studio/kyoto/line/">京都</a></li>
        <li><a href="/studio/hyogo/line/">兵庫</a></li>
        <li><a href="/studio/shiga/line/">滋賀</a></li>
        <li><a href="/studio/nara/line/">奈良</a></li>
		<li><a href="/studio/wakayama/line/">和歌山</a></li>
    </ul>
    <ul class="chugoku prefList">
        <li><a href="/studio/okayama/line/">岡山</a></li>
        <li><a href="/studio/hiroshima/line/">広島</a></li>
        <li><a href="/studio/shimane/line/">島根</a></li>
        <li><a href="/studio/tottori/line/">鳥取</a></li>
        <li><a href="/studio/yamaguchi/line/">山口</a></li>
    </ul>
    <ul class="shikoku prefList">
        <li><a href="/studio/ehime/line/">愛媛</a></li>
        <li><a href="/studio/kagawa/line/">香川</a></li>
        <li><a href="/studio/kochi/line/">高知</a></li>
        <li><a href="/studio/tokushima/line/">徳島</a></li>
    </ul>
    <ul class="kyushu prefList">
        <li><a href="/studio/fukuoka/line/">福岡</a></li>
        <li><a href="/studio/saga/line/">佐賀</a></li>
        <li><a href="/studio/nagasaki/line/">長崎</a></li>
        <li><a href="/studio/kumamoto/line/">熊本</a></li>
        <li><a href="/studio/oita/line/">大分</a></li>
        <li><a href="/studio/miyazaki/line/">宮崎</a></li>
        <li><a href="/studio/kagoshima/line/">鹿児島</a></li>
    </ul>
    <ul class="okinawa prefList">
        <li><a href="/studio/okinawa/line/">沖縄</a></li>
    </ul>
</div>

<?php
		}
	}
?>