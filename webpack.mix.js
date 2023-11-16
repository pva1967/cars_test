const mix = require('laravel-mix');
const front = require('./frontend.mix.js');

//enable sourcemaps only in dev environment
if (!mix.inProduction()) {
    mix.webpackConfig({
        devtool: 'inline-source-map',
    });
}
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

const vendors = 'node_modules/';
const resourcesAssets = 'resources/';
const srcCss = resourcesAssets + 'css/';
const srcJs = resourcesAssets + 'js/';
const srcSass = resourcesAssets + 'sass/';

//destination path configuration
const dest = 'public/';
const destFonts = dest + 'webfonts/';
const destCss = dest + 'css/';
const destJs = dest + 'js/';
const destImg = dest + 'img/';
const destImages = dest + 'images/';
const destVendors = dest + 'vendors/';

mix.sass('resources/sass/app.scss', 'public/css')
mix.copy(srcCss, destCss, false);
