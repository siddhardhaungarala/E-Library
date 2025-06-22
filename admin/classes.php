<?php
include 'header.php';
//include 'dashboard.php';
?>
    <html xmlns="http://www.w3.org/1999/html" lang="en">
    <head>

        <style>
            a {
                text-decoration: none;
                font-size: 23px;
                color: #0cc2ef;
            }

            body {
                color: #404E67;
                background: #F5F7FA;
                font-family: 'Open Sans', sans-serif;
            }

            h1 {
                position: relative;
                text-align: center;
                font: 50px;
            }

            h3 {
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

    </head>
    <body>
    <div class=" fadeInDown justify-content-start" style="padding:0 20px 0 270px">

        <div class="col-sm-4">
            <h1>Host a live sessions</h1>
        </div>
        <br><br>
        <div>
            <br>
            <h3>
                <a href="https://us05web.zoom.us/meeting/" target="_blank" rel="noopener noreferrer">
                    Session via Zoom
                </a>
            </h3><br><br>
            <h3><a href="https://meet.google.com/" target="_blank" rel="noopener noreferrer">Session via Google Meet</a></h3><br><br><br>
        </div>
        <div class="container">
            <a href="classes-form.php">
                <button type="button" class="btn btn-info add-new right"><i class="fa fa-plus "></i> Add Link for class
                </button>
            </a><br>
            <p style="font-size: 13px;"><strong style="color: red;text-decoration: black;text-underline-position: under; ">Note:</strong>You can copy your session link and paste only at link part, from here the students can access it. And Credential about the class and about the class detail will provide in description section only </p>
            <br>
        </div>
        <br><br>
        <div class="row ">

            <?php
            $sql = "SELECT * FROM `live` order by`created_at` desc ";
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
                                <p style="font-size:15px; "><?php echo $row['link']; ?></p>
                                <p><?php echo $row['description']; ?></p>

                                <span><a href="classes-form.php?id=<?php echo $row['id']; ?>"
                                         class="btn btn-warning">Edit</a></span>
                                <span><a href="delete-classes.php?id=<?php echo $row['id']; ?>&type=live"
                                         class="btn btn-danger">Delete</a> </span>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
    </body>
    </html>
<?php
include 'footer.php';
?>