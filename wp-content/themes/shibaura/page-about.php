<?php /* Template Name: About */ 
get_header();
?>
	<!-- Banner -->
    <section id="title-page">
        <div class="container-c">
            <h1 class="txt"><?php the_title(); ?></h1>
        </div>
    </section>

    <!-- About -->
    <section id="about">
        <div class="container-c">
            <div class="about-first">
                <div class="box">
                    <div class="left">
                        <img src="<?php the_field('avatar'); ?>" alt="" class="img" data-aos="fade-up" data-aos-duration="600">
                    </div>
                    <div class="right" data-aos="fade-up" data-aos-duration="600">
                        <h4 class="title"><?php the_field('introduce_title'); ?></h4>
                        <div class="desc"><?php the_field('introduce'); ?></div>
                        <p class="btm"><?php the_field('introduce_sub'); ?></p>
                    </div>
                </div>
            </div>

            <div id="company" class="about-second" data-aos="fade-up" data-aos-duration="600">
                <h4 class="about-second-title"><?php the_field('overview_title'); ?></h4>
                <div class="box">
                    <div class="left">
                        <table class="table">
                            <tbody>
                                <?php
                                    $i = 0;
                                    if( have_rows('overview') ):
                                        while( have_rows('overview') ) : the_row(); ++$i;
                                            ?>
                                                <tr>
                                                    <td><?php the_sub_field('title'); ?></td>
                                                    <td>
                                                        <div>
                                                            <?php the_sub_field('content'); ?>
                                                            <?php if ($i == 2) : ?>
                                                            <a href="<?php the_field('map_url'); ?>" target="_blank">
                                                                <img src="<?php bloginfo('template_directory'); ?>/shibaura-html/imgs/map-icon.png" alt="" class="img-icon">
                                                            </a>
                                                            <?php endif; ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                        endwhile;
                                    else :
                                    endif;
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="right">
                        <img src="<?php the_field('map_image'); ?>" alt="" class="img">
                        <a href="<?php the_field('map_url'); ?>" target="_blank" class="c_link"><?php the_field('map_url_title'); ?> ＞</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
