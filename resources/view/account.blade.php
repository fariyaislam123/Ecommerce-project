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
  <link rel="stylesheet" href="/css/account.css">
  </head>

<body>
<br>
<br>
   
    <div class="cont">
        <form class="form sign-in" method="GET" action="/users">
            @csrf
            <h2>Welcome</h2>
            <label>
                    <span>Name</span>
                    <input type="text" name="uname"/>
                </label>
            
            <label>
                <span>Password</span>
                <input type="password" name="pass"/>
            </label>
            <p class="forgot-pass">Forgot password?</p>
            <button type="submit" class="submit">Sign In</button>
         
        </form>
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                 
                    <h3>Don't have an account? Please Sign up!<h3>
                </div>
                <div class="img__text m--in">
                
                    <h3>If you already has an account, just sign in.<h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>

            <form  class="form sign-up" method="POST" action="/users">
                @csrf
                <h2>Create your Account</h2>
                <label>
                    <span>Name</span>
                    <input type="text" name="uname"/>
                </label>
                <label>
                <span>Email</span>
                <input type="email" name="email" />
            </label>
                
                <label>
                    <span>Mobile</span>
                    <input type="text" name="mobile"/>
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="pass" />
                </label>
                <button type="submit" class="submit">Sign Up</button>
                
            </form>
        </div>
    </div>


     <!-- ***** Footer Start ***** -->
     @include('layout.footer')
    

    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>
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