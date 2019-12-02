const mix = require('laravel-mix');


// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

mix.styles(['public/main/css/font-face.css',
    'public/main/vendor/font-awesome-4.7/css/font-awesome.min.css',
    'public/main/vendor/font-awesome-5/css/fontawesome-all.min.css',
    'public/main/vendor/mdi-font/css/material-design-iconic-font.min.css',
    'public/vendor/bootstrap-4.1/bootstrap.min.css',
    'public/vendor/animsition/animsition.min.css',
    'public/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css',
    'public/vendor/wow/animate.css',
    'public/vendor/css-hamburgers/hamburgers.min.css',
    'public/vendor/slick/slick.css',
    'public/vendor/select2/select2.min.css',
    'public/vendor/perfect-scrollbar/perfect-scrollbar.css',
    'public/css/theme.css'], 'public/css/app.css')
    .scripts(['vendor/jquery-3.2.1.min.js',
        'public/vendor/bootstrap-4.1/popper.min.js',
        'public/vendor/bootstrap-4.1/bootstrap.min.js',
        'public/vendor/slick/slick.min.js',
        'public/vendor/wow/wow.min.js',
        'public/vendor/animsition/animsition.min.js',
        'public/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js',
        'public/vendor/counter-up/jquery.waypoints.min.js',
        'public/vendor/counter-up/jquery.counterup.min.js',
        'public/vendor/circle-progress/circle-progress.min.js',
        'public/vendor/perfect-scrollbar/perfect-scrollbar.js',
        'public/vendor/chartjs/Chart.bundle.min.js',
        'public/vendor/select2/select2.min.js',
        'public/js/main.js'], 'js/app.js');
