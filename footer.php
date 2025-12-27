<footer class="footer">
    <div class="footer-container">
        <div class="footer-logo-section">
            <?php
            if (function_exists('get_field')) {
                $footer_logo = get_field('footer-logo-section', 'option');
                if ($footer_logo && isset($footer_logo['url'])) {
                    echo '<img src="' . esc_url($footer_logo['url']) . '" alt="HushSecurity" class="footer-logo" />';
                }
            }
            ?>
        </div>

        <div class="footer-content">
            <div class="footer-columns">
                <?php
                if (function_exists('get_field')) {
                    $footer_columns = get_field('footer-column', 'option');
                    if ($footer_columns) {
                        foreach ($footer_columns as $column) {
                            echo '<div class="footer-column">';
                            // Content container for title, subtitle, and links
                            echo '<div class="column-content">';
                            if (!empty($column['column-title'])) {
                                echo '<h3 class="column-title">' . esc_html($column['column-title']) . '</h3>';
                            }
                            if (!empty($column['column-subtitle'])) {
                                echo '<p class="column-subtitle">' . esc_html($column['column-subtitle']) . '</p>';
                            }
                            if (!empty($column['column-links'])) {
                                echo '<div class="column-links-row">';
                                foreach ($column['column-links'] as $col) {
                                    if (!empty($col['col'])) {
                                        echo '<ul class="column-links">';
                                        foreach ($col['col'] as $link) {
                                            $label = !empty($link['herf']) ? esc_html($link['herf']) : '';
                                            echo '<li><a href="#">' . $label . '</a></li>';
                                        }
                                        echo '</ul>';
                                    }
                                }
                                echo '</div>';
                            }
                            echo '</div>'; // end .column-content
                            if (!empty($column['btn-demo-footer'])) {
                                echo '<button class="btn btn-demo">' . esc_html($column['btn-demo-footer']) . '</button>';
                            }
                            echo '</div>';
                        }
                    }
                }
                ?>
            </div>

            <div class="social-icons">
                <?php
                if (function_exists('get_field')) {
                    $social_icons = get_field('social-icons', 'option');
                    if ($social_icons) {
                        foreach ($social_icons as $icon) {
                            if (!empty($icon['social-icon']) && isset($icon['social-icon']['url'])) {
                                echo '<a href="#" class="social-icon"><img src="' . esc_url($icon['social-icon']['url']) . '" alt="Social Icon" /></a>';
                            }
                        }
                    }
                }
                ?>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="footer-legal">
                <p class="copyright">
                    <?php
                    if (function_exists('get_field')) {
                        $copyright = get_field('copyright', 'option');
                        if ($copyright) {
                            echo esc_html($copyright);
                        }
                    }
                    ?>
                </p>
                <div class="legal-links">
                    <?php
                    if (function_exists('get_field')) {
                        $legal_links = get_field('legal-links', 'option');
                        if ($legal_links) {
                            foreach ($legal_links as $link) {
                                if (!empty($link['herf-footer'])) {
                                    echo '<a href="#">' . esc_html($link['herf-footer']) . ' ›</a>';
                                }
                            }
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="footer-badge">
                <?php
                if (function_exists('get_field')) {
                    $footer_badge = get_field('footer-badge', 'option');
                    if ($footer_badge && isset($footer_badge['url'])) {
                        echo '<img src="' . esc_url($footer_badge['url']) . '" alt="AICPA SOC" class="aicpa-badge" />';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
