<?php 
/**
* Template Name: Compare Chart
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

<?php if( have_rows('table') ): ?>
<?php while( have_rows('table') ): the_row();?>
    <section class="about-section clearfix " style="padding-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <table class="table table-bordered table-responsive">
                        <?php if( have_rows('table_head') ): ?>
                        <?php while( have_rows('table_head') ): the_row();?>
                        <thead>
                            <?php if( have_rows('tr') ): ?>
                            <?php while( have_rows('tr') ): the_row();?>
                            <tr>
                                <?php if( have_rows('th') ): ?>
                                <?php while( have_rows('th') ): the_row();?>
                                <th class="tabcell" colspan="<?php echo get_sub_field('colspan');?>"><?php echo get_sub_field('title'); ?></th>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </tr>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </thead>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        

                        <?php if( have_rows('table_body') ): ?>
                        <?php while( have_rows('table_body') ): the_row();?>
                        <tbody>
                            <?php if( have_rows('tr') ): ?>
                            <?php while( have_rows('tr') ): the_row(); ?>
                            <tr>
                                <?php if( have_rows('td') ): ?>
                                <?php while( have_rows('td') ): the_row(); ?>
                                <td class="text-center tabcell" colspan="<?php echo get_sub_field('colspan'); ?>">
                                <?php if( empty(get_sub_field('title')) ):?>
                                    <?php echo get_sub_field('select_icon'); ?>
                                <?php endif; ?>
                                <?php echo get_sub_field('title'); ?>
                                </td>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </tr>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </tbody>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </table>
                    
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
<?php endif; ?>


<?php if( have_rows('indicator_cards') ): ?>

    <section class="about-section clearfix indicator-cards">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="padding_top40 mb-5">
                        <div class="row justify-content-center">
                            <?php while( have_rows('indicator_cards') ): the_row();?>
                            <div class="col-sm-4">
                                <div class="ttm-fid inside ttm-fid-with-icon style1 margin_top10"
                                    style="padding: 32px 10px 24px 10px;">
                                    <div class="ttm-fid-contents">
                                        <h4 class="ttm-fid-inner">
                                            <span><?php echo get_sub_field('title'); ?></span>
                                        </h4>
                                    </div>
                                    <div class="ttm-fid-icon-wrapper ttm-icon ttm-icon_element-fill ttm-icon_element-size-xl ttm-icon_element-color-skincolor ttm-icon_element-style-square">
                                        <?php echo get_sub_field('icon'); ?>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

</div>
<?php get_footer();
