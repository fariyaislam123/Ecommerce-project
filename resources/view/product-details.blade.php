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
        
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Product Area Starts ***** -->
    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <div class="left-images">
                    @if(isset($images[0]))
                    <img src="{{asset($images[0])}}" alt="" >
                    @endif
                    @if(isset($images[1]))
                    <img src="{{asset($images[1])}}" alt="" >
                    @endif
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                <span>{{$product->category->category_name}}</span>
                    <h4>{{$product->name}}</h4>
                    <span class="price">{{$product->price}} BDT</span>
                    <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                    </ul>
                    <span>{{$product->details}}</span>
                    <div class="quote">
                        <i class="fa fa-quote-left"></i><p></p>
                    </div>
                    <div class="quantity-content">
                        <div class="left-content">
                            <h6>No. of Orders</h6>
                        </div>
                        <div class="right-content">
                            <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                            </div>
                        </div>
                    </div>
                    <div class="total">
                        <h4></h4>
                        <div class="main-border-button"><a href="#">Add To Cart</a></div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="container">
        <div class="col-xs-4">
            
            <a href="/products"><p>View More </p> </a>
            
            </div>
         </div>


        <div class="container">
        <div class="row">
                    @foreach( $related_products as $rel_product)
                    <div class="col-xs-4" style="padding: 50px">
                     <a href="{{ url('/products/'. $rel_product->id) }} " >   <img src="{{asset(explode('|',$rel_product->image) [0])}}" height="250" width="250"  > </a>
                        <h4>{{$rel_product->name}} </h4>
                        <div> 
                        <i class= "fa fa-star"></i>
                        <i class= "fa fa-star"></i>
                        <i class= "fa fa-star"></i>
                        <i class= "fa fa-star"></i>
                        <i class= "fa fa-star-o"></i>

                        </div>
                        <p>{{$rel_product->price}} BDT</p>
                </div>
                @endforeach
            </div>
    </section>
    <!-- ***** Product Area Ends ***** -->
    
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
    <script src="/js/quantity.js"></script>
    
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
