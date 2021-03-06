<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package belajar-wordpressbootstrap
 */

get_header();
?>
	<main id="primary" class="site-main">

	<section class="container pb-5 pt-4">
		<div id="carouselExampleDark" class="carousel carousel-dark slide overflow-hidden rounded-3" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active" data-bs-interval="10000">
				<img src="<?php echo get_template_directory_uri(); ?>/images/img1.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item" data-bs-interval="2000">
				<img src="<?php echo get_template_directory_uri(); ?>/images/img1.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
				<img src="<?php echo get_template_directory_uri(); ?>/images/img1.jpg" class="d-block w-100" alt="...">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</section>
<?php
	if (get_theme_mod('kategori-display') == true) {
         ?>

            <section class="container">
				<div class="kategori">
				<?php
					do_action('show_custom_loop_category'); 
				?>
				</div>
            </section>

        <?php
     } ?>

	<section class="container">
		<h1 class="text-center p-5">Produk Pilihan</h1>
		<?php echo do_shortcode('[featured_products paginate="false" limit="4" show_catalog_ordering="no"]'); ?>
	</section>

	<section class="container">
		<h1 class="text-center p-5">Produk Terkini</h1>
		<?php echo do_shortcode('[products paginate="false" limit="4" columns="4" show_catalog_ordering="no"]'); ?>
	</section>

	</main><!-- #main -->

<?php
get_footer();
