<?php
ob_start();
session_start();
include 'config.php';


if (isset($_POST['comment'])) {
    if (isset($_POST['comment_msg']) && $_POST['comment_msg'] != '') {
        $comment = $_POST['comment_msg'];
        $id = $_POST['article_id'];
        $sql = "INSERT INTO `comment`(`article_id`,`comment`) VALUES ($id,'$comment')";
        if (mysqli_query($conn, $sql)) {
            $cmt_msg = " <div class='alert success' style='color:#53ff53'>Your Comment is submitted.</div>";
        } else {
            $cmt_msg = "<div class='alert error' style='color:red'>Failed While commenting</div>";
        }
    }
}
?>

<html lang="en">
<head>
    <link rel="shortcut icon" href="assets/img/Elibrary%20logoy.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>elibrary</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #dbdbdb;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #69acb3;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        body {
            background-image: url("assets/img/pen-01.jpeg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        h2, h3, h4 {
            color: white;
        }

        h1 {
            color: white;
            text-align: center;
            text-shadow: 5px 5px 10px #07ea34;
            font-size: xx-large;
        }

    </style>

</head>
<body>

<nav class="navbar-inverse navbar-fixed-top" style="font-weight: bold">
    <div class="container-fluid">
        <div class="navbar-header">
            <img src="assets/img/Elibrary%20logoy.png" style="width: 60px; height: 60px;"><br>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="admin/login.php" target="_blank">Lecturers</a></li>
            <li><a href="live.php">Live</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">1st year<span
                            class="caret"></span></a>
                <ul class="dropdown-menu">
                    <ul class="nav navbar-default">
                        <li><a href="filter.php?id=1&sub=1"><span class="glyphicon glyphicon-tags"></span> CME</a></li>
                        <li><a href="filter.php?id=1&sub=2"><span class="glyphicon glyphicon-tags"></span> CCN</a></li>
                        <li><a href="filter.php?id=1&sub=3"><span class="glyphicon glyphicon-tags"></span> ECE</a></li>
                        <li><a href="filter.php?id=1&sub=4"><span class="glyphicon glyphicon-tags"></span> Mech</a></li>
                        <li><a href="filter.php?id=1&sub=5"><span class="glyphicon glyphicon-tags"></span> EEE</a></li>
                        <li><a href="filter.php?id=1&sub=6"><span class="glyphicon glyphicon-tags"></span> Civil</a>
                        </li>
                    </ul>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">2nd year<span
                            class="caret"></span></a>
                <ul class="dropdown-menu">
                    <ul class="nav navbar-default">
                        <li><a href="filter.php?id=2&sub=1"><span class="glyphicon glyphicon-tags"></span> CME</a></li>
                        <li><a href="filter.php?id=2&sub=2"><span class="glyphicon glyphicon-tags"></span> CCN</a></li>
                        <li><a href="filter.php?id=2&sub=3"><span class="glyphicon glyphicon-tags"></span> ECE</a></li>
                        <li><a href="filter.php?id=2&sub=4"><span class="glyphicon glyphicon-tags"></span> Mech</a></li>
                        <li><a href="filter.php?id=2&sub=5"><span class="glyphicon glyphicon-tags"></span> EEE</a></li>
                        <li><a href="filter.php?id=2&sub=6"><span class="glyphicon glyphicon-tags"></span> Civil</a>
                        </li>

                    </ul>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">3rd year<span
                            class="caret"></span></a>
                <ul class="dropdown-menu">
                    <ul class="nav navbar-default">
                        <li><a href="filter.php?id=3&sub=1"><span class="glyphicon glyphicon-tags"></span> CME</a></li>
                        <li><a href="filter.php?id=3&sub=2"><span class="glyphicon glyphicon-tags"></span> CCN</a></li>
                        <li><a href="filter.php?id=3&sub=3"><span class="glyphicon glyphicon-tags"></span> ECE</a></li>
                        <li><a href="filter.php?id=3&sub=4"><span class="glyphicon glyphicon-tags"></span> Mech</a></li>
                        <li><a href="filter.php?id=3&sub=5"><span class="glyphicon glyphicon-tags"></span> EEE</a></li>
                        <li><a href="filter.php?id=3&sub=6"><span class="glyphicon glyphicon-tags"></span> Civil</a>
                        </li>

                    </ul>
                </ul>
            </li>
            <li><a href="notification.php" class="notification"><i class="fa fa-bell"
                                                                   style=" font-size:20px;color:white">
                    </i></a></li>
            <li data-toggle="modal" data-target="#myModal" style="color:#4677b3"><a href="#">Contact Us</a>
            </li>
        </ul>
    </div>
</nav>


<div class="container">
    <br><br>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">10.00Am-5.00PM</button>


                    <h4 class="modal-title">Contact US</h4>

                    <h5>Mail Us We Will Respond Soon... </h5>


                </div>
                <div class="modal-body">

                    <a href="#">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>
                          alwayssiddhardh@gmail.com               <br>
                    <br>

                </span>
                    </a>
                    <p>
                        <strong>Our Address </strong><br>
                        Aditya college of engineering & Technology <br>
                        ADB Road, surampalem<br>
                        Pin-533437 East Godavari dist.</p>


                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>
