<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Marko
 */
?>

<!--Start Banner------>
<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-dark clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title"><?php esc_html_e( 'Nothing Found', 'marko' ); ?></h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="<?php echo home_url('/'); ?>">
                                <i class="themifyicon ti-home"></i> &nbsp; Home
                            </a>
                        </span>
                        <span><?php esc_html_e( 'Nothing Found', 'marko' ); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-main no-results not-found">
	<section class="ttm-row padding_bottom70 ttm-bgcolor-grey clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--section-title-->
                    <div class="section-title title-style-center_text margin_bottom30">
                        <div class="title-header">
                            <h3><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'marko' ); ?></h3>
                            <h2 class="title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'marko' ); ?></h2>
                        </div>
						<a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark" href="<?php echo home_url('/');?>" target="_self">Home <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                    <!--section-title-end-->
                </div>
            </div>
		</div>
	</section>
</div><!-- .no-results -->
