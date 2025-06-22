<?php
  session_start();


  include 'config.php';
  include 'header.php';

  $msg = $user_msg = $email_msg = $psw_msg = $edit_row = $edit_title = $edit_desc = $edit_type = $edit_path = "";
  $edit = false;
  $sql_true = false;


if (isset($_GET['id']) && !empty($_GET['id'])) {
    $edit = true;
    $id = $_GET['id'];
}

if ($edit) {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $title = $_POST['title'];
      $description = $_POST['description'];

      $update_sql = "UPDATE `notification` SET `title`='$title',`description`='$description' WHERE `id` = '$id'";
      $res = mysqli_query($conn, $update_sql) or die(mysqli_error());
      if ($res) {
          header('location: notification.php');
      } else {
          $msg = 'unable to insert data';
      }
  }
}
else {
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST['title'])) {
          $user_msg = "Please enter title";
      } else {
          $sql_true = true;
          $title = $_POST['title'];
      }
      if (empty($_POST['description'])) {
          $email_msg = "Please enter description";
      } else {
          $sql_true = true;
          $description = $_POST['description'];
      }

      move_uploaded_file($file_loc, $folder . $file);

      $sql = "INSERT INTO `notification`(`title`, `description`) VALUES ('$title', '$description')";
      $result = mysqli_query($conn, $sql) or die(mysqli_error());
      if ($result) {
          header('location: notification.php');
      } else {
          $msg = 'unable to insert data';
      }


    }
  }
  
if ($edit) {
  $get_sql = "SELECT * FROM `notification` WHERE `id` = $id";
  $res = mysqli_query($conn, $get_sql) or die(mysqli_error());
  if (mysqli_num_rows($res) > 0) {
      $edit_row = mysqli_fetch_assoc($res);
      $edit_title = $edit_row['title'];
      $edit_desc = $edit_row['description'];
  }
}

?>

<html lang="en">
    <head>
        <title>Notifications</title>

    </head>
<body>
<form method="post" action="" enctype="multipart/form-data" style="border:1px solid #ccc">
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <br><br>
            <h1>Write Notification here </h1><br><br>
            <p>Please Fill this form to display the notifications</p>
            <hr>
            <label><b>Enter  Title Here</b></label>
            <input type="text" placeholder="Enter Title here" name="title" style="width: 300px;"
                   value="<?php echo $edit_title ? $edit_title : ''; ?>" required>

            <label><b>Enter description recent Notices Here</b></label>
            <input type="text" placeholder="Description here" name="description" style="width: 300px;"
                   value="<?php echo $edit_desc ? $edit_desc : ''; ?>" required>
            <div class="clearfix">
                <button type="button" class="cancelbtn"><a href="notification.php">Cancel</a></button>
                <?php
                if ($edit) {
                    ?>
                    <button type="submit" class="signupbtn" name="update">UPDATE</button>
                    <?php
                } else {
                    ?>
                    <button type="submit" class="signupbtn" name="create_article">Upload</button>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>

</form>

<?php
  include 'footer.php';