<?php 
/**
* Template Name: About Us
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
    <?php if( have_rows('sections') ) : ?>
    <?php while ( have_rows('sections') ) : the_row(); ?>


    <?php if( get_row_layout() == 'about_section' ) : ?>
    <!-- about-section -->
    <section class="ttm-row about-section clearfix ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <?php if( !empty( get_sub_field('image')['url'] ) ): ?>
                    <div class="ttm_single_image-wrapper res-991-padding_bottom30">
                        <img class="img-fluid auto_size" src="<?php echo get_sub_field('image')['url']; ?>"
                            alt="<?php echo get_sub_field('image')['alt']; ?>">
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-lg-6">
                    <?php if( have_rows('content_group') ): ?>
                    <?php while( have_rows('content_group') ): the_row(); ?>
                    <div class="section-title padding_top10">
                        <div class="title-header">
                            <?php if( !empty( get_sub_field('tag_line') ) ): ?>
                            <h3><?php echo get_sub_field('tag_line'); ?></h3>
                            <?php endif; ?>
                            <?php if( !empty( get_sub_field('heading') ) ): ?>
                            <h2 class="title"><?php echo get_sub_field('heading'); ?></h2>
                            <?php endif; ?>
                        </div>
                        <?php if( !empty( get_sub_field('contents') ) ): ?>
                        <div class="title-desc">
                            <p><?php echo get_sub_field('contents'); ?></p>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php if( have_rows('cards') ): ?>
                    <div class="row g-0 border-bottom">
                        <?php while( have_rows('cards') ): the_row(); ?>
                        <div class="col-sm-6">
                            <div class="featured-icon-box icon-align-before-content padding_bottom10  ">
                                <!-- <div class="featured-icon">
                                    <div
                                        class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                        <i class="flaticon flaticon-home"></i>
                                    </div>
                                </div> -->
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3 class="mb-1"><a href="#"><?php echo get_sub_field('title'); ?></a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p><?php echo get_sub_field('details'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                    <!-- progress-bar -->
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!--about-section-end-->
    <?php endif; ?>



    <?php if( get_row_layout() == 'mission_vision_section' ) : ?>
    <!----------Mission & Vision Section Start ----------->
    <section class="ttm-row perfomance-section bg-layer-equal-height ttm-bgcolor-grey clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <?php if( have_rows('content_group') ):?>
                    <?php while( have_rows('content_group') ): the_row();?>
                    <div class="section-title ">
                        <div class="title-header">
                            <?php if( !empty( get_sub_field('tag_line') ) ): ?>
                            <h3><?php echo get_sub_field('tag_line'); ?></h3>
                            <?php endif; ?>
                            <?php if( !empty( get_sub_field('heading') ) ): ?>
                            <h2 class="title"><?php echo get_sub_field('heading'); ?></h2>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if( have_rows('tabs') ): ?>
                    <div class="ttm-tabs ttm-tab-style-01 clearfix" data-effect="fadeIn">
                        <ul class="tabs">
                            <?php while( have_rows('tabs') ): the_row();?>
                            <li class="tab<?php echo (get_row_index()==1)?' active':''; ?>">
                                <a href="#"><?php echo get_sub_field('title'); ?></a>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <div class="content-tab padding_top30 padding_bottom30">
                            <?php while( have_rows('tabs') ): the_row();?>
                            <div class="content-inner<?php echo (get_row_index()==1)?' active':''; ?>">
                                <div class="ttm-tabs-desc">
                                    <p><?php echo get_sub_field('contents'); ?></p>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif;?>

                    <?php endwhile; ?>
                    <?php endif;?>
                </div>
                <div class="col-lg-6">
                    <?php if( have_rows('image_group') ):?>
                    <?php while( have_rows('image_group') ): the_row();?>
                    <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-white ttm-right-span position-relative">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                            <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-eight ttm-right-span">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"
                                    <?php if( !empty(get_sub_field('image')['url']) ): ?>
                                    style="background-image: url('<?php echo get_sub_field('image')['url']; ?>')"
                                    <?php endif;?>></div>
                                <div class="layer-content"></div>
                            </div>
                            <?php if( !empty(get_sub_field('image')['url']) ): ?>
                            <img class="img-fluid ttm-equal-height-image w-100 res-991-margin_bottom30"
                                src="<?php echo get_sub_field('image')['url']; ?>"
                                alt="<?php echo get_sub_field('image')['alt']; ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif;?>
                </div>
            </div>
            <?php if( have_rows('image_group') ):?>
            <?php while( have_rows('image_group') ): the_row();?>
            <?php if( have_rows('counter') ):?>
            <?php while( have_rows('counter') ): the_row();?>
            <div class="row g-0">
                <div class="col-lg-9">
                    <div class="border-right">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-grey ttm-bg ttm-right-span">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer spacing-11 vertical-border">
                            <div class="ttm-col-wrapper-bg-layer-inner"></div>
                        </div>
                        <div class="layer-content">
                            <div class="fid-box-style">
                                <div class="ttm-fid inside style5">
                                    <div class="ttm-fid-contents">
                                        <h4 class="ttm-fid-inner">
                                            <span data-appear-animation="animateDigits" data-from="0"
                                                data-to="<?php echo get_sub_field('number');?>" data-interval="1"
                                                data-before="" data-before-style="sup"
                                                data-after="<?php echo get_sub_field('affix');?>" data-after-style="sub"
                                                class="numinate"><?php echo get_sub_field('number');?></span><span><?php echo get_sub_field('affix');?></span>
                                        </h4>
                                    </div>
                                    <div class="ttm-fid-title">
                                        <p><?php echo get_sub_field('title');?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif;?>
            <?php endwhile; ?>
            <?php endif;?>
        </div>
    </section>
    <!---------------Mission & Vision Section End----------->
    <?php endif; ?>


    <?php if( get_row_layout() == 'quote_section' ) : ?>
    <?php if( !empty( get_sub_field('heading') ) ): ?>
    <section class="ttm-row  ttm-bgimage-yes bg-img8 ttm-bg ttm-bgcolor-darkgrey clearfix ">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title style3 text-center">
                        <h2 class="title"><?php echo get_sub_field('heading'); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <?php endif; ?>

    <?php if( get_row_layout() == 'testimonial_section' ) : ?>
    <?php if( get_sub_field('display_testimonial') ): ?>

    <?php $testiArgs = array(
            'post_type' => 'testimonials',
            'order' => 'DESC',
        ); ?>

    <?php $testiQuery = new WP_Query($testiArgs);
        if ($testiQuery->have_posts()) : ?>
    <!---------------- Testimonial Section Start ----------------->
    <section
        class="ttm-row client-saying-section testimonial-column ttm-bgimage-yes bg-img2 ttm-bg ttm-bgcolor-grey clearfix">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title title-style-center_text">
                        <div class="mb-5">
                            <?php if( !empty( get_sub_field('tag_line') ) ): ?>
                            <h3><?php echo get_sub_field('tag_line'); ?></h3>
                            <?php endif; ?>
                            <?php if( !empty( get_sub_field('heading') ) ): ?>
                            <h2 class="title"><?php echo get_sub_field('heading'); ?></h2>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0 res-1199-plr15">
                <div class="col-lg-12">
                    <div class="row ttm-bg ttm-right-span ttm-expandcontent-yes">
                        <div class="ttm-expandcontent-yes-wrapper">
                            <div class="expandcontent">
                                <div class="slick_slider"
                                    data-slick='{"slidesToShow": 2, "slidesToScroll": 1, "arrows":false, "autoplay":true, "dots":false, "infinite":true, "responsive":[{"breakpoint":992,"settings":{"slidesToShow": 2}},{"breakpoint":840,"settings":{"slidesToShow": 1}}]}'>
                                    <?php while ($testiQuery->have_posts()) : $testiQuery->the_post(); ?>
                                    <div class="testimonials ttm-testimonial-box-view-style2">
                                        <?php if( !empty( get_field('profile_image')['url'] ) ): ?>
                                        <div class="testimonial-avatar">
                                            <div class="testimonial-img">
                                                <img class="img-center"
                                                    src="<?php echo get_field('profile_image')['url'];?>"
                                                    alt="<?php echo get_field('profile_image')['alt'];?>">
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <div class="testimonial-content">
                                            <blockquote><?php echo get_field('quotes');?></blockquote>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------------Testimonial Section End ----------------->
    <?php endif; ?>
    <?php endif; ?>
    <?php endif; ?>

    <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer();