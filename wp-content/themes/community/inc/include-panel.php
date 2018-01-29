<?php
class panelClass {
	public function getPanel(){
?>

<div class="panel-search">
	<h3 class="panel-title">簡単検索</h3>
	<form>
		<ul class="panel-ul">
			<li class="panel-li">
				<label class="panel-label">フリーワード</label>
				<input type="text" class="input-field" placeholder="スタジオ名・駅名など">
			</li>
			<li>
				<label class="panel-label">条件検索</label>
				<div class="panel-checkbox">
					<div class="cntr">
						<label for="cbx-01" class="label-cbx">
							<input id="cbx-01" type="checkbox" class="invisible">
							<div class="checkbox">
								<svg width="20px" height="20px" viewBox="0 0 20 20">
<path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
<polyline points="4 11 8 15 16 6"></polyline>
								</svg>
							</div>
							<span>ホットヨガ</span>
						</label>
					</div>
					<div class="cntr">
						<label for="cbx-02" class="label-cbx">
							<input id="cbx-02" type="checkbox" class="invisible">
							<div class="checkbox">
								<svg width="20px" height="20px" viewBox="0 0 20 20">
<path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
<polyline points="4 11 8 15 16 6"></polyline>
								</svg>
							</div>
							<span>岩盤ヨガ</span>
						</label>
					</div>
					<div class="cntr">
						<label for="cbx-03" class="label-cbx">
							<input id="cbx-03" type="checkbox" class="invisible">
							<div class="checkbox">
								<svg width="20px" height="20px" viewBox="0 0 20 20">
<path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
<polyline points="4 11 8 15 16 6"></polyline>
								</svg>
							</div>
							<span>常温ヨガ</span>
						</label>
					</div>
				</div>
			</li>
		</ul>
		<div class="col-pc-6 col-pc-offset-3 col-sp-12">
			<button class="button button-block button-panel">検索する<small class="category-color">SEARCH</small></button>
		</div>
	</form>
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
	public function getSearch($option,$category){
		$dataClass = new dataClass;
		
?>

<div class="search-control">
    <div class="wrapper">
        <div class="row">
            <div class="field-group">
                <label>都道府県</label>
                <select class="input-field pref-select">
                    <option>すべて</option>
                    <?php foreach($dataClass->prefArray() as $key => $value) : ?>
                    <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="field-group">
            	<?php if($option == 'city') : ?>
                <label>市区町村</label>
                <select class="input-field city-select" disabled>
                    <option>すべて</option>
                    <?php foreach($dataClass->getCity(13) as $key => $value) : ?>
                    <option value="<?php echo $value[3]; ?>"><?php echo $value[1]; ?></option>
                    <?php endforeach; ?>
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
                    <option>登録順</option>
                    <option>人気順</option>
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
    }
});
-->
</script>
<?php endif; ?>
<?php
	}
}
?>