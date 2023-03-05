<?php
$title = rwmb_meta('section2-title');
$content = rwmb_meta('section2-content');
$groups = rwmb_meta('section2-group');
?>
<section class="section2" id="#section2">
	<div class="container section2__wrap">
		<h2 class="title"><?= $title ?></h2>
		<div class="section2__inner d-flex">
			<?php
			foreach ($groups as $group) :
				$icon = isset($group['section2-icon']) ? wp_get_attachment_image_url($group['section2-icon'], 'full') : '';
				$desc = isset($group['section2-desc']) ? $group['section2-desc'] : '';
			?>
				<div class="section2__item">
					<div class="section2__item-image">
						<img src="<?= esc_url($icon) ?>" alt="">
					</div>
					<div class="section2__item-desc">
						<?= wpautop($desc) ?>
					</div>
				</div>
			<?php
			endforeach;
			?>
		</div>
		<div class="section2__content">
			<?= wpautop($content) ?>
		</div>
	</div>
</section>