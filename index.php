

<?php get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">
                    <?php
                        if (function_exists(function: 'get_field')) {
                            $hero_title = get_field('hero-title', get_queried_object_id());
                            if ($hero_title) {
                                echo nl2br(string: esc_html($hero_title));
                            }
                        }
                    ?>
                </h1>
                <p class="hero-subtitle">
                    <?php
                        if (function_exists(function: 'get_field')) {
                            $hero_subtitle = get_field('hero-subtitle', get_queried_object_id());
                            if ($hero_subtitle) {
                                echo nl2br(string: esc_html($hero_subtitle));
                            }
                        }
                    ?>
                </p>
                <p class="body-text">
                    <?php
                        if (function_exists(function: 'get_field')) {
                            $body_text = get_field('body-text', get_queried_object_id());
                            if ($body_text) {
                                echo nl2br(string: esc_html($body_text));
                            }
                        }
                    ?>
                </p>
                <div class="hero-actions">
                    <button class="btn btn-primary">
                        <?php
                            if (function_exists(function: 'get_field')) {
                                $btn_primary = get_field('btn-primary', get_queried_object_id());
                                if ($btn_primary) {
                                    echo esc_html($btn_primary);
                                }
                            }
                        ?>
                    </button>
                    <button class="btn btn-demo">
                        <?php
                            if (function_exists(function: 'get_field')) {
                                $btn_demo = get_field('btn-demo', get_queried_object_id());
                                if ($btn_demo) {
                                    echo esc_html($btn_demo);
                                }
                            }
                        ?>
                    </button>
                </div>
            </div>
                <?php
                    if (function_exists(function: 'get_field')) {
                        $see_everything = get_field('see-everything', get_queried_object_id());
                        if ($see_everything && isset($see_everything['url'])) {
                            echo '<img src="' . esc_url($see_everything['url']) . '" alt="Network Diagram" />';
                        }
                    }
                ?>
    </section>

    <!-- Challenge Section -->
    <section class="challenge">
        <div class="container">
            <div class="challenge-illustration">
                <?php
                    if (function_exists('get_field')) {
                        $challenge_illustration = get_field('challenge-illustration', get_queried_object_id());
                        if ($challenge_illustration && isset($challenge_illustration['url'])) {
                            echo '<img src="' . esc_url($challenge_illustration['url']) . '" alt="Challenge" />';
                        }
                    }
                ?>
            </div>
            <div class="challenge-content">
                <h2 class="section-title heading-40">
                    <?php
                        if (function_exists('get_field')) {
                            $challenge_title = get_field('title', get_queried_object_id());
                            if ($challenge_title) {
                                echo esc_html($challenge_title);
                            }
                        }
                    ?>
                </h2>
                <p class="body-text">
                    <?php
                        if (function_exists('get_field')) {
                            $challenge_body = get_field('challenge-body-text', get_queried_object_id());
                            if ($challenge_body) {
                                echo nl2br(esc_html($challenge_body));
                            }
                        }
                    ?>
                </p>
            </div>
        </div>
    </section>

    <!-- Solution Section -->
    <section class="solution">
        <div class="solution-container">
            <h2 class="solution-title">
                <?php
                    if (function_exists(function: 'get_field')) {
                        $solution_title = get_field('solution-title', get_queried_object_id());
                        if ($solution_title) {
                            echo esc_html($solution_title);
                        }
                    }
                ?>
            </h2>
            <p class="solution-subtitle">
                <?php
                    if (function_exists('get_field')) {
                        $solution_subtitle = get_field('solution-subtitle', get_queried_object_id());
                        if ($solution_subtitle) {
                            echo nl2br(esc_html($solution_subtitle));
                        }
                    }
                ?>
            </p>
            <p class="body-text">
                <?php
                    if (function_exists('get_field')) {
                        $solution_body = get_field('solution-body-text', get_queried_object_id());
                        if ($solution_body) {
                            echo nl2br(esc_html($solution_body));
                        }
                    }
                ?>
            </p>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-discovery">
        <div class="container">
            <div class="features-content">
                <h2 class="features-title heading-40">
                    <?php
                        if (function_exists('get_field')) {
                            $features_title = get_field('features-discovery-title', get_queried_object_id());
                            if ($features_title) {
                                echo esc_html($features_title);
                            }
                        }
                    ?>
                </h2>
                <p class="features-subtitle">
                    <?php
                        if (function_exists('get_field')) {
                            $features_subtitle = get_field('features-subtitle', get_queried_object_id());
                            if ($features_subtitle) {
                                echo nl2br(esc_html($features_subtitle));
                            }
                        }
                    ?>
                </p>
                <div class="features-grid">
                    <?php
                        if (function_exists('get_field')) {
                            $features_grid = get_field('features-grid', get_queried_object_id());
                            if ($features_grid) {
                                foreach ($features_grid as $feature) {
                                    echo '<div class="feature-item">';
                                    if (!empty($feature['feature-number'])) {
                                        echo '<span class="feature-number">' . esc_html($feature['feature-number']) . '</span>';
                                    }
                                    if (!empty($feature['feature-text'])) {
                                        echo '<p class="feature-text">' . esc_html($feature['feature-text']) . '</p>';
                                    }
                                    echo '</div>';
                                }
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="features-image">
                <?php
                    if (function_exists('get_field')) {
                        $feature_image = get_field('feature-image', get_queried_object_id());
                        if ($feature_image && isset($feature_image['url'])) {
                            echo '<img src="' . esc_url($feature_image['url']) . '" alt="Solution Diagram" />';
                        }
                    }
                ?>
            </div>
        </div>
    </section>

    <!-- Runtime Visibility Section -->
    <section class="features-runtime">
        <div class="container">
            <div class="runtime-box">
                <h2 class="runtime-title heading-40">
                    <?php
                        if (function_exists('get_field')) {
                            $runtime_title = get_field('features-runtime-title', get_queried_object_id());
                            if ($runtime_title) {
                                echo esc_html($runtime_title);
                            }
                        }
                    ?>
                </h2>
                <p class="runtime-subtitle">
                    <?php
                        if (function_exists('get_field')) {
                            $runtime_subtitle = get_field('runtime-subtitle', get_queried_object_id());
                            if ($runtime_subtitle) {
                                echo nl2br(esc_html($runtime_subtitle));
                            }
                        }
                    ?>
                </p>
                <div class="runtime-list">
                    <?php
                        if (function_exists('get_field')) {
                            $runtime_list = get_field('runtime-list', get_queried_object_id());
                            if ($runtime_list) {
                                foreach ($runtime_list as $runtime) {
                                    echo '<div class="runtime-item">';
                                    if (!empty($runtime['runtime-number'])) {
                                        echo '<span class="runtime-number">' . esc_html($runtime['runtime-number']) . '</span>';
                                    }
                                    if (!empty($runtime['runtime-body-text'])) {
                                        echo '<p class="body-text">' . esc_html($runtime['runtime-body-text']) . '</p>';
                                    }
                                    echo '</div>';
                                }
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- New Container Section -->
    <section class="know-section">
        <div class="know-container">
            <h2 class="know-title heading-40">
                <?php
                    if (function_exists('get_field')) {
                        $know_title = get_field('know-title', get_queried_object_id());
                        if ($know_title) {
                            echo esc_html($know_title);
                        }
                    }
                ?>
            </h2>
            <p class="know-subtitle">
                <?php
                    if (function_exists('get_field')) {
                        $know_subtitle = get_field('know-subtitle', get_queried_object_id());
                        if ($know_subtitle) {
                            echo esc_html($know_subtitle);
                        }
                    }
                ?>
            </p>
            <div class="know-diagram">
                <?php
                    if (function_exists('get_field')) {
                        $know_diagram = get_field('know-diagram', get_queried_object_id());
                        if ($know_diagram && isset($know_diagram['url'])) {
                            echo '<img src="' . esc_url($know_diagram['url']) . '" alt="Network Diagram" />';
                        }
                    }
                ?>
            </div>
        </div>
    </section>

    <!-- Value Section -->
    <section class="value">
        <div class="value-container">
            <h2 class="value-title heading-40">
                <?php
                    if (function_exists('get_field')) {
                        $value_title = get_field('value-title', get_queried_object_id());
                        if ($value_title) {
                            echo esc_html($value_title);
                        }
                    }
                ?>
            </h2>
            <div class="value-grid">
                <?php
                    if (function_exists('get_field')) {
                        $value_grid = get_field('value-grid', get_queried_object_id());
                        if ($value_grid) {
                            foreach ($value_grid as $value) {
                                echo '<div class="value-card">';
                                if (!empty($value['value-icon']) && isset($value['value-icon']['url'])) {
                                    echo '<div class="value-icon"><img src="' . esc_url($value['value-icon']['url']) . '" alt="" /></div>';
                                }
                                if (!empty($value['value-body-text'])) {
                                    echo '<p class="body-text">' . esc_html($value['value-body-text']) . '</p>';
                                }
                                echo '</div>';
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </section>

    <!-- Why Runtime Section -->
    <section class="why-runtime">
        <div class="container">
            <h2 class="why-runtime-title">
                <?php
                    if (function_exists('get_field')) {
                        $why_runtime_title = get_field('why-runtime-title', get_queried_object_id());
                        if ($why_runtime_title) {
                            echo esc_html($why_runtime_title);
                        }
                    }
                ?>
            </h2>
            <p class="why-runtime-subtitle">
                <?php
                    if (function_exists('get_field')) {
                        $why_runtime_subtitle = get_field('why-runtime-subtitle', get_queried_object_id());
                        if ($why_runtime_subtitle) {
                            echo esc_html($why_runtime_subtitle);
                        }
                    }
                ?>
            </p>
            <div class="runtime-content">
                <?php
                    if (function_exists('get_field')) {
                        $why_runtime_image = get_field('why-runtime-image', get_queried_object_id());
                        if ($why_runtime_image && isset($why_runtime_image['url'])) {
                            echo '<img src="' . esc_url($why_runtime_image['url']) . '" alt="Pyramid Container" />';
                        }
                    }
                ?>
                <div>
                    <p class="body-text">
                        <?php
                            if (function_exists('get_field')) {
                                $why_runtime_body = get_field('why-runtime-body-text', get_queried_object_id());
                                if ($why_runtime_body) {
                                    echo nl2br(esc_html($why_runtime_body));
                                }
                            }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
