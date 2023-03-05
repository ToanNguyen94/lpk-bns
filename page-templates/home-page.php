<?php // @codingStandardsIgnoreLine
/**
 * Template Name: Home page
 */
?>
<?php get_header(); ?>

<main id="primary" class="site-main ">

	<?php
	get_template_part('template-parts/home/banner');
	get_template_part('template-parts/home/section1');
	get_template_part('template-parts/home/section2');
	get_template_part('template-parts/home/section3');
	get_template_part('template-parts/home/section4');


	?>
</main>

<?php get_footer(); ?>