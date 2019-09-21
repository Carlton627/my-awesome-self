<?php include '../includes/project_template.php' ?>  
    
    <div id="project-stage" class="jumbotron jumbotron-fluid animated zoomIn">
        <div class="container">
            <h1 class="display-4">Emotia</h1>
            <p class="lead">Project for my final year of B.E.</p>
        </div>
    </div>
    
        <section id="project-desc">
            <div class="container mt-5 wow slideInUp">
                <h3>Emotia: A mental health assessment tool</h3><hr>
                <p>A 3 step diagnosis procedure that processes tone and face emotions along with 
                    a MCQ questionnaire. These 3 steps will generate data that will help detect level of depression.</p>
                
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <caption><h5>Emotia Web App Homepage</h5></caption>
                        <img class="img-style wow zoomIn" src="../assets/emotia_home.png" alt="emotia project image">
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
            <div class="container wow zoomIn">
                <div class="wow slideInLeft slow">
                    <h3>How it helped me?</h3><hr>
                    <p>Working on this project I had to learn a lot of new things like neural networks, Support Vector Machines (SVM) and training and testing these models and deploying them. The doors of machine learning opened for me while working on this project.  Machine Learning can provide optimal solutions to modern-day problems. 
                    On the other hand, my ability to work in a team and relate on an emotional level to my team-mates has increased dramatically.</p>
                </div>
            </div>
        </section>

        <section id="project-showcase">
            <div class="accordion" id="projectAccordion">
                <div class="card wow slideInUp fast">
                    <div class="card-header" id="headingOne">
                        <div class="row">
                            <div class="col-lg-8">
                                <button id="firstheading" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> 
                                    <h2 class="mb-0 text-secondary">The MCQ Test</h2>    
                                </button> 
                            </div>
                            <div class="col-lg-1 offset-lg-3 d-none d-lg-block">
                                <button id="firstarrow" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> 
                                    <span class="oi oi-chevron-top" title="read more" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#projectAccordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="../assets/emotia_mcq.png" alt="the mcq test webpage" class="img-style">
                                </div>
                                <div class="col-lg-6">
                                    <p>The PHQ-9 is one module of the larger Patient Health Questionnaire, an assessment that
                                        patients can complete to screen for mental health conditions. The PHQ-9 screens
                                        specifically for signs or symptoms of depression, and its nine short and simple questions
                                        are built on the criteria for depression that were identified in the Diagnostic and Statistical
                                        Manual of Mental Disorders, 4th edition.<br><br>
                                        The user can take his/her time in answering the test the more genuine the answers
                                        the better the diagnosis. The user must answer all the questions compulsorily, failing 
                                        which the user can not move to the further tests. After successfully submitting the MCQ test, a score 
                                        is given to the test which is used for processing at the final stage.</p>
                                </div>     
                            </div>    
                        </div>
                    </div>
                </div>
                <div class="card wow slideInUp">
                    <div class="card-header" id="headingTwo">
                        <div class="row">
                            <div class="col-lg-8">
                                <button id="secondheading" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> 
                                    <h2 class="mb-0 text-secondary">The Voice Test</h2>
                                </button> 
                            </div>
                            <div class="col-lg-1 offset-lg-3 d-none d-lg-block">
                                <button id="secondarrow" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> 
                                    <span class="oi oi-chevron-bottom" title="read more" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#projectAccordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="../assets/emotia_voice.png" alt="the voice test webpage" class="img-style">
                                </div>
                                <div class="col-lg-6">
                                    <p>The user has about 60 seconds to speak their minds out on why they decided to
                                    take this test. <b>It is compulsory to have a mic for this test.</b>
                                    After the 60 seconds are complete, the recording is stopped and the user can proceed to the 
                                    next test.<br><br>
                                    On the background the <a href="https://developers.vokaturi.com/getting-started/overview" target="black">Vokaturi API</a> is processing the recording file and gives out five values
                                    corresponding to five emotions (Neutral, Happy, Sad, Anger, Fear). These values are stored in a data list 
                                    for final processing.<br><br>
                                    This test has to be completed to move on to the next one</p>
                                </div>                             
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card wow slideInUp fast">
                    <div class="card-header" id="headingThree">
                        <div class="row">
                            <div class="col-lg-8">
                                <button id="thirdheading" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree"> 
                                    <h2 class="mb-0 text-secondary">The Face Test</h2>
                                </button> 
                            </div>
                            <div class="col-lg-1 offset-lg-3 d-none d-lg-block">
                                <button id="thirdarrow" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree"> 
                                    <span class="oi oi-chevron-bottom" title="read more" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#projectAccordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="../assets/emotia_face.png" alt="the face test webpage" class="img-style">
                                </div>
                                <div class="col-lg-6">
                                    <p>The user has to play the video that will be displayed on the page by clicking on the
                                    record button. Once it is clicked a count down starts indicating the user about the time
                                    left for the completion of the face test. The users facial expressions throughout the video will be captured by the
                                    webcam. <b>Again it is compulsory to have a webcam for this test.</b> The user can proceed
                                    to recieve the final diagnosis only after completing this test.<br><br>
                                    The webcam takes images of the user at a constant frame rate. These images are sent to the face 
                                    emotion detection model made using a Convolutional Neural Network algorithm. The model gives out
                                    seven values corresponding to seven emotions (Neutral, Happy, Sad, Fear, Anger, Surprise, Disgust).
                                    The values are stored for the final processing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card wow slideInUp faster">
                    <div class="card-header" id="headingFour">
                        <div class="row">
                            <div class="col-lg-8">
                                <button id="fourthheading" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour"> 
                                    <h2 class="mb-0 text-secondary">The Diagnosis</h2>
                                </button> 
                            </div>
                            <div class="col-lg-1 offset-lg-3 d-none d-lg-block">
                                <button id="fourtharrow" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour"> 
                                    <span class="oi oi-chevron-bottom" title="read more" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#projectAccordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="../assets/emotia_res.png" alt="the diagnosis webpage" class="img-style">
                                </div>
                                <div class="col-lg-6">
                                    <p>All the scores are sent to a Support Vector Machine model for classification 
                                    among 5 levels of depression
                                        <ol>
                                            <li>No depression</li>
                                            <li>Minimal depression</li>
                                            <li>Mild depression</li>
                                            <li>Moderately Severe depression</li>
                                            <li>Severe depression</li>
                                        </ol>
                                    <br>
                                    The diagnosis page shows which level of depression has been found along with a 
                                    comment on what to do next based on the level of depression found.
                                    <br><br>
                                    The user can get a printable copy of the diagnosis report which has all the test scores (MCQ, Voice, Face) 
                                    along with the final diagnosis.
                                    </p>
                                </div>                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team members section -->

        <!-- Footer Section  -->
        <script src="../js/accordion.js" type="text/javascript"></script>
        <?php include '../includes/project_footer.php' ?>
    </body>
</html>