<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
       
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <!-- <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" /> -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />


</head>
<section class="blog-article-section">
            <div class="blog-article-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                           
                            <div class="blog-row">
                             <a href="#">
                            <div class="thumbnail">
                                 <img src="{{ URL::to('/') }}/images/{{ $image }}" />
                               
                             </div>
                             </a>
                            <div class="caption">
                            <a href="#">
                             <h3>{{ $name }}</h3>
                             </a>
                             <p>{{ $detail }}</p>
                             
                            <!--  <p>
                                <a href="#" class="btn btn-primary blog-btn" role="button">
                                   Read More
                                </a>
                             </p> -->
                             
                         
                       </div>
                       
                       
                       </div> 
                    
                        </div>
                        
                </div>

            </div>
        </div>
    </section>


<footer class="footer footer-alt">
    2019 - {{date('Y')}} &copy; UBold theme by <a href="#" class="text-white-50">Coderthemes</a> 
</footer>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

</html>