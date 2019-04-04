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
	.js('resources/js/bootstrap.js', 'public/js')
	.js('resources/js/bootstrap.min.js', 'public/js')
	.js('resources/js/jquery-1.11.0.min.js', 'public/js')
	.js('resources/js/jquery.gmap3.js', 'public/js')
	.js('resources/js/owl.carousel.min.js', 'public/js')
	.js('resources/js/slick.js', 'public/js')
	.js('resources/js/sliderpro.min.js', 'public/js')
	.js('resources/js/wow.animation.js', 'public/js')
   	.sass('resources/sass/*.css', 'public/css');
