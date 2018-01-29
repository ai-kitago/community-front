<?php
	$url = '#';
	if(isset($value['url'])) $url = $value['url']; 
?>
<div class="<?php echo $blockClass; ?> mb-pc-30">
	<div class="instructor-block">
		<div class="block-thumbnail">
			<a href="<?php echo $url; ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/no-instructor.jpg" class="suck">
			</a>
		</div>
		<div class="block-content">
			<a href="<?php echo $url; ?>">
				<h3 class="block-title"><?php echo mb_strimwidth($value['title'],0,46,'…','UTF-8'); ?><span class="block-subtitle"><?php echo $value['sub_name']; ?></span></h3>
			</a>
		</div>
		<div class="block-category">
			<a href="#"><span><?php echo $dataClass->prefArray($value['pref_code']); ?></span></a>
		</div>
	</div>
</div>