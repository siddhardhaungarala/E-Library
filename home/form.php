<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E Library</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
</head>

<body>
<div class="container">
    <br><br>
    <h2 style="text-align: center;color: white;"><strong>All Courses</strong></h2>
    <br>
</div>
<div class="container">
    <div class="container-fluid">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item">
                    <video width="1120px" height="600px"
                           controls="controls">

                        <source src="assets/vid/civil/01%20autocad.mp4"
                                type="video/mp4">
                    </video>
                <div class="carousel-caption">
                    <h3><a href="civil-course.php"><strong>Auto-CAD tutorials</strong></a></h3>
                    <p>Learn Auto-CAD mainly for civil, Mechanical & EEE </p>
                </div>
            </div>


                <div class="item">
                    <video width="1120px" height="600px"
                           controls="controls">

                        <source src="assets/vid/ccn/01%20Computer%20Networks.mp4"
                                type="video/mp4">
                    </video>
                    <div class="carousel-caption">
                        <h3><a href="ccn-course.php"><strong>The Basics of Computer Network</strong></a></h3>
                        <p>Learn Basic Computer Network for mainly i.e., CCN, ECE, & CME</p>
                    </div>
                </div>

                <div class="item">
                    <video width="1120px" height="600px"
                           controls="controls">

                        <source src="assets/vid/eee/01%20kirchoff%20law.mp4"
                                type="video/mp4">
                    </video>
                    <div class="carousel-caption">
                        <h3><a href=".eee-course.php"><strong>About Kirchhoff Laws</strong></a></h3>
                        <p>Learn about kirchhoff Laws mainly for EEE</p>
                    </div>
                </div>

                    <div class="item active">
                        <video width="1120px" height="600px"
                               controls="controls">

                            <source src="assets/vid/cme/02%20%20Python%20GUI.mp4"
                                    type="video/mp4">
                        </video>
                        <div class="carousel-caption">
                            <h3><a href="cme-course.php"><strong>The GUI Programming using Python</strong></a></h3>
                            <p>This is mainly for computer students i.e., CME & CCN</p>
                        </div>
                    </div>
                    <div class="item">
                        <video width="1120px" height="600px"
                               controls="controls">

                            <source src="assets/vid/mech/01%20Reverse%20Engg..mp4"
                                    type="video/mp4">
                        </video>
                        <div class="carousel-caption">
                            <h3><a href="mech-course.php"><strong>The Topic of Reverse Engineering</strong></a></h3>
                            <p>The Topic of Reverse Engineering mainly for Mechanical students</p>
                        </div>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</div>
</body>
</html>