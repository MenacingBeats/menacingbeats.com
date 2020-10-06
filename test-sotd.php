<?php /* Initiate Wordpress API */ define('WP_USE_THEMES' , false); require('/home2/thesamp9/public_html/content/wp-blog-header.php' ); ?>

<html>
	<head>
		<title>Test SOTD</title>
	</head>
	<body>
		<?php /* Start loop for category 2 'SOTD' */ $query = new WP_Query( 'cat=2&posts_per_page=1' ); ?>
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		
		<div class="post">
		
			<h2>SOTD <?php /* Display the day and post title */ the_time('D'); ?>: <?php the_title(); ?></h2>
	
			<div class="entry"><?php /* Display the post content */ the_content(); ?></div>
			
			<p><small><?php /* Display the date and a link to other posts by this author */ the_time('l, jS F Y'); ?> by <?php the_author_posts_link(); ?></small></p>
			<?php /* Display the post author's avatar */ echo get_avatar( get_the_author_meta('user_email'), $size = '75'); ?>
			
			<p>Hungry for more content? Click the <small><?php /* Display the tags */ the_tags(); ?></small></p>
			
			<p>Artist: 
			<a href="<?php /* Display Website icon & link  */ echo get_post_meta($post->ID, 'artist-website', true); ?>">
			<img alt="Qries" src="https://facebookbrand.com/wp-content/uploads/2019/04/f_logo_RGB-Hex-Blue_512.png?w=512&h=512" width="50" height="50"></a> 
			<a href="<?php /* Display Facebook icon & link  */ echo get_post_meta($post->ID, 'artist-facebook', true); ?>">
			<img alt="Qries" src="https://facebookbrand.com/wp-content/uploads/2019/04/f_logo_RGB-Hex-Blue_512.png?w=512&h=512" width="50" height="50"></a>  
			<a href="<?php /* Display Soundcloud icon & link  */ echo get_post_meta($post->ID, 'artist-soundcloud', true); ?>">
			<img alt="Qries" src="https://w.soundcloud.com/icon/?" width="50" height="50"></a>  
			<a href="<?php /* Display Beatport icon & link  */ echo get_post_meta($post->ID, 'artist-beatport', true); ?>">
			<img alt="Qries" src="https://support.beatport.com/hc/en-us/article_attachments/201330410/Logo_Mark.png" width="50" height="50"></a>
			</p>
			
			<p>Label/Promoter: 
			<a href="<?php /* Display Website icon & link  */ echo get_post_meta($post->ID, 'promoter-website', true); ?>">
			<img alt="Qries" src="https://support.beatport.com/hc/en-us/article_attachments/201330410/Logo_Mark.png" width="50" height="50"></a>
			<a href="<?php /* Display Facebook icon & link  */ echo get_post_meta($post->ID, 'promoter-facebook', true); ?>">
			<img alt="Qries" src="https://facebookbrand.com/wp-content/uploads/2019/04/f_logo_RGB-Hex-Blue_512.png?w=512&h=512" width="50" height="50"></a>  
			<a href="<?php /* Display Soundcloud icon & link  */ echo get_post_meta($post->ID, 'promoter-soundcloud', true); ?>">
			<img alt="Qries" src="https://w.soundcloud.com/icon/?" width="50" height="50"></a>  
			<a href="<?php /* Display Beatport icon & link  */ echo get_post_meta($post->ID, 'promoter-beatport', true); ?>">
			<img alt="Qries" src="https://support.beatport.com/hc/en-us/article_attachments/201330410/Logo_Mark.png" width="50" height="50"></a>
			</p>
			
		</div>
		
		<?php endwhile; wp_reset_postdata(); else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</body>
</html>