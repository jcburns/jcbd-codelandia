<?php get_header(); ?>

<script type="text/javascript" src="<?php echo get_settings('siteurl'); ?>/wp-content/plugins/falbum/res/falbum.js"></script>
<script type="text/javascript" src="<?php echo get_settings('siteurl'); ?>/wp-content/plugins/falbum/res/overlib.js"></script>
<script type="text/javascript" src="<?php echo get_settings('siteurl'); ?>/wp-content/plugins/falbum/res/prototype.js"></script>

	<div id="content" class="narrowcolumn">
<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>

		 <?php 
		 
		 $falbum->show_photos(); 
		 
		 ?>
	</div>
</div>
<?php get_footer(); ?>