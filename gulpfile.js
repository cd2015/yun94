var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

var bootstrapPath = 'node_modules/bootstrap-sass/assets/';
var bowerResources = 'resources/assets/vendor/';

elixir(function (mix) {
    mix.sass('app.scss')
        .version('css/app.css')
        .copy(bootstrapPath + 'fonts', 'public/fonts')
        .copy(bootstrapPath + 'javascripts/bootstrap.min.js', 'public/js')
        .copy(bowerResources + 'font-awesome/fonts', 'public/fonts')
        .copy(bowerResources + 'jquery/dist/jquery.min.js', 'public/js');
    mix.browserSync();
});