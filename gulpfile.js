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
    mix.sass(
        'app.scss',
        'public/css/app.css',
        {includePaths: ['resources/assets/vendor/foundation/scss']}
    );
    mix.scripts(
        ['vendor/modernizr.js', 'vendor/jquery.js', 'foundation.min.js'],
        'public/js/vendor.js', 
        'resources/assets/vendor/foundation/js/'
    ).copy('resources/assets/js/app.js', 'public/js/app.js');
});
