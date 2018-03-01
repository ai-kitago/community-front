<?php
	$href = "#";
	$plan = 'free';
	$thumbnail = get_template_directory_uri().'/images/no-image.jpg';
	if(isset($value['post_id']) && $value['post_id'] != NULL){
		$href= '/'.$value['post_type'].'/'.$value['post_id'].'/';
	}
	if(isset($value['plan']) || $value['post_type'] == 'instructor'){
		$plan = 'paid';
	}
	if(isset($value['plan']) || $value['post_type'] == 'instructor'){
		$thumbnail = $value['thumbnail'];
	}
?>
<div class="col-search <?php echo $blockClass; ?> <?php echo $value['post_type']; ?>">
	<div class="search-block <?php echo $plan; ?>">
		<?php if($plan == 'paid') : ?>
		<div class="block-thumbnail">
			<a href="<?php echo $href; ?>">
				<img src="<?php echo $thumbnail; ?>" class="suck">
			</a>
		</div>
		<?php endif; ?>
		<div class="block-content">
			<div class="block-meta">
				<span class="block-label category-color">新着</span>
				<span class="block-post category-color"><?php echo $dataClass->getPosttype($value['post_type']); ?></span>
				<span class="block-pref"><?php echo $dataClass->prefArray($value['pref_code']); ?></span>
				<time class="block-date"><?php echo date('Y.m.d',strtotime($value['date'])); ?></time>
			</div>
			<a href="<?php echo $href; ?>">
				<h3 class="block-title"><?php echo mb_strimwidth($value['title'],0,46,'…','UTF-8'); ?><span class="block-subtitle"><?php echo $value['shop_name']; ?></span></h3>
			</a>
			<?php if($plan == 'paid' && isset($value['description'])) : ?>
			<div class="block-description">
				<p><?php echo $value['description']; ?></p>
			</div>
			<?php endif; ?>
			<div class="block-footer">
				<div class="style-tag">
					<span class="tag">ハタヨガ</span><span class="tag">ヨギックアーツ</span><span class="tag">メディテーション</span>
				</div>
				<span class="block-author"><?php echo $value['company']; ?></span>
			</div>
		</div>
	</div>
</div>