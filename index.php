<?php

declare(strict_types=1);

//echo sprintf('<pre>%s</pre>', var_export($_SERVER, true));

if (
    str_starts_with($_SERVER['REQUEST_URI'], '/a/')
    || (
        $_SERVER['HTTP_HOST'] === 'stubwizard.wip'
        && str_starts_with($_SERVER['REQUEST_URI'], '/_wdt')
    )
    || (
        $_SERVER['HTTP_HOST'] === 'stubwizard.wip'
        && str_starts_with($_SERVER['REQUEST_URI'], '/_profiler')
    )
) {
    require_once dirname(__DIR__) . '/vendor/autoload_runtime.php';

    return function (array $context) {
        return new App\Kernel($context['APP_ENV'], (bool)$context['APP_DEBUG']);
    };
}

/**
 * Front to the WordPress application. This file doesn't do anything, but loads wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/** Tells WordPress to load the WordPress theme and output it. */
const WP_USE_THEMES = true;

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
