<?php include 'includes/header.html' ?>
</head>
<body>
    <!-- Navigation Bar   -->
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">Hidden brand</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-main">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="#projects">Projects</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="#">Ideas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Resume</a>
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
                    <p class="mb-4">Hi, I am Carlton Rodrigues<br>A bachelor of engineering in Computer Science</p>
                    <a href="#about" class="btn btn-outline-success btn-lg">About me</a>
                    <a href="" class="btn btn-outline-success btn-lg">View Resume</a>
                </div>
                <div id="stage-img" class="offset-lg-1 col-lg-5 d-none d-lg-block">
                    <img src="assets/cover_pic-removebg-preview.png" alt="">
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
                        <img src="" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Alexa Powered Robot</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="projects/1.php" class="btn btn-lg btn-outline-success">Check out</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <img src="" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Emotia - Mental Health Assessment Tool</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="projects/2.php" class="btn btn-lg btn-outline-success">Check out</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="card">
                        <img src="" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blog Website - Django Framework</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="projects/3.php" class="btn btn-lg btn-outline-success">Check out</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                    <div class="card">
                        <img src="" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">8&times;8&times;8 LED Cube</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="projects/4.php" class="btn btn-lg btn-outline-success">Check out</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   
    
    <section id="ideas">
        <div class="container">
            <h3 class="display-3 text-center">Interests</h3>
            <hr>
            <div class="card-columns">
                <div class="card">
                    <img src="assets/working.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title that wraps to a new line</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card p-3">
                    <blockquote class="blockquote mb-0 card-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                        </p>
                        <footer class="blockquote-footer">
                            <small class="text-muted">
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>
                <div class="card">
                    <img src="assets/banjo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card bg-primary text-white text-center p-3">
                    <blockquote class="blockquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                        <footer class="blockquote-footer text-white">
                            <small>
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/concert.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card p-3 text-right">
                    <blockquote class="blockquote mb-0">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted">
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- About Section   -->
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
                    <a href="timeline.html" class="btn btn-lg btn-outline-success">View Timeline</a>
                    <h5 class="mt-4 mb-3">Connect with me</h5>
                    <a href="" class="fa fa-facebook"></a>
                    <a href="" class="fa fa-linkedin"></a>
                    <a href="" class="fa fa-twitter"></a>
                    <a href="" class="fa fa-instagram"></a>
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
    <?php include 'includes/footer.html' ?>

    <script src="js/news.js" type="text/javascript"></script>
</body>
</html>