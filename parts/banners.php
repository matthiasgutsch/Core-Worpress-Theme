<?php
	$bannerLoop = new WP_Query( array( 'post_type' => 'banners', 'name' => 'home-banner' ) );
	if ($bannerLoop->have_posts()) : ?>

<div class="flexslider">
	<ul class="slides">
		<?php
			while ( $bannerLoop->have_posts() ) : $bannerLoop->the_post();
				$gallery_image = get_post_meta( $post->ID , 'gallery');
				$gallery_image = $gallery_image[0];
				$c=0;

				/* the_post_thumbnail( 'hero-banner', array( 'class' => 'scale_with_grid' ) ); */

				foreach( $gallery_image['image'] as $image ) : ?>
		<li>
			<?php if( !empty($gallery_image['link'][$c]) ) : $link=true; ?><a href="<? echo $gallery_image['link'][$c]; ?>"><?php endif; ?>
				<img src="<?php echo $image; ?>" class="scale_with_grid" alt="<? echo $gallery_image['title'][$c]; ?>" />
			<?php if( $link ) : ?></a><?php endif; $link=false; ?>
		<?php $c++; endforeach; endwhile; rewind_posts(); ?>
		</li>
	</ul> <!-- /.slides -->
</div> <!-- /.flexslider -->
<?php endif; ?>
