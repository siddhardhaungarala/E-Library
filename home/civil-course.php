<?php
include 'header.php';
?>
    <script>        // AUTO STOP WHEN CURRENT VIDEO IS PLAYING..

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
            <h2><strong><a href="#">Auto-CAD Course</a></strong></h2>
            <div>
                <div>
                    <video width="640px" height="360px"
                           controls="controls">

                        <source src="assets/vid/civil/01%20autocad.mp4"
                                type="video/mp4">
                    </video>

                    <br>
                    <h4>Introduction to Basic Auto-CAD| Part-01</h4>
                </div>
                <br>
            </div>
        </div>
        <div class="container">
            <video width="640px" height="360px"
                   controls="controls">

                <source src="assets/vid/civil/02%20autocad.mp4"
                        type="video/mp4">
            </video>
            <br>
            <h4>Introduction to Basic Auto-CAD| Part-02</h4>
            <br>
        </div>
        <div class="container">
            <video width="640px" height="360px"
                   controls="controls">

                <source src="assets/vid/civil/03%20autocad.mp4"
                        type="video/mp4">
            </video>
            <h4>Introduction to Basic Auto-CAD | Part-03</h4>
            <br>
        </div>


        <div class="container">
            <div>
                <h2><strong><a href="mech-course.php">The Reverse Engg.</a></strong></h2>
            </div>
            <br><br>
            <div>
                <h2><strong><a href=".eee-course.php">The Kirchhoff Law </a></strong></h2>
            </div>
            <br><br>
            <div>
                <h2><strong><a href="cme-course.php">The GUI programming using python</a></strong></h2>
            </div>
            <br><br>
            <div>
                <h2><strong><a href="ccn-course.php">The Computer Networks</a></strong></h2>
            </div>
            <br><br><br><br>
        </div>
    </div>
<?php
include 'footer.php';
?>