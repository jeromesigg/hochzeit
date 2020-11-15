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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.styles([
        'resources/css/libs/bootstrap.min.css',
        'resources/css/libs/font-awesome.css',
        'resources/css/libs/icofont.min.css',
        'resources/css/libs/boxicons.min.css',
        'resources/css/libs/venobox.css',
        'resources/css/libs/owl.carousel.min.css',
        'resources/css/libs/aos.css',
        'resources/css/libs/swiper.min.css',
        'resources/css/libs/style.css',
        'resources/css/libs/custom.css',
    ], 'public/css/main.css');
mix.scripts([
     'resources/js/libs/jquery.min.js',
     'resources/js/libs/bootstrap.bundle.min.js',
     'resources/js/libs/font-awesome.js',
     'resources/js/libs/jquery.easing.min.js',
     'resources/js/libs/validate.js',
     'resources/js/libs/jquery.waypoints.min.js',
     'resources/js/libs/counterup.min.js',
     'resources/js/libs/isotope.pkgd.min.js',
     'resources/js/libs/venobox.min.js',
     'resources/js/libs/owl.carousel.min.js',
     'resources/js/libs/aos.js',
     'resources/js/libs/kinetic.js',
     'resources/js/libs/jquery.final-countdown.min.js',
     'resources/js/libs/scrollreveal.min.js',
     'resources/js/libs/swiper.min.js',
     'resources/js/libs/main.js',
     'resources/js/libs/custom.js',
  ], 'public/js/main.js');  

//   Admin
mix.styles([
    'resources/css/libs/bootstrap.min.css',
    'resources/css/libs/font-awesome.css',
    'resources/css/admin/fontastic.css',
    'resources/css/admin/jquery.mCustomScrollbar.css',
    'resources/css/admin/style.default.premium.css',
    'resources/css/libs/custom.css',
], 'public/css/admin.css');
mix.scripts([
 'resources/js/libs/jquery.min.js',
 'resources/js/admin/jquery-ui.js',
 'resources/js/libs/bootstrap.bundle.min.js',
 'resources/js/admin/jquery.mCustomScrollbar.js',
 'resources/js/admin/front.js',
 'resources/js/admin/jqBootstrapValidation.js',
], 'public/js/admin.js');  