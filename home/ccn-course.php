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
            <h2><strong><a href="#">The Computer Network course</a></strong></h2>
            <div>
                <div>
                    <video width="640px" height="360px"
                           controls="controls">

                        <source src="assets/vid/ccn/01%20Computer%20Networks.mp4"
                                type="video/mp4">
                    </video>

                    <br>
                    <h4>Introduction to Computer Networks| Part-01</h4>
                </div>
                <br>
            </div>
        </div>
        <div class="container">
            <video width="640px" height="360px"
                   controls="controls">

                <source src="assets/vid/ccn/02%20computer%20network%20characteristics.mp4"
                        type="video/mp4">
            </video>
            <br>
            <h4>Introduction to Computer Networks | The characteristics of computer Network | Part-02</h4>
            <br>
        </div>
        <div class="container">
            <video width="640px" height="360px"
                   controls="controls">

                <source src="assets/vid/ccn/03%20computer%20network%20basic%20proto%20(1).mp4"
                        type="video/mp4">
            </video>
            <h4>The Basic Protocols of Computer Networks | Part-03</h4>
            <br>
        </div>
        <div class="container">
            <video width="640px" height="360px"
                   controls="controls">

                <source src="assets/vid/ccn/04%20computer%20Network%20Protocols.mp4"
                        type="video/mp4">
            </video>
            <h4>The breif about Protocols of Computer Networks | Part-04</h4>
            <br>
        </div>
        <div class="container">
            <div>
                <h2><strong><a href="cme-course.php">The GUI Programming course </a></strong></h2>
            </div>
            <br><br>
            <div>
                <h2><strong><a href=".eee-course.php">The Kirchhoff Law </a></strong></h2>
            </div>
            <br><br>
            <div>
                <h2><strong><a href="mech-course.php">The Reverse Engg.</a></strong></h2>
            </div>
            <br><br>
            <div>
                <h2><strong><a href="civil-course.php">Auto-CAD course</a></strong></h2>
            </div>
            <br><br><br><br>
        </div>
    </div>
<?php
include 'footer.php';
?>