<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
						<?php wp_title(''); ?>
						</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="<?php echo home_url('/'); ?>">
                                <i class="themifyicon ti-home"></i> &nbsp; Home
                            </a>
                        </span>
                        <span>
							<?php wp_title(''); ?>
						</span>
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
						<?php 
                        if ( has_post_thumbnail() ) { ?>
                            <img class="img-fluid" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" alt="<?php echo get_the_title();?>" loading="lazy">
                        <?php }
                        else { ?>
                            <img class="img-fluid" src="<?php echo home_url('/wp-content/uploads/2023/04/no-image.jpg');?>" alt="<?php echo get_the_title();?>" loading="lazy">
                        <?php }
                        ?>
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
