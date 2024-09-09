<?php /* Template Name: News */
get_header();
?>
<!-- Banner -->
<section id="title-page">
    <div class="container-c">
        <h1 class="txt"><?php the_title(); ?></h1>
    </div>
</section>

<!-- About -->
<section id="page-news">
    <div class="container-c">
        <?php
        $posts = get_posts(array(
            'posts_per_page'    => -1,
            'post_type'         => 'news'
        ));
        if ($posts) : ?>
            <div class="list">
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
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
