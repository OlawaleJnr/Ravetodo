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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'resources/css/responsive.css',
    'resources/css/themify.css',
    'resources/css/todo.css',
    'resources/css/style.css',
    'resources/css/sweetalert2.css'
], './public/css/theme.css');

mix.scripts([
    'resources/js/sweetalert.min.js',
], './public/js/libs.js');


