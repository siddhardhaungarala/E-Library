<?php
include "header.php";

?>
    <html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <body>
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <br><br><br><a class="navbar-brand" href="#"><strong style="font-size: xx-large;color: white">Latest
                        Documents</strong></a>

    </nav>
    <br><br>

    <div class="container">

        <div class="row ">
            <?php
            $id = 0;
            $sub = 0;
            if (isset($_GET['id']) && !empty($_GET['sub'])) {
                $id = $_GET['id'];
                $sub = $_GET['sub'];
            }
            $sql = "SELECT * FROM `article` where `type` = $id and `sub_type` = $sub order by`created_at` desc ";
            $result = mysqli_query($conn, $sql) or die(mysqli_error());
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $article_id = $row['id'];
                    $sql1 = "SELECT * FROM `comment` WHERE `article_id`=$article_id AND `status`='APPROVED' ORDER BY `created_at` DESC;";
                    ?>
                    <div class="col-lg-4 md-2 sm-1 wow animate__fadeInDown" data-wow-duration="1s">
                        <div class="card mb-5">
                            <embed src="./upload/<?= $row['img_path'] ?>" class="img-rounded" alt="blog-img"
                                   style="box-shadow:10px 10px 10px #cc9966" width="340px" height="220px">
                            <div class="w3-container">
                                <div class="w3-panel w3-card-4"
                                     style="background-color: white;width:329px;min-height: 160px;border-radius: 10px;">
                                    <button style="height: 50px;width: 330px;position: absolute;left: 4%;background-color: rgba(24,160,160,0.92);color: white; ">
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
                                            <button type="submit" name="comment" class="btn btn-default">Comment here
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
            } else {
                ?>


                <div style="color:white;text-align: center; padding: 200px;font-size: 30px">No Documents Available</div>

                <?php
            }
            ?>

        </div><!-- .col-md-12 close -->
    </div><!-- .row close -->
    <!--containerclose-->
    </body>
    </html>

<?php
include 'footer.php';
