<form method="POST" action="">
<div class="form-group">
        <label for="feedback"><h3>Feedback</h3></label>
            <textarea name="content" class="form-control" id="feedback" rows="3" placeholder="Type message here" required></textarea>
            <?php 
                if(isset($_POST['content'])) {
                    $conn = mysqli_connect("localhost","id10717109_carlos","tLy28FxQT*jgacu","id10717109_feedback");
                    if(!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    $content = mysqli_real_escape_string($conn, $_POST['content']);
                    $sql =  "INSERT INTO feedbacks (content) VALUES ('$content');";
                    if(mysqli_query($conn, $sql)) {
                        echo "<small>feedback submitted</small><br>";
                    }
                    mysqli_close($conn);
                }
            ?>
            <button type="submit" class="mt-3 btn btn-lg btn-outline-success">Send feedback</button>
    </div>
</form>