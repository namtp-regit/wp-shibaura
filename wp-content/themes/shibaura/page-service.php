<?php /* Template Name: Service */
get_header();
?>
<!-- Banner -->
<section id="title-page">
    <div class="container-c">
        <h1 class="txt" data-aos="fade-up" data-aos-duration="600"><?php the_title(); ?></h1>
    </div>
</section>

<!-- Service -->
<section id="service">
    <div class="container-c">
        <div class="service-1" data-aos="fade-up" data-aos-duration="600">
            <h4 class="txt"><?php the_field('title_1'); ?></h4>
            <?php the_field('title_2'); ?>
            <div class="desc"><?php the_field('title_3'); ?></div>
            <?php the_field('title_4'); ?>
        </div>

        <div id="espace" class="service-2" data-aos="fade-up" data-aos-duration="600">
            <div class="service-2-title"><?php the_field('title'); ?></div>
            <table class="table">
                <tbody>
                    <?php
                    if (have_rows('table')) :
                        while (have_rows('table')) : the_row();
                    ?>
                            <tr>
                                <td><?php the_sub_field('title'); ?></td>
                                <td><?php the_sub_field('content'); ?></td>
                            </tr>
                    <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                </tbody>
            </table>
        </div>

        <div class="service-3" data-aos="fade-up" data-aos-duration="600">
            <div class="box-top">
                <div class="left">
                    <div class="child">
                        <h4 class="txt"><?php the_field('image_1'); ?></h4>
                        <img src="<?php the_field('url_1'); ?>" alt="" class="img">
                    </div>
                </div>
                <div class="right">
                    <div class="child">
                        <img src="<?php the_field('url_2'); ?>" alt="" class="img">
                        <div class="content">
                            <?php the_field('image__2'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box-bottom">
                <div class="child">
                    <h4 class="txt"><?php the_field('image_3'); ?></h4>
                    <img src="<?php the_field('url_3'); ?>" alt="" class="img">
                </div>
                <div class="child">
                    <h4 class="txt"><?php the_field('image_4'); ?></h4>
                    <img src="<?php the_field('url__4'); ?>" alt="" class="img">
                </div>
            </div>
        </div>
    </div>

    <div id="introduction" class="service-4">
        <div class="container-c">
            <h4 class="title"><?php the_field('title_introducing_our_musicians'); ?></h4>
        </div>
        <div class="box-img">
            <div class="container-c">
                <img src="<?php bloginfo('template_directory'); ?>/shibaura-html/imgs/img-9.png" alt="" class="img-1">
            </div>
            <img src="<?php bloginfo('template_directory'); ?>/shibaura-html/imgs/img-10.png" alt="" class="img-2" data-aos="fade-left" data-aos-duration="1500">
            <img src="<?php bloginfo('template_directory'); ?>/shibaura-html/imgs/img-12.png" alt="" class="img-3" data-aos="fade-left" data-aos-duration="1500">
        </div>
    </div>

    <div class="service-5" data-aos="fade-up" data-aos-duration="600">
        <div class="container-c">
            <div class="box">
                <h4 class="title"><?php the_field('title_last'); ?><span><?php the_field('note_last'); ?></span></h4>
                <div class="desc"><?php the_field('content'); ?></div>
            </div>
        </div>
    </div>
</section>

<!-- Social network -->
<?php 
if( have_rows('social_network', 'option') ):
while( have_rows('social_network', 'option') ) : the_row(); ?>
<section id="social-network">
    <div class="container-c">
        <div class="box">
            <a class="child" target="_blank" href="https://shibaura-group.co.jp/" data-aos="fade-up" data-aos-duration="600">
                <div class="media">
                    <div class="media-body">
                        <img src="<?php bloginfo('template_directory'); ?>/shibaura-html/imgs/img-13.png" alt="" class="media-img-2">
                        <span class="media-link">
                            <img src="<?php bloginfo('template_directory'); ?>/shibaura-html/imgs/arrow-right.png" alt="" class="arrow-img">
                        </span>
                    </div>
                </div>
            </a>
            <a class="child" target="_blank" href="https://m.facebook.com/shibauragroup.tokyo/" data-aos="fade-up" data-aos-duration="600">
                <div class="media">
                    <div class="media-body">
                        <img src="<?php bloginfo('template_directory'); ?>/shibaura-html/imgs/icon_fb.png" alt="" class="media-img">
                        <p class="media-content"><?php echo esc_html(get_sub_field('facebook', 'option')); ?></p>
                        <span class="media-link">
                            <img src="<?php bloginfo('template_directory'); ?>/shibaura-html/imgs/arrow-right.png" alt="" class="arrow-img">
                        </span>
                    </div>
                </div>
            </a>
            <a class="child" target="_blank" href="https://www.instagram.com/shibaura_group/" data-aos="fade-up" data-aos-duration="600">
                <div class="media">
                    <div class="media-body">
                        <img src="<?php bloginfo('template_directory'); ?>/shibaura-html/imgs/icon_insta.png" alt="" class="media-img">
                        <p class="media-content"><?php echo esc_html(get_sub_field('instagram', 'option')); ?></p>
                        <span class="media-link">
                            <img src="<?php bloginfo('template_directory'); ?>/shibaura-html/imgs/arrow-right.png" alt="" class="arrow-img">
                        </span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<?php endwhile; endif;?>

<?php 
if( have_rows('social_network', 'option') ):
while( have_rows('social_network', 'option') ) : the_row(); ?>
<section id="social-network-v2">
    <div class="container-c">
        <div class="box">
            <a class="child" target="_blank" href="https://www.youtube.com/@blindnessRYO" data-aos="fade-up" data-aos-duration="600">
                <div class="media">
                    <div class="media-body">
                        <img src="<?php bloginfo('template_directory'); ?>/shibaura-html/imgs/icon_yt.png" alt="" class="media-img">
                        <p class="media-content"><?php echo esc_html(get_sub_field('youtube', 'option')); ?></p>
                        <span class="media-link">
                            <img src="<?php bloginfo('template_directory'); ?>/shibaura-html/imgs/arrow-right.png" alt="" class="arrow-img">
                        </span>
                    </div>
                </div>
            </a>
            <a class="child" target="_blank" href="https://www.instagram.com/ryokawagoe0503/" data-aos="fade-up" data-aos-duration="600">
                <div class="media">
                    <div class="media-body">
                        <img src="<?php bloginfo('template_directory'); ?>/shibaura-html/imgs/icon_insta.png" alt="" class="media-img">
                        <p class="media-content"><?php echo esc_html(get_sub_field('instagram_2', 'option')); ?></p>
                        <span class="media-link">
                            <img src="<?php bloginfo('template_directory'); ?>/shibaura-html/imgs/arrow-right.png" alt="" class="arrow-img">
                        </span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<?php endwhile; endif;?>

<?php
get_footer();
