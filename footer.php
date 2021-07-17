<?php 
/**
 * Dusk Magazine footer
**/ 
?>
</section>
<!--wrapper-->
<?php $dusk_magazine_footer_advert = get_option( 'dusk_magazine_footer_advert' );if ( ! empty( $dusk_magazine_footer_advert ) ){?>
<div class="footer-ad-space">
	<?php echo dusk_magazine_ad_widget_sanitize(get_option('dusk_magazine_footer_advert')); ?>
</div>
<!-- footer-ad-space -->
<?php } ?>
<footer id="footer">

	<div class="footer-wrap">
		<div class="footer-logo">
			<a href="<?php echo esc_url(home_url('/')); ?>">
				<img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
			</a>
		</div>
		<!--footer-logo-->
			<?php if(get_option('dusk_magazine_instagram')||get_option('dusk_magazine_youtube')||get_option('dusk_magazine_google')||get_option('dusk_magazine_pinterest')||get_option('dusk_magazine_twitter')||get_option('dusk_magazine_facebook')) { ?>		
		<div class="content-social">
			<div class="social-title-footer">
				<?php echo esc_html(get_option('dusk_magazine_social_footer_translate')); ?>
			</div>
			<ul>
				<?php if(get_option('dusk_magazine_facebook')) { ?>
				<li>
					<a href="<?php echo esc_url(get_option('dusk_magazine_facebook')); ?>" class="fb-social-icon" target="_blank">
					</a>
				</li>
				<?php } ?>
				<?php if(get_option('dusk_magazine_twitter')) { ?>
				<li>
					<a href="<?php echo esc_url(get_option('dusk_magazine_twitter')); ?>" class="twitter-social-icon" target="_blank">
					</a>
				</li>
				<?php } ?>
				<?php if(get_option('dusk_magazine_pinterest')) { ?>
				<li>
					<a href="<?php echo esc_url(get_option('dusk_magazine_pinterest')); ?>" class="pinterest-social-icon" target="_blank">
					</a>
				</li>
				<?php } ?>
				<?php if(get_option('dusk_magazine_google')) { ?>
				<li>
					<a href="<?php echo esc_url(get_option('dusk_magazine_google')); ?>/posts" class="google-social-icon" target="_blank">
					</a>
				</li>
				<?php } ?>
				<?php if(get_option('dusk_magazine_youtube')) { ?>
				<li>
					<a href="<?php echo esc_url(get_option('dusk_magazine_youtube')); ?>" class="youtube-social-icon" target="_blank">
					</a>
				</li>
				<?php } ?>
				<?php if(get_option('dusk_magazine_instagram')) { ?>
				<li>
					<a href="<?php echo esc_url(get_option('dusk_magazine_instagram')); ?>" class="instagram-social-icon" target="_blank">
					</a>
				</li>
				<?php } ?>
				<li>
					<a href="<?php bloginfo('rss_url'); ?>" class="rss-social-icon">
					</a>
				</li>
			</ul>
		</div>
		<!--content-social-->
		<?php } ?>	

		<nav id="bottom-menu">
			<?php if ( has_nav_menu( 'bottom-menu' ) ) {wp_nav_menu(array('theme_location' => 'bottom-menu', 'depth' => 1));} else { echo '<span class="add-menu">ADD MENU</span>';}?>
		</nav>
		<!--bottom-menu-->	
	</div>
	<!--footer-wrap-->
	<div class="copyright footer-wrap">
		<div class="copyright-text">
			<?php echo esc_html(get_option('dusk_magazine_copyright')); ?>
		</div>
		<!--copyright-text-->
		<?php if(get_option('dusk_magazine_footer_default')) {?> 
		<div class="copyright-image">
				<?php if(get_option('dusk_magazine_footer_link')) {?> 
				<a href="<?php echo esc_url(get_option('dusk_magazine_footer_link')); ?>" target="_blank">
				<?php } ?>				
					<img src="<?php echo esc_url(get_option('dusk_magazine_footer_default')); ?>" alt="<?php bloginfo( 'name' ); ?>"/>	
				<?php if(get_option('dusk_magazine_footer_link')) {?> 
				</a>
		<?php } ?>	
		</div>
		<!-- copyright-image -->
		<?php } ?>
	</div>
	<!--copyright-->
</footer>
<!--footer-->
<?php wp_footer(); ?>
</body></html>
