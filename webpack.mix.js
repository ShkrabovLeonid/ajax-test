const mix = require('laravel-mix');
require('laravel-mix-clean');

mix.clean({
    cleanOnceBeforeBuildPatterns: ['assets/dist']
});
mix.options({
    processCssUrls: false
});
mix.js('assets/src/core/js/script.js', 'assets/dist/core/js/')
    .js('assets/src/front_page/js/script.js', 'assets/dist/front_page/js/')
    .options({
        legacyNodePolyfills: true,
        postCss: [require('autoprefixer')],
    })
    .sass('assets/src/core/scss/main.scss', 'assets/dist/core/css/style.css')
    .sass('assets/src/front_page/scss/main.scss', 'assets/dist/front_page/css/style.css')
    .sourceMaps()
    .copyDirectory('assets/src/fonts', 'assets/dist/fonts')
    .copyDirectory('assets/src/img', 'assets/dist/img');