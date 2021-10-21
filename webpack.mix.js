const mix = require('laravel-mix');


/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */





mix.js('resources/admin/js/app.js', 'public/js')
    .js('resources/admin/js/app.js', 'public/cliente/js')
    .sass('resources/admin/sass/app.scss', 'public/css');
//     .sass('resources/sass/app.scss', 'public/css');

mix.copyDirectory('resources/admin/img', 'public/admin/images');

//** Telas do site */

mix.css(
    [
        "resources/cliente/css/nucleo-icons.css",
        "resources/cliente/css/blk-design-system-pro.css",
        // "resources/cliente/css/",
        // "resources/cliente/css/"
    ],
    "public/cliente/css/app.css"
);

mix.js("resources/cliente/js/core/jquery.min.js", "public/cliente/js/")
    .js("resources/cliente/js/core/popper.min.js", "public/cliente/js/")
    .js("resources/cliente/js/core/bootstrap.min.js", "public/cliente/js/")
    .js("resources/cliente/js/plugins/perfect-scrollbar.jquery.min.js", "public/cliente/js/");


/** Teste de dashboard */

mix.js("resources/admin/js/dashboard/app.js", "public/admin/js/d")
    .js("resources/admin/js/dashboard/modernizr.min.js", "public/admin/js/d")
    .js("resources/admin/js/dashboard/jquery.app.js", "public/admin/js/d")
    .js("resources/admin/js/dashboard/jquery.slimscroll.js", "public/admin/js/d")
    .sass("resources/admin/sass/dashboard/app.scss", "public/admin/css/d");

mix.styles(
    [
        "resources/admin/css/dashboard/bootstrap.min.css",
        "resources/admin/css/dashboard/style.css",
        "resources/admin/css/dashboard/print.css",
        "resources/admin/css/dashboard/icons.css"
    ],
    "public/admin/css/d/schedule.css"
);

mix.styles(
    [
        "resources/admin/css/dashboard/dataTables.bootstrap4.min.css",
        "resources/admin/css/dashboard/buttons.bootstrap4.min.css",
        "resources/admin/css/dashboard/responsive.bootstrap4.min.css"
    ],
    "public/admin/css/d/datatable.min.css"
);

mix.scripts(
    [
        "resources/admin/js/dashboard/jquery.dataTables.min.js",
        "resources/admin/js/dashboard/dataTables.bootstrap4.min.js",
        "resources/admin/js/dashboard/dataTables.buttons.min.js",
        "resources/admin/js/dashboard/buttons.bootstrap4.min.js",
    ],
    "public/admin/js/d/datatable.min.js"
);

mix.copy(
    "resources/admin/css/dashboard/plugins/jquery.steps.css",
    "public/admin/css/d/plugins"
);

mix.copy(
    "resources/admin/css/dashboard/plugins/magnific-popup.css",
    "public/admin/css/d/plugins"
);

mix.copy("resources/admin/fonts/*", "public/admin/fonts");
mix.copy("resources/cliente/fonts/*", "public/cliente/fonts");

mix.version();

mix.copy(
    [
        "resources/assets/js/tinymce",
    ],
    "public/admin/js/tinymce"
);