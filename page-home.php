<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<div id="content">
	<div class="container_24">

		<div class="grid_24 inner">
			<?php include('parts/banners.php'); ?>
		</div> <!-- /.grid -->

		<div class="grid_24">
			<?php dynamic_sidebar('Home Widgets'); ?>
		</div> <!-- /.inner -->


		<div class="grid_24 inner">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				<?php editButton(); ?>
			<?php endwhile; endif; ?>
		</div><!-- /.grid -->

		<div class="inner clearfix">
			<!-- For Styling -->
			<?php include('parts/styles.php'); ?>
		</div> <!-- /.inner -->

	</div><!-- /.container -->
</div> <!-- /#content -->

<?php get_footer(); ?>
