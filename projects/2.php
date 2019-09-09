<?php include '../includes/project_template.php' ?>  
    
    <div id="project-stage" class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Emotia</h1>
            <p class="lead">Project for my final year of B.E.</p>
        </div>
    </div>
    
        <section id="project-desc">
            <div class="container mt-5">
                <h3>Emotia: A mental health assessment tool</h3><hr>
                <p>A 3 step diagnosis procedure that processes tone and face emotions along with 
                    a MCQ questionnaire. These 3 steps will generate data that will help detect level of depression.</p>
                
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <caption><h5>Emotia Web App Homepage</h5></caption>
                        <img class="img-style" src="../assets/emotia_home.png" alt="emotia project image">
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <!-- TODO: fix alignment of abstract on small devices -->
                        <h6>ABSTRACT</h6>
                        <p>Mental health plays an important role in having a good and productive day, but it is often ignored due to many reasons one of them being the cost of diagnosis.
                            People end up spending tons of money for diagnosis through a psychiatrist, most of the time there is a high probability of having no disorder at all, just a minor episode of depression, this leads to unnecessary heavy expenditure.<br>
                            We are implementing a cost-effective system, which does the initial diagnosis using Voice and Facial Expression Analysis. We will perform sentiment and tone analysis on the data in real-time to gain insights into the mental state of the user. The analysis will be used to give a detailed 
                            report on their mental health and inform the user if there would be a need to visit the psychiatrist.</p>
                    </div>
                </div>
               
                <div class="row mt-5">
                    <div class="col-lg-5">
                        <h6>Technologies used</h6><hr>
                        <ul>
                            <li>HTML5</li>
                            <li>CSS3</li>
                            <li>Javascript</li>
                            <li>Python for Machine Learning</li>
                            <li>Django framework</li>
                        </ul>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <h6>Skills strengthened</h6><hr>
                        <ul>
                            <li>Neural Networks</li>
                            <li>Python Programming</li>
                            <li>Git Bash &amp; GitHub</li>
                            <li>Team work &amp; Communication</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="how-it-helped">
            <div class="container">
                <div class="">
                    <h3>How it helped me?</h3><hr>
                    <p>Working on this project I had to learn a lot of new things like neural networks, Support Vector Machines (SVM) and training and testing these models and deploying them. The doors of machine learning opened for me while working on this project.  Machine Learning can provide optimal solutions to modern-day problems. 
                    On the other hand, my ability to work in a team and relate on an emotional level to my team-mates has increased dramatically.</p>
                </div>
            </div>
        </section>

        <section id="project-showcase">
            <!-- TODO: Find some sources to show the project if possible -->
            <div class="accordion" id="projectAccordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <div class="row">
                            <div class="col-lg-8">
                                <button id="firstheading" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> 
                                    <h2 class="mb-0 text-secondary">The MCQ Test</h2>    
                                </button> 
                            </div>
                            <div class="col-lg-1 offset-lg-3 d-none d-lg-block">
                                <button id="firstarrow" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> 
                                    <span class="oi oi-chevron-bottom" title="read more" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#projectAccordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit impedit corrupti, in, totam distinctio dolorem odio, unde asperiores officiis harum vero! Quidem asperiores vel accusantium nemo animi assumenda quis autem consectetur quia, officiis, voluptate ea facilis nesciunt, unde dolores quos! Eius nisi molestiae dolor sequi modi ipsum vel nulla quas?</p>
                                </div>
                                <div class="col-lg-5 offset-lg-1">
                                    <img src="../assets/emotia_mcq.png" alt="the mcq test webpage" class="img-style">
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <div class="row">
                            <div class="col-lg-8">
                                <button id="secondheading" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> 
                                    <h2 class="mb-0 text-secondary">The Voice Test</h2>
                                </button> 
                            </div>
                            <div class="col-lg-1 offset-lg-3 d-none d-lg-block">
                                <button id="secondarrow" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> 
                                    <span class="oi oi-chevron-top" title="read more" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#projectAccordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit impedit corrupti, in, totam distinctio dolorem odio, unde asperiores officiis harum vero! Quidem asperiores vel accusantium nemo animi assumenda quis autem consectetur quia, officiis, voluptate ea facilis nesciunt, unde dolores quos! Eius nisi molestiae dolor sequi modi ipsum vel nulla quas?</p>
                                </div>
                                <div class="col-lg-5 offset-lg-1">
                                    <img src="../assets/emotia_voice.png" alt="the mcq test webpage" class="img-style">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <div class="row">
                            <div class="col-lg-8">
                                <button id="thirdheading" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree"> 
                                    <h2 class="mb-0 text-secondary">The Face Test</h2>
                                </button> 
                            </div>
                            <div class="col-lg-1 offset-lg-3 d-none d-lg-block">
                                <button id="thirdarrow" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree"> 
                                    <span class="oi oi-chevron-top" title="read more" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#projectAccordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit impedit corrupti, in, totam distinctio dolorem odio, unde asperiores officiis harum vero! Quidem asperiores vel accusantium nemo animi assumenda quis autem consectetur quia, officiis, voluptate ea facilis nesciunt, unde dolores quos! Eius nisi molestiae dolor sequi modi ipsum vel nulla quas?</p>
                                </div>
                                <div class="col-lg-5 offset-lg-1">
                                    <img src="../assets/emotia_face.png" alt="the mcq test webpage" class="img-style">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="team-members">
            <div class="container mt-5 mb-5">
                <h3>The Team</h3><hr>
                <div class="card-deck">
                    <div class="row">
                        <div class="card">
                            <img src="../assets/abhi_img.jpeg" class="card-img-top" alt="Abhinandan Ghosh Picture">
                            <div class="card-body">
                                <h5 class="card-title">Abhinandan Ghosh</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="../assets/alston_img.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Alston D'souza</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                   
                        <div class="card">
                            <img src="../assets/calvin_img.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Calvin Clint D'souza</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="../assets/carlton_img.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Carlton Rodrigues</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Section  -->
        <script src="../js/accordion.js" type="text/javascript"></script>
        <?php include '../includes/project_footer.php' ?>
    </body>
</html>