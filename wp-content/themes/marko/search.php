<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Marko
 */

get_header(); ?>
<style>
.featured-imagebox-sevices.style1:hover {
    margin-bottom: 30px !important;
    padding-bottom: 30px;
}
</style>
<?php if ( have_posts() ) : ?>
<!--Start Banner------>
<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-dark clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title">
                            <?php printf( esc_html__( 'Search Results for: %s', 'marko' ), get_search_query() ); ?></h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="<?php echo home_url('/'); ?>">
                                <i class="themifyicon ti-home"></i> &nbsp; Home
                            </a>
                        </span>
                        <span><?php printf( esc_html__( 'Search Results for: %s', 'marko' ), get_search_query() ); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ttm-row clearfix ttm-bgcolor-grey">
    <div class="container">
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="col-lg-4">
                <div class="featured-imagebox featured-imagebox-sevices style1">
                    <div class="featured-content">
						<div class="featured-thumbnail">
							
						</div>
                        <div class="featured-title">
                            <h3>
								<a href="<?php echo the_permalink(); ?>" ><?php echo get_the_title(); ?></a>
							</h3>
                        </div>
                        <div class="ttm-details-link">
                            <a href="<?php echo the_permalink(); ?>" class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-darkgrey ttm-icon_element-size-xs">
                                <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; the_posts_navigation(); ?>
        </div>
    </div>
</section>
<?php else :
	get_template_part( 'template-parts/content', 'none' );
endif; ?>
<?php get_footer();