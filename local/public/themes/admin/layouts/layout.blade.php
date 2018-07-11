<!DOCTYPE html>
<html lang="en">

    <head>
        {!! meta_init() !!}
        <meta name="keywords" content="@get('keywords')">
        <meta name="description" content="@get('description')">
        <meta name="author" content="@get('author')">      

        
        <title>@get('title')</title>

        @styles()
       
     <link rel="stylesheet" href="{{asset('local/public/themes/admin/core/assets/vendor/flag-icon-css/flag-icon.css') }}">
    
    
    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('local/public/themes/admin/core/assets/fonts/web-icons/web-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('local/public/themes/admin/core/assets/fonts/brand-icons/brand-icons.min.css')}}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    


    
    <!--[if lt IE 9]>
    <script src="assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="assets/vendor/media-match/media.match.min.js"></script>
    <script src="assets/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
     
    <script src="{{ asset('local/public/themes/admin/core/assets/vendor/breakpoints/breakpoints.js') }}"></script>
    <script>
      Breakpoints();
    </script>
        
    </head>

    <body>
        @partial('header')

        @content()

        @partial('footer')

        @scripts()
    </body>

</html>
