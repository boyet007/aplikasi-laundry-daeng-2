const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .copy("resources/admin_lte/", "public/admin_lte/", false)
    .copy("resources/bower_components/", "public/bower_components/", false)
    .sass('resources/sass/app.scss', 'public/assets/css');