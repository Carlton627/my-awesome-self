<?php 
    include 'includes/header.html';
?>
    <title>Carlton Rodrigues</title>
</head>
<body>
    <!-- Navigation Bar   -->
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark">
        <a class="navbar-brand" href="">Carlton</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-main">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item pr-2"> 
                    <a class="nav-link" href="#projects">Projects</a>
                </li> 
                <li class="nav-item pr-2">
                    <a class="nav-link" href="#interests">Interests</a>
                </li>
                <li class="nav-item pr-2">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item pr-2">
                    <a class="nav-link" href="#news">Space News</a>
                </li>
                <li class="nav-item pr-2">
                    <a class="nav-link" href="#main-footer">Feedback</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="assets/my_resume.pdf" target="_blank">Resume</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <!-- Beginning view   -->
    <section id="stage">
        <div class="container">
            <div class="row">
                <div id="stage-caption" class="col-lg-6">
                    <h1 class="display-3 mb-4">Some crazy guy, doing far more crazy things</h1> 
                    <p class="mb-4">Hi, I am Carlton Rodrigues<br>A bachelor of engineering in Computer Science<br>Currently based out of Mumbai city</p>
                    <a href="#about" class="btn btn-success btn-lg">About me</a>
                    <a href="assets/my_resume.pdf" target="_blank" class="btn btn-success btn-lg">View Resume</a>
                </div>
                <div id="stage-img" class="offset-lg-1 col-lg-5 d-none d-lg-block">
                    <img src="assets/cover_pic.png" alt="That's Carlton">
                </div>
            </div>
            <!-- Fixed Feedback Button -->
            <a class="fixed-button d-none d-lg-block" href="#main-footer">
                <span class="oi oi-chevron-bottom" title="read more" aria-hidden="true" hidden></span>
                <b id="textToggle">Feedback</b>
                <span class="oi oi-chevron-bottom" title="read more" aria-hidden="true" hidden></span>      
            </a>
        </div>
        <script src="js/fixedbutton.js" type="text/javascript"></script>
    </section>

    <section id="projects">
        <div class="container">
            <h3 class="display-3 text-center">Projects</h3>
            <hr>
            <div class="card-deck">
                <div class="row">
                    <div class="card">
                        <img src="assets/alexa_bot.png" height="350px" class="card-img-top" alt="alexa bot thumbnail">
                        <div class="card-body">
                            <h5 class="card-title">Alexa Powered Robot</h5>
                            <p class="card-text">A robot that listens to you</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">March 2018</small>
                            <a href="projects/1.php">Check out</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="assets/emotia_card_img.jpg" height="350px" class="card-img-top" alt="Emotia Thumbnail">
                        <div class="card-body">
                            <h5 class="card-title">Emotia - Mental Health Assessment Tool</h5>
                            <p class="card-text">Developing a virtual psychiatrist using Machine Learning</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Feb 2019 to May 2019</small>
                            <a href="projects/2.php">Check out</a>
                        </div>
                    </div>
               
                    <div class="card">
                        <img src="assets/led_cube_card.jpg" height="350px" class="card-img-top" alt="LED cube thumbnail">
                        <div class="card-body">
                            <h5 class="card-title">8&times;8&times;8 LED Cube</h5>
                            <p class="card-text">Turning 512 LED's into a 3D display</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">August 2018</small>
                            <a href="projects/3.php">Check out</a>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="card mb-3 mt-5 mr-n3 ml-n3">
                <div class="card-header text-center">
                    <h5>Mini Projects</h5>   
                </div>
                <div class="bd-example">
                    <div id="projectCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#projectCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#projectCarousel" data-slide-to="1"></li>
                            <li data-target="#projectCarousel" data-slide-to="2"></li>
                            <li data-target="#projectCarousel" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/django_card_2.jpg" height="600px" class="d-block img-fluid w-100" alt="Django Blog">
                                <div class="carousel-caption">
                                    <h5>Blog Website</h5>
                                    <p>Using Python 3 and Django Framework</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/freeglut.jpg" height="600px" class="d-block img-fluid w-100" alt="freeglut">
                                <div class="carousel-caption">
                                    <h5>Computer Graphics Project</h5>
                                    <p>Using Freeglut and C++ to create an animated scene</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/startup_img.png" height="600px" class="d-block img-fluid w-100" alt="start up website">
                                <div class="carousel-caption">
                                    <h5>Start-up Landing Page</h5>
                                    <p>Web programming mini project built on Wampserver</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/oracle11g.jpg" height="600px" class="d-block img-fluid w-100" alt="Database Web Application">
                                <div class="carousel-caption">
                                    <h5>Content Management System</h5>
                                    <p>Using JSP and Oracle 11g</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#projectCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#projectCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="card-footer">
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
    </section>   
    
    <section id="interests">
        <div class="container">
            <h3 class="display-3 text-center">Interests</h3>
            <p class="lead text-center">Something that is not on my resume</p>
            <hr>
            <div class="card-columns">
                <div class="card">
                    <img src="assets/pewdiepie.png" class="card-img-top" alt="PewDiePie">
                    <div class="card-body">
                        <h5 class="card-title">PewDiePie</h5>
                        <p class="card-text">My favourite entertainment channel on YouTube</p>
                        <p class="card-text"><small class="text-muted">Well this channel was the one that got me hooked on to YouTube</small></p>
                    </div>
                </div>
                <div class="card bg-dark text-white">
                    <img src="assets/guitar_interest.jpg" class="card-img" alt="Guitar">
                    <div class="card-img-overlay">
                        <h5 class="card-title mt-5">Guitar</h5>
                        <p class="card-text">My favourite hobby</p>
                        <p class="card-text">I have played guitar for choirs and bands</p>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/david_gilmour.jpg" class="card-img-top" alt="David Gilmour">
                    <div class="card-body">
                        <h5 class="card-title">David Gimour</h5>
                        <p class="card-text">My favourite guitarist</p>
                        <p class="card-text"><small class="text-muted">His guitar riffs are a goosebumps generator</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/sentdex.png" class="card-img-top" alt="Sentdex">
                    <div class="card-body">
                        <h5 class="card-title">Sentdex</h5>
                        <p class="card-text">My favourite programming channel on YouTube. Would recommend watching his Python tutorials.</p>
                        <p class="card-text"><small class="text-muted">His programming tutorials feel like you are coding with a friend on a video call</small></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">More Recommendations</h5>
                        <p class="card-text">Some more YouTube Channels for programming</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">thenewboston</li>
                        <li class="list-group-item">Derek Banas</li>
                        <li class="list-group-item">Hitesh Choudhary</li>
                    </ul>
                </div>
                <div class="card bg-dark ">
                    <img src="assets/python_back.jpg" class="card-img" alt="Python">
                    <div class="card-img-overlay">
                        <h5 class="card-title mt-2 pt-3">Favourite Programming language: Python</h5>
                        <ul class="text-white ml-n3 mt-4">
                            <p class="card-text">Reasons:</p>
                            <li>Multipurpose</li>
                            <li>Easy to visualize logic</li>
                            <li>Huge collection of libraries</li>
                        </ul>
                    </div>
                </div>
                <div class="card bg-dark text-white">
                    <img src="assets/elon_musk.jpg" class="card-img" alt="Elon Musk">
                    <div class="card-img-overlay">
                        <h5 class="card-title mt-5 pt-4">Elon Musk</h5>
                        <p class="card-text">The best engineer around</p>
                        <p class="card-text">The man who has inspired me to become a better problem solver</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Books on people</h5>
                        <p class="card-text">Collection of books I have read on amazing people.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Elon Musk: Tesla, SpaceX, and the Quest for a Fantastic Future <small> - Ashlee Vance</small>
                        </li>
                        <li class="list-group-item">Wings of fire <small>- A.P.J. Abdul Kalam</small></li>
                    </ul>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Migrating to Mars</h5>
                        <p class="card-text">I believe firmly that humans need to be a multiplanetary species</p>
                        <p class="card-text"><small class="text-muted">I would love to contribute my skills in that direction</small></p>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">The mezmerizing universe</h5>
                        <p class="card-text">I love reading and watching videos on different theories of the universe</p>
                        <p class="card-text"><small class="text-muted">Especially the ones on <b>black holes</b></small></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Space News</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Check out what's new in the world of space exploration today</p>
                        <a href="#news" class="btn btn-primary">I want to see</a>
                    </div>
                    <div class="card-footer">
                        <p class="card-text">
                            <small class="text-muted">Will be making more improvements to it</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- About Section   -->
    <script src="js/copytoclip.js" type="text/javascript"></script>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h6>This guy</h6>
                    <h2>Who am I?</h2>
                    <p>Hi, I am Carlton Rodrigues a Computer Science Engineer. I obtained my bachelor's degree 
                        in Computer Science in St. Joseph Engineering College which is affiliated by the Visveswaraya 
                        Technological University.<br><br>
                        I still remember when my parents brought home a computer system I was fascinated by it. 
                        I remember being glued to the computer for hours altogether. I loved playing video games 
                        and browsing the internet. I always wondered how was a computer even possible and this started 
                        my craze to know more about Computers and what keeps it running. Hence, my journey with 
                        computers had begun.<br><br>
                        Now that I have a Degree in Computer Science, I want to use my skills and knowledge towards 
                        the good of human life and the earth. Sustainable development is the way to go, I believe that 
                        with enough research in this direction we can find out a way to get things done fast but in a 
                        sustainable way.<br><br>
                        I love the art of problem-solving and work every day to improve on this skill. Problem-solving 
                        requires you to think from a different perspective in other words "thinking out of the box". 
                        I believe that I can come up with unique solutions to existing and new problems. 
                        This belief system helps me to improve my self incrementally every day.
                    </p>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <img class="img-style" src="assets/about_carl.jpg" alt="">
                    <hr>
                    <a href="assets/my_resume.pdf" class="btn btn-lg btn-outline-success" target="_blank">View Resume</a>
                    <h5 class="mt-4 mb-2">Connect with me</h5>
                    <a href="https://www.facebook.com/carlos.rodrigues.967422" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://linkedin.com/in/carlton-rodrigues" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://twitter.com/CarltonRodz?s=09" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://github.com/Carlton627" target="_blank">
                        <i class="fab fa-github-alt"></i>
                    </a>
                    <h5 class="mt-3">Or send me an email:</h5>
                    <div class="input-group">
                        <input id="myEmail" type="text" class="form-control" value="carlton.anthony.rodrigues@gmail.com" disabled>
                        <div id="tooltip" class="input-group-append">
                            <button class="btn btn-success" onclick="copy()" onmouseout="out()" type="button">
                                <span class="tooltiptext" id="myTooltip">Copy</span>
                                Copy
                            </button> 
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section id="news">
        <div class=".container">
            <h3>Space News</h3>
            <div id="newsCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#newsCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#newsCarousel" data-slide-to="1"></li>
                    <li data-target="#newsCarousel" data-slide-to="2"></li>
                    <li data-target="#newsCarousel" data-slide-to="3"></li>
                    <li data-target="#newsCarousel" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img id="news-thumbnail-0" src="" class="d-block img-fluid w-100" height="750px" alt="space news image">
                        <div class="carousel-caption">
                            <h5><a id="news-link-0" href="" target="_blank"></a></h5>
                            <p id="news-src-0"></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img id="news-thumbnail-1" src="" class="d-block img-fluid w-100" height="750px" alt="space news image">
                        <div class="carousel-caption">
                            <h5><a id="news-link-1" href="" target="_blank"></a></h5>
                            <p id="news-src-1"></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img id="news-thumbnail-2" src="" class="d-block img-fluid w-100" height="750px" alt="space news image">
                        <div class="carousel-caption">
                            <h5><a id="news-link-2" href="" target="_blank"></a></h5>
                            <p id="news-src-2"></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img id="news-thumbnail-3" src="" class="d-block img-fluid w-100" height="750px" alt="space news image">
                        <div class="carousel-caption">
                            <h5><a id="news-link-3" href="" target="_blank"></a></h5>
                            <p id="news-src-3"></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img id="news-thumbnail-4" src="" class="d-block img-fluid w-100" height="750px" alt="space news image">
                        <div class="carousel-caption">
                            <h5><a id="news-link-4" href="" target="_blank"></a></h5>
                            <p id="news-src-4"></p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#newsCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#newsCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="attribution">
                <p class="lead">powered by <cite><a href="https://newsapi.org/" target="_blank">News API</a></p></cite>
            </div>
        </div>
    </section>
    
    <!-- Footer Section  -->
    <?php include 'includes/footer.php' ?>
</body>
</html>