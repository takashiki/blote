require('dotenv').config();

const CosPlugin = require('cos-webpack');

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

mix.js('resources/assets/js/blote.js', 'public/js').
  sass('resources/assets/sass/blote.scss', 'public/css').
  js('resources/assets/js/admin.js', 'public/js').
  sass('resources/assets/sass/admin.scss', 'public/css').
  js('resources/assets/js/mde.js', 'public/js').
  copyDirectory('node_modules/font-awesome/fonts', 'public/fonts/font-awesome').
  extract(['vue', 'highlight.js'], 'public/js/blote-vendor.js');

if (mix.inProduction()) {
  mix.version();
  mix.setPublicPath('./public/');
  mix.setResourceRoot('../../public/');
  mix.webpackConfig({
    plugins: [
      new CosPlugin({
        secretId: process.env.COSV5_SECRET_ID,
        secretKey: process.env.COSV5_SECRET_KEY,
        bucket: process.env.COSV5_BUCKET + '-' + process.env.COSV5_APP_ID,
        region: process.env.COSV5_REGION,
        path: '/',
      })
    ]
  });
}

mix.browserSync({
  proxy: 'blote.local',
});