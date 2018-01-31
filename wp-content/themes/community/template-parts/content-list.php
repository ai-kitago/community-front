<?php
	$href = "#";
	if(isset($value['post_id']) && $value['post_id'] != NULL){
		$href= '/'.$value['post_type'].'/'.$value['post_id'].'/';
	}
	if(!isset($plan)){
		$plan = 'free';
	}
?>
<div class="col-list <?php echo $blockClass; ?>">
	<div class="list <?php echo $plan; ?>">
		<?php if($plan == 'paid') : ?>
		<div class="list-thumbnail">
			<a href="<?php echo $href; ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" class="suck">
			</a>
		</div>
		<?php endif; ?>
		<div class="list-content">
			<div class="list-meta">
				<span class="list-label category-color">新着</span>
				<span class="list-pref"><?php echo $dataClass->prefArray($value['pref_code']); ?></span>
				<span class="list-city"><i class="fa fa-map-marker"></i>目黒区</span>
				<span class="list-station"><i class="fa fa-train"></i>祐天寺駅</span>
				<time class="list-date"><?php echo date('Y.m.d',strtotime($value['date'])); ?></time>
			</div>
			<a href="<?php echo $href; ?>">
				<h3 class="list-title"><?php echo mb_strimwidth($value['title'],0,46,'…','UTF-8'); ?><span class="list-subtitle"><?php echo $value['shop_name']; ?></span></h3>
			</a>
			<?php if($plan == 'paid') : ?>
			<div class="list-description">
				<p>OHANAsmile（オハナスマイル）のOHANAとはハワイ語で「家族」という意味があります。オハナスマイルは笑顔が絶えないあたたかい家族のようなヨガスタジオを目指します。</p>
			</div>
			<?php endif; ?>
			<div class="list-footer">
				<div class="style-tag">
					<span class="tag">ハタヨガ</span><span class="tag">ヨギックアーツ</span><span class="tag">メディテーション</span>
				</div>
				<span class="list-author"><?php echo $value['company']; ?></span>
			</div>
		</div>
	</div>
</div>