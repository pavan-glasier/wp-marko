<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Marko
 */
?>
<div class="site-main">
    <section class="ttm-row padding_bottom70 ttm-bgcolor-grey clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--section-title-->
                    <div class="section-title title-style-center_text margin_bottom30">
                        <div class="title-header">
                            <h2 class="title"><?php the_title(); ?></h2>
                        </div>
                    </div>
                    <!--section-title-end-->
                    <?php echo the_content(); ?>
                </div>
            </div>
        </div>
    </section>
</div>