<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shibaura
 */

?>
    <!-- Footer -->
    <footer id="footer"  data-aos="fade-up" data-aos-duration="600" data-aos-once="true">
        <div class="container-c">
            <div class="box">
                <div class="left">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo esc_html(get_field('logo', 'option')); ?>" alt="" class="img">
                    </a>
                </div>
                <div class="right">
                    <?php
                    wp_nav_menu(array('theme_location' => 'my-custom-menu', 'container' => 'ul', 'menu_class' => 'nav'));
                    ?>
                    <?php 
                    if( have_rows('footer', 'option') ):
                    while( have_rows('footer', 'option') ) : the_row(); ?>
                    <div class="info">
                        <p><?php echo esc_html(get_sub_field('address', 'option')); ?></p>
                        <p>TEL：<?php echo esc_html(get_sub_field('tel', 'option')); ?></p>
                        <p>mail：<?php echo esc_html(get_sub_field('email', 'option')); ?></p>
                    </div>
                    <p class="copy-right"><?php echo esc_html(get_sub_field('copy_right', 'option')); ?></span>
                    <?php endwhile; endif;?>
                </div>
            </div>
        </div>
    </footer>

<!-- End wrapper -->
</div>

<script src="<?php bloginfo('template_directory'); ?>/shibaura-html/libs/jquery-3.5.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/shibaura-html/libs/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/shibaura-html/libs/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/shibaura-html/js/main.js"></script>
<script>
    AOS.init();
</script>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>