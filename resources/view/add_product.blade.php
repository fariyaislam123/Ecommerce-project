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
    <link rel="stylesheet" href="/css/addProduct.css">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    
    <body>
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
 
  {{session()->get('success')}} 
    </div>
    @endif
    
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
      
        
    <!-- ***** Header Area End ***** -->
    <br>
<br>
   
    <div class="cont">
       
        <form class="form sign-in" method="POST" action="/products" enctype="multipart/form-data">


            @csrf
            <h2>Add Products</h2>
            <label>
                    <span>Product Name</span>
                    <input type="text" name="name"/>
                </label>
            
            <label>
                <span>Price</span>
                <input type="text" name="price"/>
            </label>
            <label>
                <span>Amount</span>
                <input type="text" name="amount"/>
            </label>
            <label>
               
            <input type="file"  name="images[]" multiple>
            </label>
        
           
            <button type="submit" class="submit">Add</button>
         
        </form>
       <!-- <div class="sub-cont">
            <div class="img"> </div> -->
            

            
        </div>
    </div>

    <div class="col-xs-8">
                <div class="row">
                    @foreach($returnProducts as $product)
                    <div class="col-xs-4" style="padding: 50px">
                        <img src="{{asset($product['image'])}}" height="200" width="150"  >
                        <h4>{{$product['name']}} </h4>
                        <div> 
                        <i class= "fa fa-star"></i>
                        <i class= "fa fa-star"></i>
                        <i class= "fa fa-star"></i>
                        <i class= "fa fa-star"></i>
                        <i class= "fa fa-star-o"></i>

                        </div>
                        <p>{{$product['price']}} BDT</p>
                </div>
                @endforeach
            </div>
        </div>
 
    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>
    

    
    
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