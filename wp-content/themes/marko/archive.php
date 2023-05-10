<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Marko
 */

get_header(); ?>
<!--Start Banner------>
<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-dark clearfix"
    style="<?php if( !empty(get_field('header_banner')['url']) ) echo "background-image: url(".get_field('header_banner')['url'].")";?>">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title"><?php the_archive_title(); ?></h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="<?php echo home_url('/'); ?>">
                                <i class="themifyicon ti-home"></i> &nbsp; Home
                            </a>
                        </span>
                        <span><?php the_archive_title(); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if ( have_posts() ) : ?>
<div class="site-main">
    <section class="clearfix" style="padding-top: 90px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--section-title -->
                    <div class="section-title res-991-padding_bottom0">
                        <div class="title-header">
                            <!-- <h2 class="title"><?php //echo get_field('category_heading');?></h2> -->
                            <h2 class="title"><?php echo the_archive_title();?></h2>
                        </div>
                    </div>
                    <!--section-title-end -->
                </div>
                <div class="col-lg-12">
                    <div class="description padding_top30 padding_bottom30 res-991-padding_top0">
                        <p><?php echo the_archive_description();?></p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="grid-section clearfix mb-5">
        <div class="container">
            <!-- row -->
            <div class="row">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php //get_template_part( 'template-parts/content', get_post_type() );?>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<!-- featured-imagebox-portfolio -->
					<div class="featured-imagebox featured-imagebox-portfolio style1">
						<!-- ttm-box-view-overlay -->
						<div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
							<!-- featured-thumbnail -->
							<div class="featured-thumbnail">
								<a href="<?php the_permalink();?>">
									<?php 
									if ( has_post_thumbnail() ) { ?>
										<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>"  class="img-fluid" >
									<?php } else {?>
										<img src="<?php echo home_url('/wp-content/uploads/2023/04/no-image.jpg');?>"  class="img-fluid" >
									<?php } ?>
								</a>
							</div><!-- featured-thumbnail end-->
							<div class="ttm-media-link">
								<a href="<?php the_permalink();?>" class="ttm_link">
									<i class="fa fa-plus" aria-hidden="true"></i>
								</a>
							</div>
						</div><!-- ttm-box-view-overlay end-->
						<div class="featured-content featured-content-portfolio">
							<div class="featured-title">
								<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
							</div>

							<?php $category_detail = get_the_terms( $post->ID, 'product_category' ); ?>
							<?php if( $category_detail ): ?>
							<span class="category">
								<?php $a=1; foreach($category_detail as $cd){ ?>
									<?php if($a == 1){ ?>
									<span><?php echo $cd->name;?></span>
									<?php } ?>
								<?php $a++; } ?>
							</span>
							<?php endif; ?>
						</div>
					</div><!-- featured-imagebox-portfolio -->
				</div>
			<?php endwhile;?>

			<?php the_posts_navigation();?>
				
            </div><!-- row end -->
        </div>
    </div>
</div>
<?php else :?>
<?php get_template_part( 'template-parts/content', 'none' );?>
<?php endif; ?>
<?php
get_footer();