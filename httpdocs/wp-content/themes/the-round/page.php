<?php get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
			<?php	get_template_part( 'loop', 'page' );
			?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
