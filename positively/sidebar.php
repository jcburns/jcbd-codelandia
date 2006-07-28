	<div id="sidebar">
		<ul>
			
			<li>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			</li>

			<li>
			<?php /* If this is a 404 page */ if (is_404()) { ?>
			<?php /* If this is a category archive */ } elseif (is_category()) { ?>
			<p>You are currently browsing the <strong><?php single_cat_title('');  ?></strong> archives.</p>
			
			<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> archives
			for the day <?php the_time('l, F jS, Y'); ?>.</p>
			
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> archives
			for <?php the_time('F, Y'); ?>.</p>

      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<p>You are currently browsing the <a href="<?php bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> archives
			for the year <?php the_time('Y'); ?>.</p>
			
		 <?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
			<p>You have searched the <a href="<?php echo bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> archives
			for <strong>'<?php echo wp_specialchars($s); ?>'</strong>. If you are unable to find anything in these search results, you can try one of these links.</p>

			<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<p>You are currently browsing the <a href="<?php echo bloginfo('home'); ?>/"><?php echo bloginfo('name'); ?></a> archives.</p>

			<?php } ?>
			</li>

<?php if ( is_home() ) { ?>				
				<li><h2>Welcome</h2>
				<ul>
			Since 1995, an online diary,<br />an attempt to journal,<br />yes...a weblog.
				</ul>
				</li>
<?php } ?>
<?php if ( is_home() || is_page() ) { ?>	

			<li><h2>Here and now.</h2>
				<ul>
				<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
				<?php wp_list_pages('title_li=<h2>Also</h2>&depth=1' ); ?>
				</ul>

				<?php get_links_list(); ?>
			</li>

			<li><h2>Recently</h2>
				<ul>
				<?php wp_get_archives('type=postbypost&limit=15'); ?>
				</ul>
			</li>
			
<?php } ?>
			<li><h2>Archives</h2>
				<ul>
			         <?php monthchunks("descending", "alpha"); ?>
				</ul>
			</li>

		
		
<?php if ( is_home() || is_page() ) { ?>
			<li><h2>Current terror alert level</h2>
				<ul>
				<a href="http://www.geekandproud.net/terror/"> <img alt="Terror Alert Level" src="http://www.geekandproud.net/terror/terror.php" /> </a>
				</ul>
			</li>		
<?php } ?>			
				<li><h2>Feedlandia, etc.</h2>
				<ul>
					<?php wp_register(); ?>
					<?php wp_loginout(); ?>
					<?php wp_meta(); ?>
					<li><a href="feed:<?php bloginfo('rss2_url'); ?>">Entries (RSS 2.0)</a></li>
					<li><a href="feed:<?php bloginfo('atom_url'); ?>">Entries (Atom)</a></li>
					<li><a href="feed:<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS 2.0)</a></li>

				</ul>
				</li>

			
		</ul>
	</div>

