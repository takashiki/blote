require('dotenv').config({path: '../../.env'});
require('laravel-mix-merge-manifest');

const {mix} = require('laravel-mix');
const CosPlugin = require('cos-webpack');

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
    proxy: 'blote.local'
});