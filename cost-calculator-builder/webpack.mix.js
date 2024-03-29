let mix = require('laravel-mix');
require('laravel-mix-clean');
const path = require("path");

mix.webpackConfig({
    resolve: {
        extensions: ['.js', '.json'],
        alias: {
            '@' : path.resolve(__dirname, './frontend/src'),
            '@components' : path.resolve(__dirname, './frontend/src/components'),
            '@mixins' : path.resolve(__dirname, './frontend/src/mixins'),
            '@plugins' : path.resolve(__dirname, './frontend/src/plugins'),
            '@store' : path.resolve(__dirname, './frontend/src/store'),
            '@libs' : path.resolve(__dirname, './frontend/src/libs'),
        },
    },
    devtool: (process.env.NODE_ENV === 'development') ? 'source-map' : false
});

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

mix.setResourceRoot('')
    .js(path.resolve(__dirname, './frontend/src/frontend/index.js'), './frontend/dist/bundle.js')
    .js(path.resolve(__dirname, './frontend/src/admin/main.js'), './frontend/dist/admin.js')
    .js(path.resolve(__dirname, './frontend/src/admin/order.js'), './frontend/dist/order.js')
    .js(path.resolve(__dirname, './frontend/src/admin/templates.js'), './frontend/dist/templates.js')
    .js(path.resolve(__dirname, './frontend/src/admin/category.js'), './frontend/dist/category.js')

mix.setResourceRoot('')
    .sass('frontend/assets/scss/front.scss', 'frontend/dist/css/style.css')
    .sass('frontend/assets/scss/admin.scss', 'frontend/dist/css/admin.css')
    .sass('frontend/assets/scss/gopro.scss', 'frontend/dist/css/gopro.css')
    .sass('frontend/assets/scss/templates.scss', 'frontend/dist/css/templates.css')
    .disableNotifications().options({
        processCssUrls: false
    });

// Full API
// mix.js(src, output);
// mix.ts(src, output); <-- TypeScript support. Requires tsconfig.json to exist in the same folder as webpack.mix.js
// mix.extract(vendorLibs);
// mix.sass(src, output);
// mix.postCss(src, output, [require('postcss-some-plugin')()]);
// mix.browserSync('my-site.test');
// mix.combine(files, destination);
// mix.babel(files, destination); <-- Identical to mix.combine(), but also includes Babel compilation.
// mix.copy(from, to);
// mix.copyDirectory(fromDir, toDir);
// mix.minify(file);
// mix.sourceMaps(); // Enable sourcemaps
// mix.disableNotifications();
// mix.setPublicPath('path/to/public');
// mix.setResourceRoot('prefix/for/resource/locators');
// mix.autoload({}); <-- Will be passed to Webpack's ProvidePlugin.
// mix.webpackConfig({}); <-- Override webpack.config.js, without editing the file directly.
// mix.babelConfig({}); <-- Merge extra Babel configuration (plugins, etc.) with Mix's default.
// mix.then(function () {}) <-- Will be triggered each time Webpack finishes building.
// mix.override(function (webpackConfig) {}) <-- Will be triggered once the webpack config object has been fully generated by Mix.
// mix.dump(); <-- Dump the generated webpack config object to the console.
// mix.extend(name, handler) <-- Extend Mix's API with your own components.
// mix.options({
//   extractVueStyles: false, // Extract .vue component styling to file, rather than inline.
//   globalVueStyles: file, // Variables file to be imported in every component.
//   processCssUrls: true, // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
//   purifyCss: false, // Remove unused CSS selectors.
//   terser: {}, // Terser-specific options. https://github.com/webpack-contrib/terser-webpack-plugin#options
//   postCss: [] // Post-CSS options: https://github.com/postcss/postcss/blob/master/docs/plugins.md
// });
