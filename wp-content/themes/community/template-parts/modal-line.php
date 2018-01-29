<div class="modal">
    <input id="modal-trigger-line-<?php echo $pref_id; ?>" class="checkbox" type="checkbox">
    <div class="modal-overlay">
        <label for="modal-trigger" class="o-close"></label>
        <div class="modal-wrap">
            <label for="modal-trigger" class="close">&#10006;</label>
            <h2>路線・駅で検索</h2>
            <form action="/studio/area/kanto/tokyo/">
            <div class="line-box">
            	<table class="line-table">
            		<tbody>
<?php
		$prefline = $dataClass->getPrefline($pref_id);
		foreach ($prefline as $key => $value) :
			$prefline_id = $value[1];
			//var_dump($dataClass->getLine($line_id));
			$line = $dataClass->getLine($prefline_id);
			echo '<tr>';
			echo '<th>'.$line[1].'</th>';
			echo '<td>';
			foreach($dataClass->getStation($value) as $stationKey => $stationValue) :
				//echo $stationValue[2];
?>
				<div class="cntr">
					<label for="cbx-<?php echo $stationValue[1]; ?>" class="label-cbx">
						<input id="cbx-<?php echo $stationValue[1]; ?>" type="checkbox" class="invisible">
						<div class="checkbox">
							<svg width="20px" height="20px" viewBox="0 0 20 20">
<path d="M3,1 L17,1 L17,1 C18.1045695,1 19,1.8954305 19,3 L19,17 L19,17 C19,18.1045695 18.1045695,19 17,19 L3,19 L3,19 C1.8954305,19 1,18.1045695 1,17 L1,3 L1,3 C1,1.8954305 1.8954305,1 3,1 Z"></path>
<polyline points="4 11 8 15 16 6"></polyline>
							</svg>
						</div>
						<span><?php echo $stationValue[2]; ?></span>
					</label>
				</div>
<?php
			endforeach;
			echo '</td>';
			echo '</tr>';
		endforeach;
?>
					</tbody>
				</table>
			</div>
			<div class="row">
    			<div class="col-pc-4 col-pc-offset-4 col-sp-12">
	    		    <button class="button button-block">絞り込む</button>
		    	</div>
		    </div>
		    </form>
        </div>
    </div>
</div>