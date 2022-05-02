const mix = require("laravel-mix");

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

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);

// mix.scripts("public/assets/js/*.js", "public/assets/js/all-file.js").minify(
//     "public/assets/js/all-file.js"
// );
// mix.styles("public/assets/css/*.css", "public/assets/css/all-file.css").minify(
//     "public/assets/css/all-file.css"
// );

mix.browserSync('127.0.0.1:8000');
