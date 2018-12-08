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
<div class="content-wrapper">
    


<div class="home container-fluid">
        <div class="row home-ctas">
            <div class="container">
                <h1>Take a Free Math IQ Test!</h1>
                <h3>Is your IQ score high enough to be considered a genius? Take this free intelligence test and see your score instantly!</h3>
                <div class="quiz-cta-container">
                    <div class="quiz-cta">
    <div class="quiz-cta__icon">
        <i class="fa  fa-pencil " aria-hidden="true"></i>
    </div>
    <div class="quiz-cta__body">
                    <p class="quiz-cta__title">Math IQ Test<br><span class="subtitle">50 questions in 12:00 minutes</span></p>
                <a href="">Start</a>
    </div>
</div>
                    <div class="quiz-cta">
    <div class="quiz-cta__icon">
        <i class="fa  fa-bolt " aria-hidden="true"></i>
    </div>
    <div class="quiz-cta__body">
                    <p class="quiz-cta__title">Quick Math IQ Test<br><span class="subtitle">25 questions in 06:00 minutes</span></p>
                <a href="#">Start</a>
    </div>
</div>                </div>
            </div>
        </div>


    </div>





</div>

<footer class="footer container-fluid">

</footer>

<script src="js/app.js"></script>


</body>
</html>
