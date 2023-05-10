<?php 
/**
* Template Name: Home
*/
get_header(); ?>

<?php if( have_rows('sections') ) : ?>
<div class="site-main">
    <?php while ( have_rows('sections') ) : the_row(); ?>

    <?php if( get_row_layout() == 'slider_section' ) : ?>
    <!----------- Banner start ------------->
    <?php if( have_rows('slide') ): ?>
    <p class="rs-p-wp-fix"></p>
    <rs-module-wrap id="rev_slider_1_1_wrapper" data-alias="main-classic-01" data-source="gallery"
        style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
        <rs-module id="rev_slider_1_1" style="" data-version="6.5.7">
            <rs-slides>
                <?php while( have_rows('slide') ): the_row(); ?>
                
                <?php if( !empty(get_sub_field('banner')['url']) ): ?>
                    <?php if( get_sub_field('title_position') == 'left'): ?>
                    <rs-slide style="position: absolute;" data-key="rs-<?php echo get_row_index(); ?>" data-title="Slide"
                        data-thumb="<?php echo get_sub_field('banner')['url'];?>" data-filter="e:late;b:6;"
                        data-in="o:0;sx:1.05;sy:1.05;e:power1.in;">
                        <img src="<?php echo get_sub_field('banner')['url'];?>" title="mainslider-bg1" width="1920" height="810"
                            class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="<?php echo get_sub_field('banner')['url'];?>" data-no-retina>

                        <rs-layer id="slider-1-slide-1-layer-1" data-type="text" data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:80px,80px,0,0;y:m;yo:-53px,-53px,-52px,-42px;"
                            data-text="w:normal;s:70,70,55,40;l:90,90,56,50;fw:800;" data-frame_0="x:-50,-50,-31,-19;"
                            data-frame_1="st:180;sp:800;sR:180;" data-frame_999="o:0;st:w;sR:8020;"
                            style="z-index:9;font-family:'inter';"><?php echo get_sub_field('title');?>
                        </rs-layer>

                        <rs-layer id="slider-1-slide-1-layer-3" data-type="shape" data-rsp_ch="on"
                            data-xy="xo:30px,30px,-238px,-146px;y:m;yo:-58px,-54px,33px,20px;"
                            data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                            data-dim="w:7px,7px,3px,1px;h:260px,260px,162px,99px;" data-vbility="t,t,f,f"
                            data-frame_0="x:50,50,31,19;" data-frame_1="st:200;sp:400;sR:110;"
                            data-frame_999="o:0;st:w;sR:8490;" style="z-index:13;background-color:#ffb200;">
                        </rs-layer>

                        <rs-layer id="slider-1-slide-1-layer-4" data-type="shape" data-rsp_ch="on"
                            data-xy="xo:30px,30px,-281px,-173px;y:m;yo:-183px,-183px,-90px,-55px;"
                            data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                            data-dim="w:150px,150px,93px,57px;h:7px,7px,3px,1px;" data-vbility="t,t,f,f"
                            data-frame_0="x:50,50,31,19;" data-frame_1="st:110;sp:400;sR:110;"
                            data-frame_999="o:0;st:w;sR:8490;" style="z-index:12;background-color:#ffb200;">
                        </rs-layer>
                    </rs-slide>
                    <?php else: ?>
                    <rs-slide style="position: absolute;" data-key="rs-2" data-title="Slide"
                        data-thumb="<?php echo get_sub_field('banner')['url'];?>" data-filter="e:late;b:6;"
                        data-in="o:0;sx:1.05;sy:1.05;e:power1.in;">
                        <img src="<?php echo get_sub_field('banner')['url'];?>" title="mainslider-bg2" width="1920" height="810"
                            class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="<?php echo get_sub_field('banner')['url'];?>" data-no-retina>

                        <rs-layer id="slider-1-slide-2-layer-1" data-type="text" data-rsp_ch="on"
                            data-xy="x:r,r,c,c;xo:75px,75px,0,0;y:m;yo:-55px,-55px,-80px,-90px;"
                            data-text="w:normal;s:70,70,55,40;l:90,90,56,50;fw:800;" data-frame_0="x:-50,-50,-31,-19;"
                            data-frame_1="st:180;sp:800;sR:180;" data-frame_999="o:0;st:w;sR:8020;"
                            style="z-index:9;font-family:'inter';"><?php echo get_sub_field('title');?>
                        </rs-layer>

                        <rs-layer id="slider-1-slide-2-layer-3" data-type="shape" data-rsp_ch="on"
                            data-xy="x:r;xo:30px,30px,-238px,-146px;y:m;yo:-54px,-54px,33px,20px;"
                            data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                            data-dim="w:7px,7px,3px,1px;h:260px,260px,162px,99px;" data-vbility="t,t,f,f"
                            data-frame_0="x:50,50,31,19;" data-frame_1="st:110;sp:400;sR:110;"
                            data-frame_999="o:0;st:w;sR:8490;" style="z-index:14;background-color:#ffb200;">
                        </rs-layer>

                        <rs-layer id="slider-1-slide-2-layer-4" data-type="shape" data-rsp_ch="on"
                            data-xy="x:r;xo:30px,30px,-281px,-173px;y:m;yo:-183px,-183px,-90px,-55px;"
                            data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                            data-dim="w:150px,150px,93px,57px;h:7px,7px,3px,1px;" data-vbility="t,t,f,f"
                            data-frame_0="x:50,50,31,19;" data-frame_1="st:110;sp:400;sR:110;"
                            data-frame_999="o:0;st:w;sR:8490;" style="z-index:13;background-color:#ffb200;">
                        </rs-layer>

                    </rs-slide>
                    <?php endif; ?>
                <?php endif; ?>

                <?php endwhile; ?>
            </rs-slides>
        </rs-module>
    </rs-module-wrap>
    <!-------- Banner end------------->
    <?php endif; ?>
    <?php endif; ?>

    <?php if( get_row_layout() == 'about_section' ) : ?>
    <!--------About Section Start------------>
    <section class="ttm-row about-section clearfix ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <?php if( have_rows('content_group') ): ?>
                    <?php while( have_rows('content_group') ): the_row(); ?>
                    <div class="padding_top40">
                        <div class="section-title">
                            <div class="title-header">
                                <?php if( !empty( get_sub_field('tag_line') ) ): ?>
                                <h3><?php echo get_sub_field('tag_line'); ?></h3>
                                <?php endif; ?>
                                <?php if( !empty( get_sub_field('heading') ) ): ?>
                                <h2 class="title"><?php echo get_sub_field('heading'); ?></h2>
                                <?php endif; ?>
                            </div>
                            <div class="title-desc">
                                <p><?php echo get_sub_field('contents'); ?></p>
                            </div>
                        </div>

                        <?php if( have_rows('counter') ): ?>
                        <div class="row no-gutters">
                            <div class="col-sm-12 d-flex space-between">
                                <?php while( have_rows('counter') ): the_row(); ?>
                                <div class="ttm-fid inside ttm-fid-with-icon style1 margin_top10 mr-20">
                                    <div class="ttm-fid-contents">
                                        <h4 class="ttm-fid-inner">
                                            <span data-appear-animation="animateDigits" data-from="0"
                                                data-to="<?php echo get_sub_field('number');?>" data-interval="1"
                                                data-before="" data-before-style="sup"
                                                data-after="<?php echo get_sub_field('affix');?>" data-after-style="sub"
                                                class="numinate "><?php echo get_sub_field('number');?></span><span><?php echo get_sub_field('affix');?></span>
                                        </h4>
                                        <h3 class="ttm-fid-title"><?php echo get_sub_field('title');?></h3>
                                    </div>
                                    <?php if( !empty( get_sub_field('icon')['url'] ) ): ?>
                                    <div
                                        class="ttm-fid-icon-wrapper ttm-icon ttm-icon_element-fill ttm-icon_element-size-xl ttm-icon_element-color-skincolor ttm-icon_element-style-square">
                                        <img src="<?php echo get_sub_field('icon')['url'];?>" class="icon-number" />
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php 
                        $button_link = get_sub_field('button_link');
                        if( $button_link ): 
                            $button_link_url = $button_link['url'];
                            $button_link_title = $button_link['title'];
                            $button_link_target = $button_link['target'] ? $button_link['target'] : '_self';
                            ?>
                        <div class="row g-0">
                            <div class="col-sm-12 ">
                                <div class="pull-left">
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark margin_top40 float-end"
                                        href="<?php echo esc_url( $button_link_url ); ?>"
                                        target="<?php echo esc_attr( $button_link_target ); ?>"><?php echo esc_html( $button_link_title ); ?>
                                        <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-lg-6">
                    <?php if( have_rows('image_group') ): ?>
                    <?php while( have_rows('image_group') ): the_row(); ?>
                    <?php if( !empty(get_sub_field('image')['url']) ): ?>
                    <div
                        class="padding_left30 res-575-padding_left0 res-575-margin_top30 res-575-margin_bottom30 res-991-margin_top30">
                        <div class="ttm_single_image-wrapper imagestyle-two">
                            <img class="img-fluid auto_size"
                                src="<?php echo esc_url( get_sub_field('image')['url'] ); ?>"
                                alt="<?php echo esc_attr( get_sub_field('image')['alt'] ); ?>" height="546" width="410">
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php if( have_rows('image_group') ): ?>
            <?php while( have_rows('image_group') ): the_row(); ?>
            <?php if( !empty( get_sub_field('quotes') ) ): ?>
            <div class="ttm_single_image_text style1 m-auto ">
                <p><?php echo get_sub_field('quotes'); ?></p>
            </div>
            <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
    <!------ About Section End ------>
    <?php endif; ?>

    <?php if( get_row_layout() == 'our_commitment_section' ) : ?>
    <!-------Commitment section Start-------->
    <section class="ttm-row service-one-section ttm-bgimage-yes bg-img1 ttm-bg ttm-bgcolor-darkgrey clearfix mt-100">
        <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
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
            <?php if( have_rows('boxes') ): ?>
            <div class="row">
                <?php while( have_rows('boxes') ): the_row(); ?>
                <div
                    class="col-lg-<?php echo (!empty(get_sub_field('select_column')))?get_sub_field('select_column'):'4';?> col-md-6 col-12">
                    <?php if( get_sub_field('image') || !empty(get_sub_field('image')['url']) ): ?>
                    <!-- Image -->
                    <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-one ttm-bgcolor-dark h-278">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"
                            <?php if( !empty(get_sub_field('image')['url']) ): ?>
                            style="background-image: url('<?php echo get_sub_field('image')['url']; ?>')"
                            <?php endif;?>></div>
                        <div class="layer-content">
                            <div
                                class="featured-content padding_top145 padding_bottom30 padding_left30 padding_right30 margin_top15 margin_bottom15">
                            </div>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="featured-icon-box icon-align-top-content style2">
                        <div class="featured-icon">
                            <div
                                class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-size-md ttm-icon_element-color-skincolor">
                                <i class="flaticon flaticon-workers"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <?php if( !empty( get_sub_field('title') ) ):?>
                            <div class="featured-title">
                                <h3><?php echo get_sub_field('title');?></h3>
                            </div>
                            <?php endif; ?>
                            <?php if( !empty( get_sub_field('details') ) ):?>
                            <div class="featured-desc">
                                <p><?php echo get_sub_field('details');?></p>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>


    <?php if( get_row_layout() == 'mission_vision_section' ) : ?>
    <!----------Mission & Vision Section Start ----------->
    <section class="ttm-row perfomance-section bg-layer-equal-height clearfix">
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


    <?php if( get_row_layout() == 'product_section' ) : ?>
    <?php if( get_sub_field('display_product_list') ): ?>
    <!----------------Our Product section Start------------->
    <section class="ttm-row clearfix ttm-bgcolor-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
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
            <?php

            $categories = get_terms( array(
                'taxonomy' => 'product_category',
                'hide_empty' => true,
            ) );
            ?>
            <?php if( $categories ):?>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="row slick_slider"
                        data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 3}} , {"breakpoint":900,"settings":{"slidesToShow": 2}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
                        <?php foreach($categories as $category) { ?>
                        <div class="col-lg-4">
                            <div class="featured-imagebox featured-imagebox-sevices style1">
                                <div class="featured-thumbnail">
                                    <a href="<?php echo get_category_link($category->term_id); ?>" tabindex="-1">
                                        <?php if(get_field('featured_image', 'product_category_' . $category->term_id . '' )): ?>
                                        <img class="img-fluid"
                                            src="<?php echo get_field('featured_image', 'product_category_' . $category->term_id . '' )['url'];?>"
                                            alt="">
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3><a href="<?php echo get_category_link($category->term_id); ?>"
                                                tabindex="-1"><?php echo $category->name; ?></a></h3>
                                    </div>
                                    <div class="featured-desc ">
                                        <?php echo wp_trim_words($category->description, 20, ''); ?>
                                    </div>
                                    <div class="ttm-details-link">
                                        <a href="<?php echo get_category_link($category->term_id); ?>" tabindex="-1"
                                            class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-darkgrey ttm-icon_element-size-xs">
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <!----------------Our Product section Start------------->
    <?php endif; ?>
    <?php endif; ?>

    <?php if( get_row_layout() == 'industries_section' ) : ?>
    <!-----------------Industries Image section Start ------------->
    <section class="ttm-row work-section res-991-margin_top0 ttm-bgcolor-darkgrey clearfix">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
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
            <?php if( have_rows('industries') ): ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <?php while( have_rows('industries') ): the_row(); ?>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="featured-imagebox featured-imagebox-portfolio style3">
                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                    <?php if( !empty( get_sub_field('image')['url'] ) ):?>
                                    <div class="featured-thumbnail">
                                        <a href="#">
                                            <img class="img-fluid" src="<?php echo get_sub_field('image')['url']; ?>"
                                                alt="<?php echo get_sub_field('image')['alt']; ?>">
                                        </a>
                                    </div>
                                    <div class="ttm-media-link">
                                        <a href="#" class="ttm_link"><i class="fa fa-plus"></i></a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="featured-content featured-content-portfolio">
                                    <div class="featured-title">
                                        <h5><a href="#"><?php echo get_sub_field('title'); ?></a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <!-----------------Industries Image section End ------------->
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

    <?php 
        $testiArgs = array(
            'post_type' => 'testimonials',
            'order' => 'DESC',
            ); ?>

    <?php $testiQuery = new WP_Query($testiArgs);
        if ($testiQuery->have_posts()) : ?>
    <!----------------Testimonial Section Start----------------->
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
</div>
<?php endif; ?>
<?php get_footer();