<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
     <title>IQ Games</title>
    
   <link rel="stylesheet" type="text/css" href="css/app.css"/>

<!-- place before </head> -->

</head>
<body class="front">

<header class="header">
    <div class="container">
        <div class="row">
            <a href="index.php" class="home__link"><img src="images/blue-brain-96.png" alt="IQ Games"/>IQ Games</a>
            <div class="mobile-trigger">
                <span class="line first"></span>
                <span class="line middle"></span>
                <span class="line last"></span>
            </div>
            <nav>
                <ul class="menu">
                        <li class="menu-item menu-item--22">
                            <a href="iq-tests.html">
                                Education
                            </a>
                                                            <i class="fa fa-chevron-down"></i>
                           <ul class="sub-nav">
                                                                    <li class="menu-item menu-item--23"><a href="#">Maths Question</a></li>
                                                                    <li class="menu-item menu-item--24"><a href="#"></a>ETC</li>
                                                                    <li class="menu-item menu-item--25"><a href="#"></a>ETC</li>
                                                                    <li class="menu-item menu-item--26"><a href="#"></a>ETC</li>
                                                                    <li class="menu-item menu-item--27"><a href="#"></a>ETC</li>
                             </ul>
                                                    </li>
                                   <li class="menu-item menu-item--29">
                            <a href="resources.html">
                                Entertainment
                            </a>
                                                            <i class="fa fa-chevron-down"></i>
                                                                                        <ul class="sub-nav">
                                                                    <li class="menu-item menu-item--6"><a href="">Puzzles</a></li>
                                                                    <li class="menu-item menu-item--12"><a href="">Games</a></li>
                                                                    <li class="menu-item menu-item--2"><a href="">Cards</a></li>
                                                                    <li class="menu-item menu-item--3"><a href="">ETC</a></li>
                                                                    <li class="menu-item menu-item--4"><a href="">Etc</a></li>
                                                                    <li class="menu-item menu-item--16"><a href="">ETC</a></li>
                                                                    <li class="menu-item menu-item--11"><a href="">ETC</a></li>
                                                                </ul>
                                                    </li>
                                                                    <li class="menu-item menu-item--30">
                            <a href="{% url 'home' %}">
                                Take the Genius Math Test
                            </a>
                                                                                </li>
                                                                    <li class="menu-item menu-item--21">
                            <a href="login.php">
                                Account
                            </a>
                                                                                </li>
                                    </ul>
            </nav>
        </div>
    </div>
</header>
<div class="content-wrapper" >
    

<div class="container" >
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" method="post" action="dosignin.php">
               <input type="hidden" name="csrf-token" value="adad">
              <div class="form-label-group">
                       <label for="inputEmail">Email address</label>
                <input type="email"  class="form-control" placeholder="Email address" required autofocus>

              </div>

              <div class="form-label-group" style="padding-bottom: 10px;">
                    <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>

              </div>


              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                  <label class="custom-control-label" for="customCheck1">Want to Create Account ?
                 <a href="signup.php">Sign Up</a>
              <hr class="my-4">



                 </label>

              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>




</div>



<script src="js/app.js"></script>


</body>
</html>
