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

mix.copyDirectory('vendor/tinymce/tinymce', 'public/js/tinymce');

mix
  .copy('node_modules/select2/dist/css/select2.min.css', 'public/css')
  .copy('node_modules/select2/dist/js/select2.min.js', 'public/js');

mix.copy('node_modules/flatpickr/dist/flatpickr.min.css', 'public/css/');
mix
  .js('resources/js/app.js', 'public/js')
  .postCss('resources/css/app.css', 'public/css', [require('tailwindcss')])
  .version();
mix.js('resources/js/filepond.js', 'public/js').version();
mix.js('resources/js/fullcalendar.js', 'public/js');
