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
    mix
        .sass([
          'app.scss'
        ],'public/css/scss.css')
        .styles([
            'scss.css',
            'bootstrap.min.css'
        ], 'public/css/app.css', 'public/css')
        .scripts([
            '../../bower_components/jquery/dist/jquery.min.js',
            '../../bower_components/Umi/dist/js/bootstrap.min.js'
        ], 'public/js/app.js', 'public/js')
        .version(['css/app.css', 'js/app.js']);
});
