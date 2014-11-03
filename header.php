<?php wp_head_open(); ?>

<?php wp_head(); ?>

</head>

<body id="<?php echo $post->post_name; ?>-<?php if( is_single() ) { echo 'post'; } elseif( is_category() ) { echo 'archive'; } else { echo 'page'; } ?>" itemscope itemtype="http://schema.org/WebPage">

<div id="header">
	<div class="container_24">
		<div class="grid_6 inner_l">
	        <a href="<?php bloginfo('url'); ?>" class="logo">
				<?php bloginfo('name'); ?>
			</a>
		</div> <!-- /.grid -->

	    <div class="grid_18 inner_r" id="navigation">
		    <?php wp_nav_menu( array( 'menu' => 'Header Menu', 'container_id' => false, 'container_class' => 'header_menu hidden_phone', 'menu_id' => false, 'menu_class' => 'header_menu hidden_phone' ) ); ?>
		</div><!--/#navigation-->

	</div><!-- /.container -->
</div><!--/#header-->
