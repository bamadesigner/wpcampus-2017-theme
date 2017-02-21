<?php

// Get some site information.
$theme_dir = trailingslashit( get_template_directory_uri() );

?>
<div id="wpc-get-involved">
	<div class="inside">
		<div class="column social">
			<span class="column-message"><?php _e( 'Get Involved:', 'wpcampus' ); ?></span>
			<ul class="icons">
				<li><a class="slack" href="/get-involved/"><img src="<?php echo $theme_dir; ?>assets/images/slack-black.svg" alt="<?php printf( __( 'Join %1$s on %2$s', 'wpcampus' ), 'WPCampus', 'Slack' ); ?>" /></a></li>
				<li><a class="twitter" href="https://twitter.com/wpcampusorg"><img src="<?php echo $theme_dir; ?>assets/images/twitter-black.svg" alt="<?php printf( __( 'Follow %1$s on %2$s', 'wpcampus' ), 'WPCampus', 'Twitter' ); ?>" /></a></li>
				<li><a class="facebook" href="https://www.facebook.com/wpcampus"><img src="<?php echo $theme_dir; ?>assets/images/facebook-black.svg" alt="<?php printf( __( 'Follow %1$s on %2$s', 'wpcampus' ), 'WPCampus', 'Facebook' ); ?>" /></a></li>
				<li><a class="youtube" href="https://www.youtube.com/wpcampusorg"><img src="<?php echo $theme_dir; ?>assets/images/youtube-black.svg" alt="<?php printf( __( 'Follow %1$s on %2$s', 'wpcampus' ), 'WPCampus', 'YouTube' ); ?>" /></a></li>
				<li><a class="github" href="https://github.com/wpcampus/"><img src="<?php echo $theme_dir; ?>assets/images/github-black.svg" alt="<?php printf( __( 'Follow %1$s on %2$s', 'wpcampus' ), 'WPCampus', 'GitHub' ); ?>" /></a></li>
			</ul>
		</div><!-- .social -->
	</div>
</div><!-- #wpc-get-involved -->

<?php /*<div class="column mailing">
    <span class="column-message"><?php _e( 'Subscribe:', 'wpcampus' ); ?></span>
	<?php echo do_shortcode( '[gravityform id="22" title="false" description="false"]' ); ?>
</div><!-- .mailing -->*/ ?>