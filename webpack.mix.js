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
   .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/main.scss', 'public/css/styles.css',);


 mix.styles([
    'resources/sass/framework/uikit.css',
     'resources/sass/framework/dropzone.css'
 ], 'public/css/libs.css');

mix.scripts([
    'resources/js/framework/uikit.js',
    'resources/js/framework/uikit-icons.js',
    'resources/js/framework/dropzone.js'

], 'public/js/libs.js');

mix.browserSync('wineclub.test');
