<?php
include 'header.php';
include 'form.php';
include 'formgk.php'
?>
<script>
// AUTO STOP WHEN CURRENT VIDEO IS PLAYING..

//JAVASCRIPT

document.addEventListener('play', function(e){
var videos = document.getElementsByTagName('video');
for(var i = 0, len = videos.length; i < len;i++){
if(videos[i] != e.target){
videos[i].pause();
}
}
}, true);
</script>
<div class="container-fluid">
    <div class="container">
        <br><br>
        <h2><strong style="color: rgba(252,252,248,0.92)"><a href="cme-course.php">For CME courses</a></strong></h2>
        <div>
            <div>
                <video width="640px" height="360px"
                       controls="controls">

                    <source src="assets/vid/cme/01%20Python%20GUI.mp4"
                            type="video/mp4">
                </video>

                <br>
                <h4><a href="cme-course.php">Introduction to GUI Programming in python</a></h4>
            </div>
            <br>
        </div>
    </div>
    <div class="container">
        <div>
            <h2><strong style="color: rgba(252,252,248,0.92)"><a href="ccn-course.php">For ECE courses</a></strong></h2>
            <div>
                <div>
                    <video width="640px" height="360px"
                           controls="controls">

                        <source src="assets/vid/ccn/02%20computer%20network%20characteristics.mp4"
                                type="video/mp4">
                    </video>
                    <br>
                    <h4><a href="ccn-course.php">The Computer network characteristics </a> </h4>
                </div>
                <br>
            </div>
        </div>
    </div>
    <div class="container">
        <div>
            <h2><strong style="color: rgba(252,252,248,0.92)"><a href="ccn-course.php">For CCN courses</a></strong></h2>
        </div>
        <div>
            <video width="640px" height="360px"
                   controls="controls">

                <source src="assets/vid/ccn/01%20Computer%20Networks.mp4"
                        type="video/mp4">
            </video>
            <h4><a href="ccn-course.php">Introduction to Computer Networks | Computer-Network Part -01</a> </h4>
        </div>
        <br>
    </div>
    <div class="container">
        <div>
            <h2><strong style="color: rgba(252,252,248,0.92)"><a href=".eee-course.php">For EEE courses</a></strong></h2>
        </div>
        <div>
            <video width="640px" height="360px"
                   controls="controls">

                <source src="assets/vid/eee/01%20kirchoff%20law.mp4"
                        type="video/mp4">
            </video>
            <br>
            <h4><a href=".eee-course.php">About Kirchhoff current Law | Kirchhoff 1st Law</a></h4>
        </div>
    </div>
    <br>
    <div class="container">
        <div>
            <h2><strong style="color: rgba(252,252,248,0.92)"><a href="mech-course.php">For Mech courses</a></strong></h2>
        </div>
        <div>
            <video width="640px" height="360px"
                   controls="controls">

                <source src="assets/vid/mech/01%20Reverse%20Engg..mp4"
                        type="video/mp4">
            </video>
            <br>
            <h4><a href="mech-course.php">Introduction to Reverse Engineering | what is Reverse Engineering</a></h4>
        </div>
        <br>
    </div>
    <div class="container">
        <div>
            <h2><strong style="color: rgba(252,252,248,0.92)"><a href="civil-course.php">For Civil courses</a></strong></h2>
        </div>
        <div>
            <video width="640px" height="360px" controls="controls">

                <source src="assets/vid/civil/01 autocad.mp4"
                        type="video/mp4">
            </video>
            <br>
            <h4><a href="civil-course.php">Introduction to Auto-CAD | About AUTOCAD</a> </h4>
        </div>
        <br><br><br><br>
    </div>
</div>

<?php
include 'footer.php';
?>

