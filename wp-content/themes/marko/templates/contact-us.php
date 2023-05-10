<?php 
/**
* Template Name: Contact Us
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

    <?php if( get_row_layout() == 'contact_section' ) : ?>
    <section class="ttm-row form-section ttm-bgcolor-grey clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--section-title-->
                    <div class="section-title title-style-center_text margin_bottom30">
                        <div class="title-header">
                            <?php if( !empty( get_sub_field('tag_line') ) ): ?>
                            <h3><?php echo get_sub_field('tag_line'); ?></h3>
                            <?php endif; ?>
                            <?php if( !empty( get_sub_field('heading') ) ): ?>
                            <h2 class="title"><?php echo get_sub_field('heading'); ?></h2>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!--section-title-end-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <?php if( !empty( get_sub_field('form_id') ) ): ?>
                    <div class=" ttm-bgcolor-white p-40 res-991-margin_right0 ">
                        <?php echo do_shortcode('[contact-form-7 id="'.get_sub_field('form_id').'" html_class="wrap-form contact_form padding_top15"]');?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-lg-4">
                    <?php if( have_rows('contact_info') ):?>
                    <?php while( have_rows('contact_info') ): the_row(); ?>
                    <div class="ttm-bgcolor-white p-40 res-991-margin_top30 ttm-bgcolor-white p-40 ">

                    <?php if( have_rows('email_box') ):?>
                    <?php while( have_rows('email_box') ): the_row(); ?>
                        <div class="featured-icon-box icon-align-top-content margin_bottom20 ">
                            <div class="featured-icon">
                                <div
                                    class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="featured-content pt-2">
                                <?php if( !empty(get_sub_field('heading')) ):?>
                                <div class="featured-title">
                                    <h3 class="margin_bottom0"><?php echo get_sub_field('heading');?></h3>
                                </div>
                                <?php endif; ?>
                                <div class="featured-desc">
                                    <p><?php echo get_sub_field('email');?></p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;?>
                    <?php endif;?>


                    <?php if( have_rows('phone_box') ):?>
                    <?php while( have_rows('phone_box') ): the_row(); ?>

                        <div class="featured-icon-box icon-align-top-content margin_bottom20 ">
                            <div class="featured-icon">
                                <div
                                    class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="featured-content pt-2">
                                <?php if( !empty(get_sub_field('heading')) ):?>
                                <div class="featured-title">
                                    <h3 class="margin_bottom0"><?php echo get_sub_field('heading');?></h3>
                                </div>
                                <?php endif; ?>
                                <div class="featured-desc">
                                    <p><?php echo get_sub_field('phone');?></p>
                                </div>
                            </div>
                        </div>

                        <?php endwhile;?>
                    <?php endif;?>

                    <?php if( have_rows('skype_box') ):?>
                    <?php while( have_rows('skype_box') ): the_row(); ?>
                        <div class="featured-icon-box icon-align-top-content margin_bottom20 ">
                            <div class="featured-icon">
                                <div
                                    class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="fa fa-skype"></i>
                                </div>
                            </div>
                            <div class="featured-content pt-2">
                                <?php if( !empty(get_sub_field('heading')) ):?>
                                <div class="featured-title">
                                    <h3 class="margin_bottom0"><?php echo get_sub_field('heading');?></h3>
                                </div>
                                <?php endif; ?>
                                <div class="featured-desc">
                                    <p><?php echo get_sub_field('skype_id');?></p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;?>
                    <?php endif;?>

                    </div>
                    <?php endwhile;?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </section>
    <!--form-section-end-->
    <?php endif; ?>


    <?php if( get_row_layout() == 'map_section' ) : ?>
    <!--map-section-->
    <section class="ttm-row padding_zero-section mt_100 res-991-margin_top40 res-991-margin_bottom40 clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <?php if( have_rows('address_box') ): ?>
                <?php while( have_rows('address_box') ): the_row(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="featured-icon-box icon-align-before-content style9">
                        <div class="featured-icon">
                            <div
                                class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <?php if( !empty(get_sub_field('heading')) ):?>
                            <div class="featured-title">
                                <h3><?php echo get_sub_field('heading');?></h3>
                            </div>
                            <?php endif; ?>
                            <?php if( !empty(get_sub_field('address')) ):?>
                            <div class="featured-desc">
                                <p><?php echo get_sub_field('address');?></p>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>

                <?php if( have_rows('phone_box') ): ?>
                <?php while( have_rows('phone_box') ): the_row(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="featured-icon-box icon-align-before-content style9 active">
                        <div class="featured-icon">
                            <div
                                class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <?php if( !empty(get_sub_field('heading')) ):?>
                            <div class="featured-title">
                                <h3><?php echo get_sub_field('heading');?></h3>
                            </div>
                            <?php endif; ?>
                            <?php if( empty(get_sub_field('phone_1')) && empty(get_sub_field('phone_2')) ):?>
                            <?php else: ?>
                            <div class="featured-desc">
                                <?php if(!empty(get_sub_field('phone_1'))): ?>
                                <p><?php echo get_sub_field('phone_1');?></p>
                                <?php endif; ?>
                                <?php if(!empty(get_sub_field('phone_2'))): ?>
                                <p><?php echo get_sub_field('phone_2');?></p>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>


                <?php if( have_rows('email_box') ): ?>
                <?php while( have_rows('email_box') ): the_row(); ?>
                <div class="col-lg-4 col-md-12">
                    <div class="featured-icon-box icon-align-before-content style9">
                        <div class="featured-icon">
                            <div
                                class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <?php if( !empty(get_sub_field('heading')) ):?>
                            <div class="featured-title">
                                <h3><?php echo get_sub_field('heading');?></h3>
                            </div>
                            <?php endif; ?>
                            <?php if( empty(get_sub_field('email_1')) && empty(get_sub_field('email_2')) ):?>
                            <?php else: ?>
                            <div class="featured-desc">
                                <?php if(!empty(get_sub_field('email_1'))): ?>
                                <p><?php echo get_sub_field('email_1');?></p>
                                <?php endif; ?>
                                <?php if(!empty(get_sub_field('email_2'))): ?>
                                <p><?php echo get_sub_field('email_2');?></p>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php if( !empty(get_sub_field('map')) ): ?>
    <!--map-section-end-->
    <div id="google_map" class="google_map mt_90 res-991-margin_top0">
        <div class="map_container clearfix">
            <div id="map">
                <?php echo get_sub_field('map');?>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php endif; ?>

    <?php endwhile; ?>
    <?php endif; ?>

</div>


<?php get_footer();