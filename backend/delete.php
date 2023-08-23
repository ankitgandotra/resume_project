<?php
include 'config1.php';
if (isset($_GET['deleteid'])) {

    $id = $_GET['deleteid'];

    $sql = "delete from about where id = $id";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        echo "Deleted Successfully";
        header('location:tables-data.php');
    } else {
        die(mysqli_error($connection));
    }
}
