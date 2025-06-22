<?php
include 'header.php';
?>
    <script>
        // AUTO STOP WHEN CURRENT VIDEO IS PLAYING..

        //JAVASCRIPT

        document.addEventListener('play', function (e) {
            var videos = document.getElementsByTagName('video');
            for (var i = 0, len = videos.length; i < len; i++) {
                if (videos[i] != e.target) {
                    videos[i].pause();
                }
            }
        }, true);
    </script>
    <div class="container-fluid">
        <div class="container">
            <br>
            <h2><strong><a href="#">The GUI Programming course</a></strong></h2>
            <div>
                <div>
                    <video width="640px" height="360px"
                           controls="controls">

                        <source src="assets/vid/cme/01%20Python%20GUI.mp4"
                                type="video/mp4">
                    </video>

                    <br>
                    <h4>Introduction to GUI Programming in python | Part-01</h4>
                </div>
                <br>
            </div>
        </div>
        <div class="container">
            <video width="640px" height="360px"
                   controls="controls">

                <source src="assets/vid/cme/02%20%20Python%20GUI.mp4"
                        type="video/mp4">
            </video>
            <br>
            <h4>Introduction to GUI Programming in python | Part-02 | Adding Labels to GUI form</h4>
            <br>
        </div>
        <div class="container">
            <video width="640px" height="360px"
                   controls="controls">

                <source src="assets/vid/cme/03%20Python%20GUI.mp4"
                        type="video/mp4">
            </video>
            <h4>Introduction to GUI Programming in python | Part-03 | Creating buttons and Text box and
                widgets </h4>
            <br>
        </div>
        <div class="container">
            <div>
                <h2><strong><a href="ccn-course.php">The Computer Networking Course</a></strong></h2>
            </div>
            <br><br>
            <div>
                <h2><strong><a href=".eee-course.php">For Kirchhoff Laws</a></strong></h2>
            </div>
            <br><br>
            <div>
                <h2><strong><a href="mech-course.php">Reverse Engg.</a></strong></h2>
            </div>
            <br><br>
            <div>
                <h2><strong><a href="civil-course.php">For Auto-CAD course</a></strong></h2>
            </div>
            <br><br><br><br>
        </div>
    </div>
<?php
include 'footer.php';
?>