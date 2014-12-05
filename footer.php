	<div id="footer">
		<div class="container_24">
			<div class="grid_12 hidden_phone">
				<?php if( function_exists(get_menu_list) ) get_menu_list('Primary Navigation', 6); ?>
			</div><!--/grid-->

			<div class="grid_12 text_align_right float_right">
					<?php wp_nav_menu( array( 'menu' => 'Footer Menu', 'container_id' => false, 'menu_id' => false, 'menu_class' => 'footer_sub_menu', 'depth' => '1' ) ); ?>
					<br class="clear" />

					<?php echo $footer_text = get_option('nbm_footer_text'); if( !empty($footer_text) ) { echo '<br />'; } ?>
					&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All rights reserved.<br />
					<a href="http://www.mcnam.ee">Website by Matt Mcnamee</a>
		    </div><!--/grid-->
		</div> <!-- /.container -->
	</div><!-- /#footer -->
</div> <!-- /.onCanvas -->

<!-- WORDPRESS FOOTER -->
<?php wp_footer(); ?>

</body>
</html>
