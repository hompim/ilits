const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css/app.css")
    .combine(
        [
            "public/css/app.css",
            "resources/css/fonts.css",
            "resources/css/globals.css",
        ],
        "public/css/app.css"
    )
    .styles("resources/css/pages/main.css", "public/css/pages/main.css")
    .styles(
        "resources/css/components/five-items-grid.css",
        "public/css/components/five-items-grid.css"
    )
    .styles(
        "resources/css/components/button-link.css",
        "public/css/components/button-link.css"
    )
    .styles(
        "resources/css/components/carousel-with-floating-header.css",
        "public/css/components/carousel-with-floating-header.css"
    )
    .styles(
        "resources/css/components/carousel-with-header.css",
        "public/css/components/carousel-with-header.css"
    )
    .styles(
        "resources/css/components/footer.css",
        "public/css/components/footer.css"
    )
    .styles(
        "resources/css/components/header.css",
        "public/css/components/header.css"
    )
    .styles("resources/css/components/map.css", "public/css/components/map.css")
    .styles(
        "resources/css/components/two-side-card.css",
        "public/css/components/two-side-card.css"
    )
    .styles(
        "resources/css/components/two-side-color-carousel.css",
        "public/css/components/two-side-color-carousel.css"
    )
    .styles(
        "resources/css/components/three-cards-carousel.css",
        "public/css/components/three-cards-carousel.css"
    )
    .webpackConfig(require("./webpack.config"));

if (mix.inProduction()) {
    mix.version();
}
