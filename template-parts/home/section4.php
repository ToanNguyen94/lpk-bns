<?php
$title1 = rwmb_meta('section4-title1');
$tests = rwmb_meta('section4-group');
$title2 = rwmb_meta('section4-title2');
$contents = rwmb_meta('section4-group2');
$images = rwmb_meta('section4-image');
?>

<section class="section4">
	<div class="container section4__wrap">
		<div class="section4__test">
			<h2 class="title"><?= $title1 ?></h2>
			<div class="section3__tab3-gallery">
				<?php
				foreach ($tests as $test) :
					$image_url = isset($test['section4-group-image']) ? wp_get_attachment_image_url($test['section4-group-image'], 'full') : '';
					$name = isset($test['section4-group-title']) ? $test['section4-group-title'] : '';
				?>
					<div class="section3__tab2-item">
						<img src="<?= esc_url($image_url) ?>" alt="">
						<h3 class="section3__tab2-title"><?= $name ?></h3>
					</div>
				<?php
				endforeach;
				?>
			</div>
		</div>
		<div class="section4__content">
			<h2 class="title"><?= $title2 ?></h2>
			<div class="section4__content-inner">
				<?php
				foreach ($contents as $key => $content) :
					$desc = $content['section4-group2-content'] ? $content['section4-group2-content'] : '';
				?>
					<div class="section4__content-item">
						<div class="section4__content-number"><?= '0' . $key + 1 ?></div>
						<?= wpautop($desc) ?>
					</div>
				<?php
				endforeach;
				?>
			</div>
		</div>
		<div class="section4__images section3__tab3-gallery">
			<?php
			foreach ($images as $image) :
				$image_url = isset($image['ID']) ? wp_get_attachment_image_url($image['ID'], 'full') : '';
			?>
				<div class="section3__tab2-item">
					<img src="<?= esc_url($image_url) ?>" alt="">
				</div>
			<?php
			endforeach;
			?>
		</div>
	</div>
</section>