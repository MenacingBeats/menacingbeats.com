<!-- Wordpress API -->
<?php define('WP_USE_THEMES' , false); require('./testmb/wp-blog-header.php' ); ?>

<html>
	<head>
		<title> SOTD Test </title>
	</head>
	<body>
		<!-- Start loop for category 6 'SOTD' -->
		<?php $query = new WP_Query( 'cat=7&posts_per_page=1' ); ?>
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		
		<div class="post">
			<!-- Display the post title -->
			<h2><?php the_title(); ?></h2>
			
			<!-- Display the post content -->
			<div class="entry"><?php the_content(); ?></div>
			
			<!-- Display the category <p class="postmetadata"><?php esc_html_e( 'Posted in ' ); ?><?php the_category( ', ' ); ?></p>-->
			
			<!-- Display the tags -->
			<p><small><?php the_tags(); ?></small></p>
			
			<!-- Display the artist's socials -->
			<p>Artist Facebook: 
			<a href="<?php echo get_post_meta($post->ID, 'Test-facebook', true); ?>"> 
			<img alt="Qries" src="https://facebookbrand.com/wp-content/uploads/2019/04/f_logo_RGB-Hex-Blue_512.png?w=512&h=512" width="50" height="50">  
			</p>
			
			<!-- Display the post author's avatar -->
			<?php echo get_avatar( get_the_author_meta('user_email'), $size = '100'); ?>
			
			<!-- Display the date and a link to other posts by this author -->
			<p><small><?php the_time( 'jS F, Y' ); ?> by <?php the_author_posts_link(); ?></small></p>
		</div>
		
		<?php endwhile; wp_reset_postdata(); else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</body>
</html>