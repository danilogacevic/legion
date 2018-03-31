let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

// Webpack styles

mix.styles([
    'resources/assets/css/admin/css/bootstrap.min.css',
    'resources/assets/css/admin/css/bootstrap-responsive.min.css',
    'resources/assets/css/admin/css/fullcalendar.css',
    'resources/assets/css/admin/css/matrix-style.css',
    'resources/assets/css/admin/css/font-awesome.css',
    'resources/assets/css/admin/css/jquery.gritter.css'
],'public/admin/css/adminIndex.css')


// Webpack scripts

mix.babel([
    'resources/assets/js/adminJs/js/excanvas.min.js',
    'resources/assets/js/adminJs/js/jquery.min.js',
    'resources/assets/js/adminJs/js/jquery.ui.custom.js',
    'resources/assets/js/adminJs/js/bootstrap.min.js',
    'resources/assets/js/adminJs/js/jquery.flot.min.js',
    'resources/assets/js/adminJs/js/jquery.flot.resize.min.js',
    'resources/assets/js/adminJs/js/jquery.peity.min.js',
    'resources/assets/js/adminJs/js/fullcalendar.min.js',
    'resources/assets/js/adminJs/js/matrix.js',
    'resources/assets/js/adminJs/js/matrix.dashboard.js',
    'resources/assets/js/adminJs/js/jquery.gritter.min.js',
    'resources/assets/js/adminJs/js/matrix.interface.js',
    'resources/assets/js/adminJs/js/matrix.chat.js',
    'resources/assets/js/adminJs/js/jquery.validate.js',
    'resources/assets/js/adminJs/js/matrix.form_validation.js',
    'resources/assets/js/adminJs/js/jquery.wizard.js',
    'resources/assets/js/adminJs/js/jquery.uniform.js',
    'resources/assets/js/adminJs/js/select2.min.js',
    'resources/assets/js/adminJs/js/matrix.popover.js',
    'resources/assets/js/adminJs/js/jquery.dataTables.min.js',
    'resources/assets/js/adminJs/js/matrix.tables.js'
],'public/admin/js/adminIndex.js');