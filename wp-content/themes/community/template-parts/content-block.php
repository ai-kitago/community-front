<?php
	$href = "#";
	if(isset($value['post_id']) && $value['post_id'] != NULL){
		$href= '/'.$value['post_type'].'/'.$value['post_id'].'/';
	}
?>
<div class="<?php echo $blockClass; ?> mb-pc-30">
	<div class="block <?php echo $value['post_type']; ?>">
		<div class="block-thumbnail">
			<a href="<?php echo $href; ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" class="suck">
			</a>
		</div>
		<div class="block-content">
			<div class="block-meta">
				<span class="block-label category-color">新着</span><span class="category-color"><?php echo strtoupper($value['post_type']); ?></span>
				<span class="block-pref"><?php echo $dataClass->prefArray($value['pref_code']); ?></span>
			</div>
			<a href="<?php echo $href; ?>">
				<h3 class="block-title"><?php echo mb_strimwidth($value['title'],0,46,'…','UTF-8'); ?><span class="block-subtitle"><?php echo $value['shop_name']; ?></span></h3>
			</a>
			<div class="block-footer">
				<span class="block-author"><?php echo $value['company']; ?></span>
				<time class="block-date"><?php echo date('Y.m.d',strtotime($value['date'])); ?></time>
			</div>
			<?php if($value['post_type'] == 'event') : ?>
			<div class="block-event-date">
				<time class="event-date"><span class="year">2018</span><span>2.27</span><span class="week">水</span></time>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>