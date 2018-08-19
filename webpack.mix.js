let mix = require('laravel-mix');

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

mix.js('resources/assets/js/blote.js', 'public/js')
    .sass('resources/assets/sass/blote.scss', 'public/css')
    .js('resources/assets/js/admin.js', 'public/js')
    .sass('resources/assets/sass/admin.scss', 'public/css')
    .copyDirectory('node_modules/font-awesome/fonts', 'public/fonts/font-awesome')
    .extract(['vue', 'highlight.js'], 'public/js/blote-vendor.js');

if (mix.inProduction()) {
    mix.version();
}

mix.browserSync({
    proxy: 'blote.local'
});