<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php page_title(); ?>

<div id="content">
	<div class="container_24">

		<div class="grid_18 grid_16_m grid_16_xl">
	        <div class="inner">
		        <?php if ( function_exists('yoast_breadcrumb') ) yoast_breadcrumb('<p id="breadcrumbs">','</p>'); ?>

				<?php the_content(); ?>
				<?php editButton(); ?>
			</div><!--/.inner-->
		</div><!-- /.grid -->

		<div class="grid_6 grid_8_m grid_8_xl sidebar">
			<?php the_sub_pages(); ?>
			<?php dynamic_sidebar('Page Sidebar'); ?>
		</div><!-- /.grid -->

	</div><!-- /.container -->
</div> <!-- /#content -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>
