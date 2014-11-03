<?php
/*
Template Name: Full Width Page
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php page_title(); ?>

<div id="content">
	<div class="container_24">

		<div class="grid_24">
			<?php if ( function_exists('yoast_breadcrumb') ) yoast_breadcrumb('<p id="breadcrumbs">','</p>'); ?>

            <?php the_content(); ?>
            <?php editButton(); ?>
		</div><!-- /.grid -->

	</div><!-- /.container -->
</div> <!-- /#content -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>
