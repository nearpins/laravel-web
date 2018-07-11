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

 mix.react('resources/assets/js/app.js', 'public/themes/admin/assets/js/')
  .sass('resources/assets/sass/app.scss', 'public/css/ajay');

//adminLayout | css
mix.combine([
    'public/themes/admin/core/assets/css/bootstrap.min.css',
    'public/themes/admin/core/assets/css/bootstrap-extend.min.css', 
    'public/themes/admin/core/assets/css/site.min.css', 
    'public/themes/admin/core/assets/vendor/animsition/animsition.css', 
    'public/themes/admin/core/assets/vendor/asscrollable/asScrollable.css', 
    'public/themes/admin/core/assets/vendor/switchery/switchery.css', 
    'public/themes/admin/core/assets/vendor/intro-js/introjs.css', 
    'public/themes/admin/core/assets/vendor/slidepanel/slidePanel.css'
    
    
       
    
], '../themes/admin/assets/app.css');
//adminLayout | javascript

mix.combine([
    'public/themes/admin/core/assets/vendor/babel-external-helpers/babel-external-helpers.js', 
    'public/themes/admin/core/assets/vendor/jquery/jquery.js', 
    'public/themes/admin/core/assets/vendor/popper-js/umd/popper.min.js', 
    'public/themes/admin/core/assets/vendor/bootstrap/bootstrap.js', 
    'public/themes/admin/core/assets/vendor/animsition/animsition.js', 
    'public/themes/admin/core/assets/vendor/mousewheel/jquery.mousewheel.js', 
    'public/themes/admin/core/assets/vendor/asscrollbar/jquery-asScrollbar.js',
    'public/themes/admin/core/assets/vendor/asscrollable/jquery-asScrollable.js',
  
    'public/themes/admin/core/assets/vendor/intro-js/intro.js',
    'public/themes/admin/core/assets/vendor/screenfull/screenfull.js',
    'public/themes/admin/core/assets/vendor/slidepanel/jquery-slidePanel.js',
    'public/themes/admin/core/assets/js/Component.js',
    'public/themes/admin/core/assets/js/Plugin.js',
    'public/themes/admin/core/assets/js/Base.js',
    'public/themes/admin/core/assets/js/Config.js',
    'public/themes/admin/core/assets/js/Section/Menubar.js',
    'public/themes/admin/core/assets/js/Section/Sidebar.js',
    'public/themes/admin/core/assets/js/Section/PageAside.js',
    'public/themes/admin/core/assets/js/Plugin/menu.js',
    'public/themes/admin/core/assets/js/config/colors.js',
    'public/themes/admin/core/assets/js/config/tour.js',
    'public/themes/admin/core/assets/js/Site.js',
    'public/themes/admin/core/assets/js/Plugin/asscrollable.js',
    'public/themes/admin/core/assets/js/Plugin/slidepanel.js',
    'public/themes/admin/core/assets/js/Plugin/switchery.js',
    'public/themes/admin/core/assets/js/nearpins.js'      
    
], '../themes/admin/assets/app.js');

//homeLayout
mix.combine([
    'public/themes/home/ayrahome/assets/plugins/font-awesome/css/font-awesome.min.css', 
    'public/themes/home/ayrahome/assets/plugins/bootstrap/css/bootstrap.min.css', 
    'public/themes/home/ayrahome/assets/pages/css/animate.css', 
    'public/themes/home/ayrahome/assets/plugins/fancybox/source/jquery.fancybox.css', 
    'public/themes/home/ayrahome/assets/plugins/owl.carousel/assets/owl.carousel.css', 
    'public/themes/home/ayrahome/assets/pages/css/components.css', 
    'public/themes/home/ayrahome/assets/pages/css/slider.css', 
    'public/themes/home/ayrahome/assets/corporate/css/style.css', 
    'public/themes/home/ayrahome/assets/corporate/css/style-responsive.css', 
    'public/themes/home/ayrahome/assets/corporate/css/themes/red.css', 
    'public/themes/home/ayrahome/assets/corporate/css/custom.css',      
    
], '../themes/home/assets/app.css');

mix.combine([
    'public/themes/home/ayrahome/assets/plugins/jquery.min.js', 
    'public/themes/home/ayrahome/assets/plugins/jquery-migrate.min.js', 
    'public/themes/home/ayrahome/assets/plugins/bootstrap/js/bootstrap.min.js', 
    'public/themes/home/ayrahome/assets/corporate/scripts/back-to-top.js', 
    
    'public/themes/home/ayrahome/assets/plugins/owl.carousel/owl.carousel.min.js', 
    'public/themes/home/ayrahome/assets/corporate/scripts/layout.js', 
    'public/themes/home/ayrahome/assets/pages/scripts/bs-carousel.js',     
    
], '../themes/home/assets/app.js');