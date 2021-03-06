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

//mix.js('resources/js/app.js', 'public/js')
//.sass('resources/sass/app.scss', 'public/css');


mix.scripts([

    'node_modules/jquery/dist/jquery.min.js', 
    'node_modules/popper.js/dist/umd/popper.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/alertifyjs/build/alertify.js',
], 'public/js/app.js');


/*mix.js([
    'node_modules/popper.js/dist/umd/popper.min.js',
    styles
], 'public/js/app.js');*/

mix.sass('resources/sass/app.scss', 'public/css');

/*mix.styles([
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    'node_modules/alertifyjs/build/css/alertify.min.css',
    'public/css/sb-admin.min.css',
    'node_modules/@fortawesome/fontawesome-free/css/all.css',
], 'public/css/app.css');*/
