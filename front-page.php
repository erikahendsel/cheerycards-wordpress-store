<?php get_header(); ?>

<div class="container">
    <!-- <h1><?php the_title(); ?></h1> -->

    <!-- <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

    <?php endwhile;
            endif; ?> -->

    <!-- Hero image -->
    <?php if (has_post_thumbnail()) : ?>
        <div class='hero-img'>
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>