<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package shibaura
 */

get_header();
?>

<!-- Banner -->
<section id="title-page" class="sing-news">
    <div class="container-c">
        <h1 class="txt"><?php the_title(); ?></h1>
        <p class="desc">
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

        </p>
    </div>
</section>

<!-- News detail -->
<!-- <section id="activity">
    <div class="container-c">
        <div class="activity-2">
            <div class="list">
                <div class="item">
                    <div class="left">
                        <div class="item-title">
                            <h4 class="title">＜第5回コンサート＞</h4>
                            <p class="desc">2023年12月15日(金）夕刻、12月21日（木）夕刻　計２公演
                                「音を繋ぐ」と題した先生やお仲間達どのアンサンブル演奏</p>
                        </div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>演奏</td>
                                    <td>川越 亮（エレクトーン・ピアノ）
                                        武石いずみ（バイオリン）
                                        中島香織（ピアノ）
                                        仁瓶美奈（フルート）
                                        丸岡美紀（エレクトーン）
                                        横山一恵（コーラス）
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="right">
                        <div class="img-box">
                            <img src="<?php bloginfo('template_directory'); ?>/shibaura-html/imgs/img-1.png" alt="" class="img">
                        </div>
                        <div class="media">
                            <img src="<?php bloginfo('template_directory'); ?>/shibaura-html/imgs/icon_yt.png" alt="" class="img-yt">
                            <span class="text">YouTubeを見る　＞</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section id="emulator_c">
    <div class="container-c">
        <?php
        while (have_posts()) :
            the_post();

            the_content(
                sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'shibaura' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post( get_the_title() )
                )
            );

            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>
    </div>
</section>

<?php
get_footer();
