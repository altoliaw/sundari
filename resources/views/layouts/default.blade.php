<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Sundari">
        <meta name="author" content="Kuan-Teng Liao">
        <meta name="generator" content="">
        <title>Sundari{{$title}}</title>
        <link rel="icon" href="img/icon.ico">
    
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <!-- Page CSS-->
        <link rel="stylesheet" href="css/base.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

        <!--font Awesome-->
        <script src="https://kit.fontawesome.com/1585c56a22.js" crossorigin="anonymous"></script>

        <!--jquery3.4-->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <!-- owl carousel css --> 
        <link rel="stylesheet" href="/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/css/owl.theme.default.min.css">

        <!-- owl carousel js-->
        <script src="/js/owl.carousel.min.js"></script>
        
        <!-- owl carousel custom style -->
        <style>
        .owl-carousel .owl-stage {
            height: 100px;
        }
        .owl-stage-outer {
          height: 12rem;
        }  
        </style>
        
        <!-- owl carousel install -->
        <!-- owl carousel demo: https://owlcarousel2.github.io/OwlCarousel2/demos/demos.html -->
        <script>
            $(function() {
              $(document).ready(function(){
                  $(".owl-carousel").owlCarousel({
                    items:1,
                    loop:true,
                    margin:10,
                    autoplay:true,
                    autoplayTimeout:4000,
                    autoplayHoverPause:false
                  });
              });
            });
        </script>
    </head>
    <body>
    <!--Include template-->
    @include('layouts.fixedparts.head')

    <main role="main">
      <div class="container">
        <!-- Example row of columns -->
        @yield('main')
      </div> <!-- /container -->
    </main>
    
    <!--Include template-->
    @include('layouts.fixedparts.footer')


    </body>
</html>
