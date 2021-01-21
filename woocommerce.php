<?php get_header(); ?>

<section class='shop'>
    <div class="shop-container">

        <?php if (woocommerce_content()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

        <?php endwhile;
        endif; ?>
    </div>
</section>

<?php get_footer(); ?>