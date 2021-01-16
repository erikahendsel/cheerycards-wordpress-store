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
                    <button class="button" href="<?php echo esc_url($link); ?>">Shop now</button>
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
                    <button class="button" href="<?php echo esc_url($link); ?>">Shop now</button>
                <?php endif; ?>
            </div>

        </div>
    </section>

    <section class='popular-cards'>
        <h3>Popular Cards</h3>
        <div class="popular-container">

            <?php
            // Check rows exists.
            if (have_rows('popular_cards')) :
                // Loop through rows.
                while (have_rows('popular_cards')) : the_row();
                    // Load sub field value.
                    $sub_image = get_sub_field('popular_card_image');
                    $sub_title = get_sub_field('popular_card_title');
                    $sub_link = get_sub_field('popular_card_link');

                    // Do something...
                    if (!empty($sub_image)) : ?>
                        <div class="popular-card">
                            <img class='flash-img' src="<?php echo esc_url($sub_image['url']); ?>" alt="<?php echo esc_attr($sub_image['alt']); ?>" />

                            <p class='popular-title'><?php echo $sub_title ?></p>

                            <?php
                            if ($sub_link) : ?>
                                <div class='shop-now-container'>
                                    <button class="button" href="<?php echo esc_url($sub_link); ?>">Shop now</button>
                                </div>
                            <?php endif; ?>
                        </div>
            <?php endif;

                // End loop.
                endwhile;
            // No value.
            else :
            // Do something...
            endif; ?>
        </div>
    </section>

</div>

<?php get_footer(); ?>