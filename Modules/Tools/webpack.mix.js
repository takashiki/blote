const {mix} = require('laravel-mix');
require('laravel-mix-merge-manifest');

mix.setPublicPath('../../public').mergeManifest();

mix.js(__dirname + '/Resources/assets/js/app.js', 'js/tools.js')
    .sass(__dirname + '/Resources/assets/sass/app.scss', 'css/tools.css')
    .extract(['vue', 'axios', 'lodash', 'element-ui'], 'js/vendor.js');

mix.options({
  processCssUrls: true,
  purifyCss: false,
  extractVueStyles: false,
  imgLoaderOptions: {
    enabled: false
  },
  uglify: {
    include: /\.min\.js$/,
    sourceMap: true,
    uglifyOptions: {
      compress: {
        keep_fnames: true
      },
      sourceMap: true,
      mangle: false,
      maxLineLen: 1024
    }
  }
});

if (mix.inProduction()) {
    mix.version();
}

mix.browserSync({
    proxy: 'blote.local'
});