<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
                        <h2 class="title"><?php the_title(); ?></h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="<?php echo home_url('/'); ?>">
                                <i class="themifyicon ti-home"></i> &nbsp; Home
                            </a>
                        </span>
                        <span><?php the_title(); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-main">

    <section class="ttm-row about-section clearfix ">
        <div class="container">
		<?php while ( have_posts() ) : the_post();?>
            <div class="row">
                <div class="col-lg-6">
                    <div
                        class="padding_left30 res-575-padding_left0  res-575-margin_top30 res-575-margin_bottom30 res-991-margin_top30">
                        <div class="ttm_single_image-wrapper imagestyle-two">
							<?php 
							if ( has_post_thumbnail() ) { ?>
								<img class="img-fluid auto_size" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" alt="<?php echo get_the_title();?>" loading="lazy">
							<?php }
							else { ?>
								<img class="img-fluid auto_size" src="<?php echo home_url('/wp-content/uploads/2023/04/no-image.jpg');?>" alt="<?php echo get_the_title();?>" loading="lazy">
							<?php }
							?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="padding_top40">
                        <div class="section-title">
                            <div class="title-header">
                                <h2 class="title"><?php the_title();?></h2>
                            </div>
                            <div class="title-desc">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		<?php endwhile; ?>

		<?php $related = get_posts( array( 
			'post_type'=>'products', 
			'category__in' => wp_get_post_categories($post->ID), 
			'numberposts' => 3, 
			'post__not_in' => array($post->ID) 
			) ); 
			?>
			<?php if( $related ): ?>
            <div class="ttm-horizontal_sep width-100 margin_top30" style="margin-top: 80px;"></div>
            <div class="row ttm-pf-single-related-wrapper margin_top50 mb_15">
                <div class="col-12">
                    <h2>RELATED PRODUCTS</h2>
                </div>
				<?php foreach( $related as $post ) : setup_postdata($post); ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
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
				<?php endforeach; wp_reset_postdata(); ?>
            </div>
			<?php endif; ?>

        </div>
    </section>
</div>


    <?php /* while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'marko' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'marko' ) . '</span> <span class="nav-title">%title</span>',
				)
			);
			?>
	<?php endwhile; */ ?>
	
<?php get_footer();