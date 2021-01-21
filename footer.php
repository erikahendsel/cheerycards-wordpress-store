<?php wp_footer(); ?>

<footer>
    <div class="footer-container">
        <?php

        if (have_rows('footer_menu', 'options')) :

            while (have_rows('footer_menu', 'options')) : the_row(); ?>
                <div class="footer-menu-block">

                    <p class='footer-title'><?php the_sub_field('footer_menu_title'); ?></p>
                    <ul>
                        <?php
                        // Loop over sub repeater rows.
                        if (have_rows('footer_menu_links')) :
                            while (have_rows('footer_menu_links')) : the_row(); ?>

                                <?php
                                $link = get_sub_field('footer_menu_link');
                                if ($link) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                    <li><a class='footer-menu-link' href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a></li>
                                <?php endif; ?>

                        <?php
                            endwhile;
                        endif; ?>
                    </ul>
                </div>
        <?php endwhile;

        endif; ?>
    </div>
    <p class='copyright'>© Cheery Cards 2021</p>
</footer>

</body>

</html>