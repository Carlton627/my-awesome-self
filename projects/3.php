<?php include '../includes/project_template.php' ?> 

    <div id="project-stage" class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">8 &times; 8 &times; 8 LED cube</h1>
            <p class="lead">A cool electronics project</p>
        </div>
    </div>
    
        <section id="project-desc">
            <div class="container mt-5">
                <h3>8 &times; 8 &times; 8 LED cube using the Arduino UNO prototyping board</h3><hr>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <img class="img-style" src="" alt="Led cube image">
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <!-- TODO: fix alignment of abstract on small devices -->
                        <h6>ABSTRACT</h6>
                        <p>With the dawn of a variety of electronics prototyping boards, it became very easy to prototype new ideas. 
                        The LED cube idea was born due to this craze of prototyping boards. The Arduino UNO, Node MCU, Raspberry PI boards 
                        allow anyone with the itch to do some engineering turn their ideas into projects in a short amount of time.<br><br>
                        Leveraging the power of these boards we created an LED cube, that was displayed during the Computer Science Department and Electronics Department branch inauguration. 
                        </p>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-5">
                        <h6>Technologies used</h6><hr>
                        <ul>
                            <li>Arduino UNO</li>
                            <li>Embedded C</li>
                        </ul>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <h6>Skills strengthened</h6><hr>
                        <ul>
                            <li>Team work and Time Management</li>
                            <li>Basic Electronics</li>
                            <li>C programming</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="how-it-helped">
            <div class="container">
                <div class="">
                    <h3>How it helped me?</h3><hr>
                    <p>Being a Computer Science graduate, I did not have much to bother about when it came to electronic components.
                        I always had this repulsive nature towards electronic circuits or anything to do with hardware for that matter.
                        It all changed for me when I got my first Arduino UNO, my prespective of electronics completely changed and then 
                        I knew I had to do projects which involve hardware and software, this project is a great example of that. Now circuits
                        look less scary and electronic components look more like toys and less like bombs.   
                    </p>
                </div>
            </div>
        </section>

        <section id="project-showcase">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h3 class="pb-3">The Cube testing video</h3>
                        <p>After a lot of soldering and solder burns, the arduino was programmed, the circuits were connected
                        and the LED cube came to life. We worked on refining the code on the following day.<br><br>
                        We had a tight deadline for this project (10 days), making a cube using 512 LEDs just seemed impossible. The reason we
                        could push through and complete the project was the love for working on projects that was common a 
                        common emotion for the whole team.</p>
                    </div>
                    <div class="col-lg-5">
                        <iframe src="https://www.youtube.com/embed/jTDqS0HN0Vc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
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
                            <h5 class="card-title">Santan Edwin Fernandes</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
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