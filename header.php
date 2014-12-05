<?php wp_head_open(); ?>

<?php wp_head(); ?>

</head>

<body id="<?php echo $post->post_name; ?>-<?php if( is_single() ) { echo 'post'; } elseif( is_category() ) { echo 'archive'; } else { echo 'page'; } ?>" itemscope itemtype="http://schema.org/WebPage">

<div class="offCanvas" data-menu="offcanv_menu">
   <?php wp_nav_menu( array( 'menu' => 'Header Menu', 'container_id' => false, 'container_class' => false, 'menu_id' => false, 'menu_class' => 'offCanvas_menu' ) ); ?>
  
  <ul class="offCanvas_menu_social">
    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
  </ul>
</div> <!-- /.offCanvas -->

<div class="onCanvas">
	<div id="header">
		<div class="container_24">
			<div class="grid_12 grid_12_s grid_12_xs inner_l">
		        <a href="<?php bloginfo('url'); ?>" class="logo">
					<?php bloginfo('name'); ?>
				</a>
			</div> <!-- /.grid -->

			<div class="visible_phone inner_r grid_12 grid_12_s grid_12_xs">
				<a href="#" id="offcanv_menu"></a>
			</div> <!-- /.grid -->

		    <?php wp_nav_menu( array( 'menu' => 'Header Menu', 'container_id' => false, 'container_class' => 'grid_24 hidden_phone inner_r', 'menu_id' => 'mainNav', 'menu_class' => false, 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>

		</div><!-- /.container -->
	</div><!--/#header-->
