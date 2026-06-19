<?php

include("../config/database.php");

$id = $_POST['id'];
$status = $_POST['status'];

$sql = "UPDATE tasks
SET status='$status'
WHERE id='$id'";

if(mysqli_query($conn,$sql)){
    echo "success";
}else{
    echo "failed";
}

?>