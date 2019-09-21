<?php include '../includes/project_template.php' ?>    
    
    <div id="project-stage" class="jumbotron jumbotron-fluid animated zoomIn">
        <div class="container">
            <h1 class="display-4">Alexa Powered Robot</h1>
            <p class="lead">A mini robotics project done during my 3rd year of B.E.</p>
        </div>
    </div>
    

    <section id="project-desc">
        <div class="container mt-5 wow slideInUp">
            <h3>Alexa Powered Robot using the Amazon Echo Dot&trade; and the NodeMCU protoyping board</h3><hr>
            <div class="row mt-5">
                <div class="col-lg-6 wow zoomIn">
                    <caption><h5>The Amazon Echo Dot&trade;</h5></caption><br>
                    <img class="img-style" src="../assets/alexa_img.png" alt="The amazon echo dot">
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <!-- TODO: fix alignment of abstract on small devices -->
                    <h6>ABSTRACT</h6>
                    <p>Integrating the Amazon Alexa AI technology to control a robotic system using voice commands.
                    The Amazon Alexa app lets you add any network enabled device to be controlled by voice. This feature
                    can be used to control lights, heaters, AC's, etc.<br><br>
                    Here a <b>Node MCU</b> is used to interface with the Alexa app and the functions of the robot are 
                    the individual devices. This feature of Alexa is highly scalable.</p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-5">
                    <h6>Technologies used</h6><hr>
                    <ul>
                        <li>Embedded C</li>
                        <li>Bluetooth low energy communication</li>
                    </ul>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <h6>Skills strengthened</h6><hr>
                    <ul>
                        <li>C programming</li>
                        <li>Electronics prototyping</li>
                        <li>Resiliency</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="how-it-helped">
        <div class="container wow zoomIn">
            <div class="wow slideInLeft slow">
                <h3>How it helped me?</h3><hr>
                <p>This project was a real test for my resiliency since we worked on this project overnight to meet our deadline 
                which was the next day. There was less time and more work, so we worked without any major breaks throughout the night. 
                This project helped me in my battle of overcoming the dislike for electronics. Electronics does seem fun now.</p>
            </div>
        </div>
    </section>

    <section id="project-showcase">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 wow slideInLeft">
                    <h3 class="pb-3">The Finished Robot Video</h3>
                    <p>After finishing up the robot, we did some test runs with it in our college makerspace. Sacrificing sleep was
                    finally worth it.<br><br>
                    This project was done for participating in an Alexa Hackathon, we did not win the hackathon but we surely did 
                    learn a lot of things in the process.</p>
                </div>
                <div class="col-lg-5 wow slideInRight">
                    <iframe src="https://www.youtube.com/embed/L4F0gZIpK3Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>        
    </section>

    <!-- Team members section -->
        <!-- Footer Section  -->
        <?php include '../includes/project_footer.php' ?>
    </body>
</html>