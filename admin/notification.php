<?php
 include 'header.php';
 ?>
<html xmlns="http://www.w3.org/1999/html" lang="en">
    <head>
        <style>
        a{
            text-decoration: none;
            font-size: 23px;
            color:#0cc2ef;
        }
        body {
            color: #404E67;
            background: #F5F7FA;
            font-family: 'Open Sans', sans-serif;
        }
        h1{
            position: relative;
            text-align: center;
            font: 50px;
        }
        h3{
            color: black;
        }
        </style>
       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        
    <body>
    <div class=" fadeInDown justify-content-start" style="padding:0 20px 0 270px">

<div class="col-sm-4">
    <div>
        <h1>Notify Students from here</h1>
    </div>
    
</div><br><br>

<br><br>
  <div class="container">
        <a href="notification-form.php">
            <button type="button" class="btn btn-info add-new right"><i class="fa fa-plus "></i> Add Notification</button>
        </a><br><br>
  </div>
    </body>
</html>

<br><br>
        <div class="row ">

            <?php
            $sql = "SELECT * FROM `notification` order by`created_at` desc ";
            $result = mysqli_query($conn, $sql) or die(mysqli_error());
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="col-lg-3 md-2 sm-1 wow animate__fadeInDown" data-wow-duration="1s">
                        <div class="card mb-5">
                            <div class="card-body">
                                <h6><i class="fa-clock"></i><?php
                                    echo date("Y-m-d h:ia", strtotime($row['created_at'])); ?></h6>
                                <h3><?php echo $row['title']; ?></h3>
                                <p><?php echo $row['description']; ?></p>

                                <span><a href="notification-form.php?id=<?php echo $row['id'];?>" class="btn btn-warning">Edit</a></span>
                                <span><a href="delete-notification.php?id=<?php echo $row['id']; ?>&type=notification"
                                         class="btn btn-danger">Delete</a> </span>
                            </div>
                        </div>
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