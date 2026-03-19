<?php
include("config.php");
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = $conn->query("DELETE FROM student WHERE id='$id'");
    header("Location:display.php");
    exit();
}

?>