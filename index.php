<?php get_header(); ?>

<?php page_title(); ?>

<div id="content">
	<div class="container_24">

		<div class="grid_18">
	        <div class="inner">

		        <?php if ( function_exists('yoast_breadcrumb') ) yoast_breadcrumb('<p id="breadcrumbs">','</p>'); ?>

				<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

					<div class="post" id="post-<?php the_ID(); ?>">
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

						<?php the_excerpt(); ?>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Continue reading <?php the_title_attribute(); ?>" class="btn btn-small">Continue Reading</a>

						<?php include('parts/post-meta.php'); ?>

					</div><!-- /.post -->

					<?php endwhile; ?>

			        <div class="pager">
	                    <div class="previous"> <?php next_posts_link('&laquo; Older Entries') ?></div>
	                    <div class="next"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	                </div><!-- /navigation -->

				<?php endif; ?>

			</div><!--/.inner-->
		</div><!-- /.grid -->

		<div class="grid_6 sidebar">
			<div class="inner">
				<?php dynamic_sidebar('Blog Sidebar'); ?>
			</div><!-- /.inner -->
		</div><!-- /.grid -->

	</div><!-- /.container -->
</div> <!-- /#content -->

<?php get_footer(); ?>
