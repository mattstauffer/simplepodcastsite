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

elixir(function(mix) {
	mix.copy('node_modules/sweetalert/dist/sweetalert.css', 'resources/assets/sass/sweetalert.scss');

    mix.sass('app.scss')
        .version('css/app.css');

    mix.scripts([
    	'../../../node_modules/sweetalert/dist/sweetalert.min.js'
    ], 'public/js/app.js');
});
