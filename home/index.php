<?php
include 'header.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <link rel="shortcut icon" href="assets/img/Elibrary%20logoy.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <title>E-Library</title>
</head>
<body>
<?php
include 'form.php';
?>
<nav class="navbar">
    <div class="container">
        <br><br>
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><strong style="font-size: xx-large;color:white; ">Latest documents</strong></a>
        </div>
    </div>
</nav>
<br><br>


<div class="container">

    <div class="row ">
        <?php
        $sql = "SELECT * FROM `article` order by`created_at` desc ";
        $result = mysqli_query($conn, $sql) or die(mysqli_error());
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $article_id = $row['id'];
                $sql1 = "SELECT * FROM `comment` WHERE `article_id`=$article_id AND `status`='APPROVED' ORDER BY `created_at` DESC;";
                ?>
                <div class="col-lg-4 md-2 sm-1 wow animate__fadeInDown" data-wow-duration="0.5s">
                    <div class="card mb-5">
                        <embed src="./upload/<?= $row['img_path'] ?>" class="img-rounded" alt="blog-img"
                               style="box-shadow:10px 10px 10px #cc9966" width="340px" height="220px">
                        <div class="w3-container">
                            <div class="w3-panel w3-card-4"
                                 style="background-color: white;width:320px;min-height: 125px;border-radius: 15px;">
                                <button style="height: 50px;width: 322px;position: absolute;left: 8%;background-color: rgba(24,160,160,0.92);color: white; ">
                                    <strong><?= $row['title'] ?></strong></button>
                                <br>
                                <br><br>
                                <h7 style="font-size: 8px;">About:-</h7>
                                <h6><?= $row['description'] ?></h6>
                            </div>
                            <form class="navbar-form navbar-right" action="" method="post" name="Comment"
                                  id="CmmHere">
                                <div class="form-group">
                                    <label>
                                        <input type="hidden" name="article_id" value="<?= $row['id'] ?>">
                                        <input type="text" name="comment_msg" class="form-control"
                                               placeholder="Comment">
                                        <button type="submit" name="comment" class="btn btn-default"
                                                style="background-color: rgba(24,160,160,0.92);">Comment here
                                        </button>
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br><br><br><br><br><br><br><br><br><br><br>
                </div>
                <?php
            }
        }
        ?>

    </div><!-- .col-md-12 close -->
</div><!-- .row close -->
<!--containerclose-->


<?php
include 'footer.php';
?>


<script src="assets/js/vendor/jquery3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
        integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

<script src="assets/js/owl.carousel.min.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoplayTimeout: 10000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>