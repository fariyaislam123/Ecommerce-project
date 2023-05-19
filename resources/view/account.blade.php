<!DOCTYPE html>
<html lang="en">

  <head>
  <link rel="stylesheet" href="/css/account.css">
  </head>


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

    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>