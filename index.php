<?php 
    include 'includes/header.html';
?>
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
                <li class="nav-item">
                    <a class="nav-link" href="">Home</a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="#projects">Projects</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="#interests">Interests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
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
        </div>
    </section>
    
    <section id="projects">
        <div class="container">
            <h3 class="display-3 text-center">Projects</h3>
            <hr>
            <div class="card-deck">
                <div class="row">
                    <div class="card">
                        <img src="assets/alexa_bot.png" class="card-img-top" alt="alexa bot thumbnail">
                        <div class="card-body">
                            <h5 class="card-title">Alexa Powered Robot</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="projects/1.php" class="btn btn-lg btn-outline-success">Check out</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">March 2018</small>
                        </div>
                    </div>
                    <div class="card">
                        <img src="assets/emotia_card_img.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Emotia - Mental Health Assessment Tool</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="projects/2.php" class="btn btn-lg btn-outline-success">Check out</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Feb 2019 to May 2019</small>
                        </div>
                    </div>
               
                    <div class="card">
                        <img src="assets/led_cube_card.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">8&times;8&times;8 LED Cube</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="projects/3.php" class="btn btn-lg btn-outline-success">Check out</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">August 2018</small>
                        </div>
                    </div>
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
                    <img src="assets/pewdiepie.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">PewDiePie</h5>
                        <p class="card-text">My favourite entertainment channel on YouTube</p>
                        <p class="card-text"><small class="text-muted">Well this channel was the one that got me hooked on to YouTube</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/sentdex.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sentdex</h5>
                        <p class="card-text">My favourite programming channel on YouTube</p>
                        <p class="card-text"><small class="text-muted">His programming tutorials feel like you are coding with a friend on a video call</small></p>
                    </div>
                </div>
                <div class="card bg-dark ">
                    <img src="assets/python_back.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title mt-2 pt-3">Favourite Programming language: Python</h5>
                        <ul class="text-white ml-n3 mt-2">
                            <p class="card-text">Reasons:</p>
                            <li>Multipurpose</li>
                            <li>Easy to visualize logic</li>
                            <li>Huge collection of libraries</li>
                        </ul>
                    </div>
                </div>
                <div class="card bg-dark text-white">
                    <img src="assets/elon_musk.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title mt-5 pt-4">Elon Musk</h5>
                        <p class="card-text">The best engineer around</p>
                        <p class="card-text">The man who has inspired me to become a better problem solver</p>
                    </div>
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
                    <p class="lead">Quid fidelissimae singulis noster litteris, consequat fugiat o voluptate 
                        coniunctione si eu si nisi duis multos, ut esse ipsum esse ingeniis, arbitror 
                        sed sint incurreret, iis illum singulis transferrem, eu si multos amet quem ita 
                        appellat summis fore probant illum. Sed aliqua voluptate de eiusmod ita minim 
                        possumus, lorem admodum aut arbitror, fabulas enim iis incurreret voluptatibus, 
                        est cernantur se nescius a possumus labore excepteur o te culpa se aute et 
                        laboris in dolore. Voluptate illustriora ut tempor de quem arbitror relinqueret, 
                        nescius se nisi ad nostrud quae multos nam elit, eu quae aliqua a incididunt, ab 
                        ad despicationes, offendit an irure incurreret, nam culpa expetendis. A o quae 
                        nescius, expetendis de velit laborum ex quae ad ubi minim laboris, fabulas sint 
                        de quamquam fidelissimae. Te irure ipsum de pariatur. An excepteur domesticarum. 
                        Ipsum despicationes cupidatat quorum appellat.</p>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <img class="img-style" src="assets/about_carl.jpg" alt="">
                    <hr>
                    <a href="assets/my_resume.pdf" class="btn btn-lg btn-outline-success" target="_blank">View Resume</a>
                    <h5 class="mt-4 mb-3">Connect with me</h5>
                    <a href="" class="fa fa-facebook"></a>
                    <a href="" class="fa fa-linkedin"></a>
                    <a href="" class="fa fa-twitter"></a>
                    <a href="" class="fa fa-instagram"></a>
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
                        <img id="news-thumbnail-0" src="" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><a id="news-link-0" href="" target="_blank"></a></h5>
                            <p id="news-src-0"></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img id="news-thumbnail-1" src="" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><a id="news-link-1" href="" target="_blank"></a></h5>
                            <p id="news-src-1"></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img id="news-thumbnail-2" src="" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><a id="news-link-2" href="" target="_blank"></a></h5>
                            <p id="news-src-2"></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img id="news-thumbnail-3" src="" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><a id="news-link-3" href="" target="_blank"></a></h5>
                            <p id="news-src-3"></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img id="news-thumbnail-4" src="" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
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