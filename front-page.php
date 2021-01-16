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

    <!-- Flash section ie news/sales/information block -->
    <section class='flash'>
        <div class="flash-container">
            <div class="flash-block flash-one">
                <?php
                $image = get_field('flash_image_first');
                if (!empty($image)) : ?>
                    <img class='flash-img' src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>

                <?php
                $link = get_field('flash_link_button_first');
                if ($link) : ?>
                    <a class="button" href="<?php echo esc_url($link); ?>">Shop now</a>
                <?php endif; ?>
            </div>
            <div class="flash-block flash-two">
                <?php
                $image = get_field('flash_image_second');
                if (!empty($image)) : ?>
                    <img class='flash-img' src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>

                <?php
                $link = get_field('flash_link_button_second');
                if ($link) : ?>
                    <a class="button" href="<?php echo esc_url($link); ?>">Shop now</a>
                <?php endif; ?>
            </div>

        </div>
    </section>

</div>

<?php get_footer(); ?>