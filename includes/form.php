<form method="POST" action="">
<div class="form-group">
        <label for="feedback"><h3>Feedback</h3></label>
            <textarea name="content" class="form-control" id="feedback" rows="3" placeholder="Type message here" required></textarea>
            <p id="notify" class="mb-n2" hidden><small class="text-white"></small></p>
            <?php 
                if(isset($_POST['content'])) {
                    $conn = mysqli_connect("localhost","id10717109_carlos","tLy28FxQT*jgacu","id10717109_feedback");
                    if(!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    $content = mysqli_real_escape_string($conn, $_POST['content']);
                    $sql =  "INSERT INTO feedbacks (content) VALUES ('$content');";
                    if(mysqli_query($conn, $sql)) {
                        mysqli_close($conn); 
                    ?>
                        <script type="text/javascript">
                            window.location = "#main-footer"
                            notify_ = document.querySelector("#notify")
                            notify_txt = notify_.firstElementChild
                            notify_.hidden = false
                            notify_txt.innerHTML = "Feedback submitted"
                            setTimeout(function(){
                                notify_.hidden = true
                                notify_txt.innerHTML = ""
                            }, 5000)
                        </script>        
                    <?php
                    } else {
                        mysqli_close($conn);
                    ?>
                        <script type="text/javascript">
                            window.location = "#main-footer"
                            notify_.hidden = false
                            notify_txt.innerHTML = "Feedback could not be submitted, sorry for the inconvience"
                            setTimeout(function(){
                                notify_.hidden = true
                                notify_txt.innerHTML = ""
                            }, 5000)
                        </script>  
                    <?php
                    }
                }
            ?>
            <button type="submit" class="mt-3 btn btn-lg btn-outline-success">Send feedback</button>
    </div>
</form>