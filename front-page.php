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
            <div class="flash-block card">
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
            <div class="flash-block card">
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

    <section class='shout-out'>
        <h3>Shout Out Cards</h3>
        <div class="container">
            <?php
            if (have_rows('shout_out_cards')) :
                while (have_rows('shout_out_cards')) : the_row();

                    $sub_image = get_sub_field('shout_out_image');
                    $sub_link = get_sub_field('shout_out_link');
                    // Do something...
                    if (!empty($sub_image)) : ?>
                        <div class="shout-out-card card">
                            <img class='shout-img' src="<?php echo esc_url($sub_image['url']); ?>" alt="<?php echo esc_attr($sub_image['alt']); ?>" />

                            <?php
                            if ($sub_link) : ?>
                                <button class="button" href="<?php echo esc_url($sub_link); ?>">Shop now</button>
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

    <section class='benefits'>
        <div class="benefits-container">
            <div class="much-more">
                <img src="<?php echo get_template_directory_uri(); ?>./resources/icons/heart-card.svg">
                <p class="benefits-title">
                    So much more than cards
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet enim, pellentesque at sed felis ornare posuere pellentesque.</p>
            </div>
            <div class="much-more">
                <img src="<?php echo get_template_directory_uri(); ?>./resources/icons/download-icon.svg">
                <p class="benefits-title">
                    Fast & Easy Downlaod
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet enim, pellentesque at sed felis ornare posuere pellentesque.</p>
            </div>
            <div class="much-more">
                <img src="<?php echo get_template_directory_uri(); ?>./resources/icons/bank-card-icon.svg">
                <p class="benefits-title">
                    Comfortable & Secure Payments
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet enim, pellentesque at sed felis ornare posuere pellentesque.</p>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>