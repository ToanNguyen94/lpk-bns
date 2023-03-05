<?php
$image = rwmb_meta('section1-image');
$image_url = isset($image) ? wp_get_attachment_image_url($image['ID'], 'full') : '';
$title = rwmb_meta('section1-title');
$desc = rwmb_meta('section1-content');
?>
<section class="section1" id="#section1">
	<div class="container section1__inner d-flex">
		<div class="section1__image">
			<img src="<?= esc_url($image_url) ?>" alt="">
		</div>
		<div class="section1__content">
			<h2 class="title"><?= $title ?></h2>
			<?= wpautop($desc) ?>
		</div>
	</div>
</section>