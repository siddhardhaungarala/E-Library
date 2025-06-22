<?php
include "filter.php";
include 'config.php';
$sub_msg = $cmt_msg = $user_email = "";

if (isset($_POST['comment'])) {
    if (isset($_POST['comment_msg']) && $_POST['comment_msg'] != '') {
        $comment = $_POST['comment_msg'];
        $id = $_POST['article_id'];
        $sql = "INSERT INTO `comment`(`article_id`,`comment`) VALUES ($id,'$comment')";
        if (mysqli_query($conn, $sql)) {
            $cmt_msg = " <div class='alert success' style='color:green'>Your Comment is submitted.</div>";
        } else {
            $cmt_msg = "<div class='alert error' style='color:red'>Failed While commenting</div>";
        }
    }
}
?>
<!DOCTYPE html>
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
        body{
            background-image: url("indexphoto.jpg");
            background-size:cover;
        }
        h2,h3,h4{
            color: white;
        }
    </style>

</head>
<body>

<br><br><br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="block wow fadeInUp" data-wow-duration="900ms" data-wow-delay="900ms">

                <h2><strong style="font-size: xx-large">Seminars & courses</strong></h2><br><br>

                <div class="owl-carousel owl-theme">

                    <div class="item">
                        <iframe width="240" height="300" src="https://www.youtube.com/sIA1L7rWtow"></iframe>
                    </div>
                    <div class="item">
                        <iframe width="240" height="300" src="https://www.youtube.com/3-a7syDYlsk"></iframe>
                    </div>
                    <div class="item">
                        <iframe width="240" height="300" src="https://www.youtube.com/embed/x8Kil3x_k5k"></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';