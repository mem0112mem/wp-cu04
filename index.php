<?php
/**
 * The main template file.
 *
 * @package totomo
 */

get_header(); ?>

<?php echo("おはようございます！")?>

<div id="main-grid" class="row">
	<div id="primary" class="content-area col-md-12">
		<main id="main" class="site-main" role="main">
			<?php if ( have_posts() ) : ?>
				<?php if ( ! is_home() ) : ?>
					<header class="page-header">
						<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						?>
					</header><!-- .page-header -->
				<?php endif ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php
				$args = array( 'prev_text' => '', 'next_text' => '', );
				echo '<div class="blog-pagination">' . paginate_links( $args ) . '</div>'; ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->
</div><!-- #main-grid -->
<?php get_footer(); ?>
