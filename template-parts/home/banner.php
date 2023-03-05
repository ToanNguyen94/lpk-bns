<?php

use Titanweb\lpk\TemplateFunction;

$banner_groups = rwmb_meta('banner-group');
$link_see = rwmb_meta('banner-see');
$link_video = rwmb_meta('banner-video');
?>
<section class="banner">
	<?php
	foreach ($banner_groups as $banner_group) :
		$image_bg = isset($banner_group['banner-background']) ? wp_get_attachment_image_url($banner_group['banner-background'], 'full') : '';
		$content  = isset($banner_group['banner-content']) ? $banner_group['banner-content'] : '';
		$image_url = isset($banner_group['banner-image']) ? wp_get_attachment_image_url($banner_group['banner-image'], 'full') : '';
	?>
		<div class="banner__wrap">
			<img src="<?= esc_url($image_bg) ?>" alt="">
			<div class="container banner__inner d-flex">
				<div class="banner__content">
					<?= wpautop($content) ?>
					<div class="banner__btn">
						<a href="<?= $link_see ?>" class="btn-see">詳細を見る</a>
						<a href="<?= $link_video ?>" class="btn-video">
							<span><?php TemplateFunction::get_icon('video1') ?></span>
							<span>Xem video</span>
						</a>
					</div>
				</div>
				<div class="banner__image">
					<img src="<?= esc_url($image_url) ?>" alt="">
				</div>
			</div>
		</div>
	<?php
	endforeach;
	?>

</section>