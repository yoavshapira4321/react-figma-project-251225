<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
    <div class="logo">
        <?php
        if (function_exists('get_field')) {
            $bright_logo = get_field('bright-logo', 'option');
            if ($bright_logo && isset($bright_logo['url'])) {
                echo '<img src="' . esc_url($bright_logo['url']) . '" alt="HushSecurity" />';
            }
        }
        ?>
    </div>

    <nav class="nav">
        <div class="nav-menu">
            <?php
            if (function_exists('get_field')) {
                $nav_items = get_field('nav-item_has-dropdown', 'option');
                if ($nav_items) {
                    foreach ($nav_items as $item) {
                        $nav_link = !empty($item['nav-link']) ? esc_html($item['nav-link']) : '';
                        $dropdown_header = !empty($item['dropdown-header']) ? esc_html($item['dropdown-header']) : '';
                        $dropdown_links = !empty($item['dropdown-link']) ? $item['dropdown-link'] : array();
                        if ($dropdown_header) {
                            echo '<div class="nav-item has-dropdown">';
                            echo '<a href="#" class="nav-link">' . $nav_link . ' <span class="dropdown-arrow"><img src="' . get_template_directory_uri() . '/assets/images/dropdown-arrow.svg" alt="" /></span></a>';
                            echo '<div class="dropdown-menu">';
                            echo '<div class="dropdown-header">' . $dropdown_header . '</div>';
                            if ($dropdown_links) {
                                foreach ($dropdown_links as $dlink) {
                                    if (!empty($dlink['dropdown-link'])) {
                                        echo '<a href="#" class="dropdown-link">' . esc_html($dlink['dropdown-link']) . '</a>';
                                    }
                                }
                            }
                            echo '</div>';
                            echo '</div>';
                        } else {
                            // If no dropdown header, just output as a simple nav link
                            if ($nav_link) {
                                echo '<a href="#" class="nav-link">' . $nav_link . '</a>';
                            }
                        }
                    }
                }
            }
            ?>
        </div>
    </nav>

    <div class="header-actions">
        <?php
        if (function_exists('get_field')) {
            $btn_primary = get_field('btn-primary', 'option');
            $btn_demo = get_field('btn-demo', 'option');
            if ($btn_primary) {
                echo '<button class="btn btn-primary">' . esc_html($btn_primary) . '</button>';
            }
            if ($btn_demo) {
                echo '<button class="btn btn-demo">' . esc_html($btn_demo) . '</button>';
            }
        }
        ?>
    </div>
</header>
