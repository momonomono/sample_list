const mix = require('laravel-mix');
const browserSync = require('browser-sync');
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
    .sass('resources/sass/app.scss', 'public/css')
    .js('resources/js/main.js', 'public/js')
    .sass('resources/sass/style.scss', 'public/css')
    .browserSync({
        files: [
            'resources/**/*',
            'app/**/*',
            'config/**/*',
            'routes/**/*',
            'public/**/*'
        ],
        proxy: 'http://127.0.0.1:8000',
    });