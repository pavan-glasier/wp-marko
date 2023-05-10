<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Marko
 */
?>
<!-----------------footer start-------------->
<footer class="footer widget-footer clearfix">
	<?php if( empty( get_field('address', 'option') ) && empty( get_field('email', 'option') ) && empty( get_field('phone', 'option') ) ): ?>
    <?php else: ?>
	<div class="first-footer">
        <div class="container">
            <div class="row">
                <div class="htc__contact__wrap clearfix">
					<?php if( !empty( get_field('address', 'option') ) ): ?>
                    <!------------- Start Single Address ------------->
                    <div class="ht__address__inner">
                        <div class="ht__address__icon map-pin">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="ht__address__details">
                            <p><?php echo get_field('address', 'option');?></p>
                        </div>
                    </div>
                    <!------------- End Single Address ------------->
					<?php endif; ?>

					<?php if( !empty( get_field('email', 'option') ) ): ?>
                    <!------------- Start Mail --------------->
                    <div class="ht__address__inner">
                        <div class="ht__address__icon glob">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                        </div>
                        <div class="ht__address__details">
                            <p><a href="mailto:<?php echo get_field('email', 'option');?>"><?php echo get_field('email', 'option');?></a></p>
                        </div>
                    </div>
                    <!------------ End Mail ---------->
					<?php endif; ?>

					<?php if( !empty( get_field('phone', 'option') ) ): ?>
                    <!------- Start Phone ----------->
                    <div class="ht__address__inner">
                        <div class="ht__address__icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="ht__address__details">
                            <p><a href="tel:<?php echo get_field('phone', 'option');?>"><?php echo get_field('phone', 'option');?></a></p>
                        </div>
                    </div>
                    <!-------------- End Phone ------------>
					<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
	<?php endif; ?>
    <div class="second-footer ttm-bgimage-yes bg-footer ttm-bg ttm-bgcolor-darkgrey">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 logo-footer">
					<?php if( !empty( get_field('footer_logo', 'option')['url'] ) ):?>
                    <img src="<?php echo esc_url( get_field('footer_logo', 'option')['url'] );?>">
					<?php endif;?>
                </div>
                <div class="col-md-6">
					<?php if( have_rows('social_media', 'option') ): ?>
                    <ul class="social-icons">
						<?php while( have_rows('social_media', 'option') ): the_row(); ?>
						<?php if( !empty( get_sub_field('url') ) ) : ?>
                        <li><a href="<?php echo get_sub_field('url'); ?>"><?php echo get_sub_field('icon'); ?></a></li>
						<?php endif; ?>
						<?php endwhile; ?>
                        <!-- <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li> -->
                    </ul>
					<?php endif; ?>
                </div>
            </div>
        </div>
        <div class="bottom-footer-text ttm-bg copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
						<?php if( !empty( get_field('copyright', 'option') ) ): ?>
                        <div class="text-left">
                            <span class="cpy-text"><?php echo get_field('copyright', 'option');?></span>
                        </div>
						<?php endif; ?>
                    </div>
                    <div class="col-sm-6">
						<?php if( have_rows('footer_bottom_link', 'option') ): ?>
                        <ul class="footer-nav-menu text-end">
							<?php while( have_rows('footer_bottom_link', 'option') ): the_row(); ?>
							<?php 
							$footer_bottom_link = get_sub_field('link');
							if( $footer_bottom_link ): 
								$footer_bottom_link_url = $footer_bottom_link['url'];
								$footer_bottom_link_title = $footer_bottom_link['title'];
								$footer_bottom_link_target = $footer_bottom_link['target'] ? $footer_bottom_link['target'] : '_self';
								?>
								<li>
									<a href="<?php echo esc_url( $footer_bottom_link_url ); ?>" target="<?php echo esc_attr( $footer_bottom_link_target ); ?>"><?php echo esc_html( $footer_bottom_link_title ); ?></a>
								</li>
							<?php endif; ?>
							<?php endwhile; ?>
                        </ul>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!------------------footer end------------------->

<!----------back-to-top start-------------->
<a id="totop" href="#top">
    <i class="fa fa-angle-up"></i>
</a>
<!---------------back-to-top end------------>

</div>
<?php wp_footer(); ?>

</body>

</html>