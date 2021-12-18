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

// mix.styles([
//     'public/assets/vendor/aos/aos.css',
//     'public/assets/css/all.min.css',
//     'public/assets/vendor/bootstrap/css/bootstrap.min.css',
//     'public/assets/vendor/bootstrap-icons/bootstrap-icons.css',
//     'public/assets/vendor/boxicons/css/boxicons.min.css',
//     'public/assets/vendor/glightbox/css/glightbox.min.css',
//     'public/assets/vendor/remixicon/remixicon.css',
//     'public/assets/vendor/swiper/swiper-bundle.min.css',
//     'public/assets/css/style.css'
//     ], 'public/css/all.css');

//  mix.scripts([
//       'public/assets/vendor/aos/aos.js',
//       'public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
//       'public/assets/vendor/glightbox/js/glightbox.min.js',
//       'public/assets/vendor/php-email-form/validate.js',
//       'public/assets/vendor/purecounter/purecounter.js',
//       'public/assets/vendor/swiper/swiper-bundle.min.js',
//       'public/assets/js/main.js'
//    ], 'public/js/all.js');



mix.styles([
    'public/lib/fontawesome-free/css/all.min.css',
    'public/lib/ionicons/css/ionicons.min.css',
    'public/lib/typicons.font/typicons.css"',
    'public/lib/flag-icon-css/css/flag-icon.min.css',
    'public/css/azia.css'
    ], 'public/css/admin.css');

 mix.scripts([
      'public/lib/jquery/jquery.min.js',
      'public/lib/bootstrap/js/bootstrap.bundle.min.js',
      'public/lib/ionicons/ionicons.js',
      'public/lib/jquery.flot/jquery.flot.js',
      'public/lib/jquery.flot/jquery.flot.resize.js',
      'public/lib/chart.js/Chart.bundle.min.js',
      'public/lib/peity/jquery.peity.min.js',
      'public/js/azia.js',
      'public/js/chart.flot.sampledata.js',
      'public/js/dashboard.sampledata.js',
      'public/js/jquery.cookie.js'
   ], 'public/js/admin.js');
