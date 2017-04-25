<?php

get_header();

// Print front page content.
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();

		the_content();

	endwhile;
endif;

// Get blog posts.
$blogs = new WP_Query( array(
	'post_type'         => 'post',
	'page'              => 1,
	'posts_per_page'    => 5,
));

// Print blog posts.
if ( $blogs->have_posts() ) :

	?>
	<h2><?php _e( 'Announcements' ,'wpcampus' ); ?></h2>
	<div class="wpc-articles">
		<?php

		while ( $blogs->have_posts() ) :
			$blogs->the_post();

			// Get post information.
			$post_id = get_the_ID();
			$post_permalink = get_permalink( $post_id );

			?>
			<article id="post-<?php echo $post_id; ?>" <?php post_class(); ?>>
				<h3><a href="<?php echo $post_permalink; ?>"><?php the_title(); ?></a></h3>
				<?php

				wpcampus_2017_print_article_meta();

				the_excerpt();

				?>
			</article>
			<?php

		endwhile;

		// Restore original post data.
		wp_reset_postdata();

		?>
	</div>
	<p><strong><a href="/announcements/"><?php _e( 'View all announcements', 'wpcampus' ); ?></a></strong></p>
	<?php

endif;

get_footer();
