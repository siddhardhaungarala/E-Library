<?php
include 'config.php';

if (isset($_GET['id']) && $_GET['id'] != '') {
    $id = $_GET['id'];
    $sql = null;
    if (isset($_GET['type']) && $_GET['type'] == 'notification') {
        $sql = "DELETE FROM `notification` WHERE `id` = $id ";
    } else {
        $sql = "DELETE FROM `user` WHERE `id` = $id ";
    }
    $result = mysqli_query($conn, $sql) or die(mysqli_error());
    if ($result) {
        $msg = 'deleted record';
        if ($_GET['type'] == 'notification') {
            header('location: notification.php');
        } else {
            header('location: sub-admin.php');
        }

    } else {
        $msg = 'unable to delete data';
    }


}