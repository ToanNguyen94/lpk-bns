<?php

use Titanweb\lpk\TemplateFunction;

$title = rwmb_meta('footer-title');
$location = rwmb_meta('footer-location');
$phone = rwmb_meta('footer-phone');
$mail = rwmb_meta('footer-mail');
$web = rwmb_meta('footer-web');
?>
</main>
<footer class="footer " role="contentinfo">
    <div class="container footer__wrap">
        <h3 class="footer__title"><?= $title ?></h3>
        <div class="footer__location footer__item">
            <?php TemplateFunction::get_image_path('location.png') ?>
            <p><?= $location ?></p>
        </div>
        <div class="footer__info">
            <div class="footer__phone footer__item">
                <?php TemplateFunction::get_image_path('phone1.png') ?>
                <a href="tel: <?= $phone ?>"><?= $phone ?></a>
            </div>
            <div class="footer__mail footer__item">
                <?php TemplateFunction::get_image_path('mail.png') ?>
                <a href="mailto: <?= $mail ?>"><?= $mail ?></a>
            </div>
            <div class="footer__web footer__item">
                <?php TemplateFunction::get_image_path('web.png') ?>
                <a href="#"><?= $web ?></a>
            </div>
        </div>
        <div class="footer__social footer__info">
            <a href="#fb"><?php TemplateFunction::get_image_path('fb.png') ?></a>
            <a href="#you"><?php TemplateFunction::get_image_path('you.png') ?></a>
            <a href="#"><?php TemplateFunction::get_image_path('insta.png') ?></a>
        </div>
        <div class="footer__coppy">
            Copyright © 2023 LPK BNS. All Rights Reserved
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>