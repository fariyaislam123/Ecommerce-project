<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>The Dressy Dale</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/css/font-awesome.css">

    <link rel="stylesheet" href="/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="/css/owl-carousel.css">

    <link rel="stylesheet" href="/css/lightbox.css">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    @include('layout.header')
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Check Our Products</h2>
                        <span>Style up without the finest clothing in town</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Latest Products</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
        <div class="row">
                    @foreach($products as $product)
                    <div class="col-xs-4" style="padding: 50px">
                     <a href="{{ url('/products/'. $product->id) }} " >   <img src="{{asset(explode('|',$product->image) [0])}}" height="250" width="250"  > </a>
                        <h4>{{$product->name}} </h4>
                        <div> 
                        <i class= "fa fa-star"></i>
                        <i class= "fa fa-star"></i>
                        <i class= "fa fa-star"></i>
                        <i class= "fa fa-star"></i>
                        <i class= "fa fa-star-o"></i>

                        </div>
                        <p>{{$product->price}} BDT</p>
                </div>
                @endforeach
            </div>
               
                
               
            <!--  -->
            <div class="col-lg-12">
                    <div >
                        {{$products->links('vendor.pagination.default')}}
                    </div>
                </div>


          
    </section>
    <!-- ***** Products Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    @include('layout.footer')

    <!-- jQuery -->
    <script src="/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="/js/popper.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="/js/owl-carousel.js"></script>
    <script src="/js/accordions.js"></script>
    <script src="/js/datepicker.js"></script>
    <script src="/js/scrollreveal.min.js"></script>
    <script src="/js/waypoints.min.js"></script>
    <script src="/js/jquery.counterup.min.js"></script>
    <script src="/js/imgfix.min.js"></script> 
    <script src="/js/slick.js"></script> 
    <script src="/js/lightbox.js"></script> 
    <script src="/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>

</html>
