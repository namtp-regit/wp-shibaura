<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Springs
 */

get_header();
?>
<!-- Slider -->
<div id="slider">
    <h3 class="text">
        <span class="pc"><?php the_field('slider_title'); ?></span>
        <span class="mobile"><?php the_field('slider_title_mobile'); ?></span>
    </h3>
    <div class="slideshow">
        <?php
        if (have_rows('slider_show')) :
            while (have_rows('slider_show')) : the_row();
        ?>
                <div class="slideshow-image" style="background-image: url('<?php
                                                                            $useragent = $_SERVER["HTTP_USER_AGENT"];
                                                                            if (stripos($useragent, "mobile") !== false) {
                                                                                the_sub_field('image_mobile');
                                                                            } else {
                                                                                the_sub_field('image');
                                                                            }
                                                                            ?>')"></div>
        <?php
            endwhile;
        else :
        endif;
        ?>
    </div>
</div>

<!-- News -->
<section id="news">
    <div class="container-c">
        <div class="box">
            <div class="left">
                <?php
                $posts = get_posts(array(
                    'post_type'         => 'news',
                    'numberposts'    => 1,
                    'orderby'    => 'date',
                    'order'        => 'DESC'
                ));
                if ($posts) : ?>
                    <?php foreach ($posts as $post) :
                        setup_postdata($post);
                    ?>
                        <a class="item" href="<?php the_permalink(); ?>">
                            <span class="date"><?php echo get_the_date('Y/m/d'); ?></span>

                            <?php
                            $taxonomies = get_object_taxonomies($post);
                            $taxonomy_names = wp_get_object_terms(get_the_ID(), $taxonomies,  array("fields" => "names"));
                            if (!empty($taxonomy_names)) :
                                foreach ($taxonomy_names as $tax_name) : ?>
                                    <span class="cate"><?php echo $tax_name; ?> </span>
                            <?php endforeach;
                            endif;
                            ?>

                            <span class="txt"><?php the_title(); ?></span>
                        </a>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
            <a href="<?php echo esc_url(home_url('/news')); ?>" class="new-link">もっと見る　＞</a>
        </div>
    </div>
</section>

<!-- Sharing -->
<section id="sharing">
    <div class="container-c">
        <h3 class="sharing-title"><span class="mark">音楽</span><span>を奏でる喜びと、</span><span>聴く喜びを共に分かち合う</span></h3>
        <div class="sharing-desc"><?php the_field('sharing_desc'); ?></div>
    
        <div class="box">
            <?php 
            if( have_rows('sharing_list') ):
            while( have_rows('sharing_list') ) : the_row(); ?>
            <div class="child">
                <a href="<?php echo esc_html( get_sub_field('link') ); ?>">
                    <div class="foundation-box-1" data-aos="fade-up" data-aos-duration="600">
                        <img src="<?php echo esc_html( get_sub_field('image') ); ?>" alt="" class="img">
                        <div class="text">
                            <?php echo esc_html( get_sub_field('title') ); ?>
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile; endif;?>
        </div>
    </div>
</section>


<!-- Social network -->
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
                        <p class="media-content">芝浦グループ
                            facebook</p>
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
                        <p class="media-content">芝浦グループ
                            Instagram</p>
                        <span class="media-link">
                            <img src="<?php bloginfo('template_directory'); ?>/shibaura-html/imgs/arrow-right.png" alt="" class="arrow-img">
                        </span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<section id="social-network-v2">
    <div class="container-c">
        <div class="box">
            <a class="child" target="_blank" href="https://www.youtube.com/@blindnessRYO" data-aos="fade-up" data-aos-duration="600">
                <div class="media">
                    <div class="media-body">
                        <img src="<?php bloginfo('template_directory'); ?>/shibaura-html/imgs/icon_yt.png" alt="" class="media-img">
                        <p class="media-content">芝浦文化財団所属
                            川越亮  YouTube</p>
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
                        <p class="media-content">芝浦文化財団所属
                            川越亮 Instagram</p>
                        <span class="media-link">
                            <img src="<?php bloginfo('template_directory'); ?>/shibaura-html/imgs/arrow-right.png" alt="" class="arrow-img">
                        </span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<?php
get_footer();
