<?php include '../includes/project_template.php' ?>    
    
    <div id="project-stage" class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Alexa Powered Robot</h1>
            <p class="lead">A mini robotics project done during my 3rd year of B.E.</p>
        </div>
    </div>
    

    <section id="project-desc">
        <div class="container mt-5">
            <h3>Alexa Powered Robot using the Amazon Echo Dot&trade; and the NodeMCU protoyping board</h3><hr>
            <div class="row mt-5">
                <div class="col-lg-6">
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
        <div class="container">
            <div class="">
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
                <div class="col-lg-7">
                    <h3 class="pb-3">The Finished Robot Video</h3>
                    <p>After finishing up the robot, we did some test runs with it in our college makerspace. Sacrificing sleep was
                    finally worth it.<br><br>
                    This project was done for participating in an Alexa Hackathon, we did not win the hackathon but we surely did 
                    learn a lot of things in the process.</p>
                </div>
                <div class="col-lg-5">
                    <iframe src="https://www.youtube.com/embed/L4F0gZIpK3Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
        
    </section>

    <section id="team-members">
        <div class="container mt-5 mb-5">
            <h3>The Team</h3><hr>
            <div class="card-deck">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">John Baptist Rodrigues</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="../assets/alston_img.jpeg" class="card-img-top" alt="Alston D'souza">
                    <div class="card-body">
                        <h5 class="card-title">Alston D'souza</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="../assets/carlton_img.jpeg" class="card-img-top" alt="Carlton Rodrigues">
                    <div class="card-body">
                        <h5 class="card-title">Carlton Rodrigues</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Footer Section  -->
        <?php include '../includes/project_footer.php' ?>
    </body>
</html>