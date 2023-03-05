<?php
$tab_names = rwmb_meta('tab-names');
$tab1_image = rwmb_meta('tab1-image');
$tab2_groups = rwmb_meta('tab2-group');
$tab3_contents = rwmb_meta('tab3-group1');
$tab3_groups = rwmb_meta('tab3-group');
$tab4_image = rwmb_meta('tab4-image');


?>
<section class="section3" id="section3">
	<div class="container section3__wrap">
		<div class="section3__tabs d-flex">
			<?php
			foreach ($tab_names as $key => $tab_name) :
				$name = isset($tab_name['tab-title']) ? $tab_name['tab-title'] : '';
			?>
				<div class="section3__tabs-name <?= $key === 0 ? 'active' : '' ?>" data-tab="tab<?= $key ?>" data-id="<?= $key ?>">
					<?= $name ?>
				</div>
			<?php
			endforeach;
			?>
		</div>
		<div class="section3__inner">
			<!-- Tab1 -->
			<div id="tab0" class="section3__content active">
				<div class="section3__tab1 ">
					<?php
					$tab1_url = isset($tab1_image['ID']) ? wp_get_attachment_image_url($tab1_image['ID'], 'full') : '';
					?>
					<div class="section3__tab1-image">
						<img src="<?= esc_url($tab1_url) ?>" alt="">
					</div>
				</div>
			</div>
			<!-- Tab 2 -->
			<div id="tab1" class="section3__content">
				<div class="section3__tab2">
					<?php
					foreach ($tab2_groups as $tab2_group) :
						$image_url = isset($tab2_group['tab2-group-image']) ? wp_get_attachment_image_url($tab2_group['tab2-group-image'], 'full') : '';
						$name = isset($tab2_group['tab2-group-title']) ? $tab2_group['tab2-group-title'] : '';
					?>
						<div class="section3__tab2-item">
							<img src="<?= $image_url ?>" alt="">
							<h3 class="section3__tab2-title"><?= $name ?></h3>
						</div>
					<?php
					endforeach;
					?>
				</div>
			</div>
			<!-- Tab3 -->
			<div id="tab2" class="section3__content">
				<div class="section3__tab3">
					<div class="section3__tab3-content">
						<?php
						foreach ($tab3_contents as $tab3_content) :
							$content = isset($tab3_content['tab3-group1-content']) ? $tab3_content['tab3-group1-content'] : '';
						?>
							<div class="section3__tab3-item">
								<?= wpautop($content) ?>
							</div>
						<?php
						endforeach;
						?>
					</div>
					<div class="section3__tab3-gallery">
						<?php
						foreach ($tab3_groups as $tab3_group) :
							$image_url = isset($tab3_group['tab3-group-image']) ? wp_get_attachment_image_url($tab3_group['tab3-group-image'], 'full') : '';
							$name = isset($tab3_group['tab3-group-title']) ? $tab3_group['tab3-group-title'] : '';
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
			</div>
			<!-- Tab4 -->
			<div id="tab3" class="section3__content">
				<div class="section3__tab4">
					<?php
					$tab4_url = isset($tab4_image['ID']) ? wp_get_attachment_image_url($tab4_image['ID'], 'full') : '';
					?>
					<div class="section3__tab4-image">
						<img src="<?= esc_url($tab4_url) ?>" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>