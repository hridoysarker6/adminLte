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



mix.js([
    'resources/js/app.js',
    'public/asset/plugins/jquery-ui/jquery-ui.min.js',
    'public/asset/plugins/bootstrap/js/bootstrap.bundle.min.js',
    // 'public/asset/plugins/chart.js/Chart.min.js',
    'public/asset/plugins/sparklines/sparkline.js',
    'public/asset/plugins/jqvmap/jquery.vmap.min.js',
    'public/asset/plugins/jqvmap/maps/jquery.vmap.usa.js',
    'public/asset/plugins/jquery-knob/jquery.knob.min.js',
    // 'public/asset/plugins/moment/moment.min.js',
    // 'public/asset/plugins/daterangepicker/daterangepicker.js',
    'public/asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
    'public/asset/plugins/summernote/summernote-bs4.min.js',
    'public/asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
    'public/asset/dist/js/adminlte.js',
    'public/asset/dist/js/pages/dashboard.js',
    'public/asset/dist/js/demo.js',
    // 'public/asset/plugins/select2/js/select2.full.min.js',

    'public/asset/js/jquery.tableToExcel.js',

] ,'public/js')
    .sass('resources/sass/app.scss','public/css')
    .sourceMaps();
    mix.styles([
        'public/asset/plugins/fontawesome-free/css/all.min.css',
        'public/asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        'public/asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'public/asset/plugins/jqvmap/jqvmap.min.css',
        'public/asset/dist/css/adminlte.min.css',
        'public/asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        'public/asset/plugins/daterangepicker/daterangepicker.css',
        'public/asset/plugins/summernote/summernote-bs4.css',
        'public/asset/plugins/select2/css/select2.min.css',
        'public/asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css',
        'public/asset/css/style.css',
    ], 'public/css/all.css');
