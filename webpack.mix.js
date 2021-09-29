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

mix.styles([
    'public/assets/vendor/aos/aos.css',
    'public/assets/css/all.min.css',
    'public/assets/vendor/bootstrap/css/bootstrap.min.css',
    'public/assets/vendor/bootstrap-icons/bootstrap-icons.css',
    'public/assets/vendor/boxicons/css/boxicons.min.css',
    'public/assets/vendor/glightbox/css/glightbox.min.css',
    'public/assets/vendor/remixicon/remixicon.css',
    'public/assets/vendor/swiper/swiper-bundle.min.css',
    'public/assets/css/style.css'
    ], 'public/css/all.css');

 mix.scripts([
      'public/assets/vendor/aos/aos.js',
      'public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
      'public/assets/vendor/glightbox/js/glightbox.min.js',
      'public/assets/vendor/php-email-form/validate.js',
      'public/assets/vendor/purecounter/purecounter.js',
      'public/assets/vendor/swiper/swiper-bundle.min.js',
      'public/assets/js/main.js'
   ], 'public/js/all.js');
