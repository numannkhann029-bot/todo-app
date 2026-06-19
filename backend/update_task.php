<?php

include("../config/database.php");

$id = $_POST['id'];
$task_name = $_POST['task_name'];
$description = $_POST['description'];

$sql = "UPDATE tasks
SET task_name='$task_name',
description='$description'
WHERE id='$id'";

if(mysqli_query($conn,$sql)){
    echo "success";
}else{
    echo "failed";
}

?>