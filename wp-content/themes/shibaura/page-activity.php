<?php /* Template Name: Activity */ 
get_header();
?>
	<!-- Banner -->
    <section id="title-page">
        <div class="container-c">
            <h1 class="txt" data-aos="fade-up" data-aos-duration="600"><?php the_title(); ?></h1>
        </div>
    </section>

    <!-- Service -->
    <section id="page-activity">
        <div class="container-c">
            <div class="activity-1" data-aos="fade-up" data-aos-duration="600">
                <h4 class="txt"><?php the_field('title_block'); ?></h4>
                <?php if(have_posts()) :the_post(); ?>
                <div class="desc"><?php the_content() ?>
                <?php endif; ?>
            </div>

            <div class="activity-2">
                <div class="activity-2-title" data-aos="fade-up" data-aos-duration="600"><?php the_field('note'); ?></div>
                <div class="list">
                    <?php
                        if( have_rows('list_activity') ):
                        while( have_rows('list_activity') ) : the_row();
                            ?>
                                <div class="item" data-aos="fade-up" data-aos-duration="600">
                                    <div class="left">
                                        <div class="item-title">
                                            <h4 class="title"><?php the_sub_field('title'); ?></h4>
                                            <p class="desc"><?php the_sub_field('description'); ?></p>
                                        </div>
                                        <table class="table">
                                            <tbody>
                                                <?php
                                                    if( have_rows('table') ):
                                                    while( have_rows('table') ) : the_row();
                                                        ?>
                                                        <tr>
                                                            <td><?php the_sub_field('title'); ?></td>
                                                            <td><?php the_sub_field('content'); ?></td>
                                                        </tr>
                                                    <?php
                                                    endwhile;
                                                    endif;
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="right">
                                        <div class="img-box">
                                            <img src="<?php the_sub_field('image'); ?>" alt="" class="img">
                                        </div>
                                        <?php if(get_sub_field('link')): ?>
                                        <div class="media">
                                            <img src="<?php bloginfo('template_directory'); ?>/shibaura-html/imgs/icon_yt.png" alt="" class="img-yt">
                                            <a class="text" href="<?php the_sub_field('link'); ?>" target="_blank"><?php the_sub_field('title_link'); ?>　＞</a>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php
                        endwhile;
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
