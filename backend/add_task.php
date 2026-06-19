<?php

include("../config/database.php");

$task_name = $_POST['task_name'];
$description = $_POST['description'];
$status = $_POST['status'];

$sql = "INSERT INTO tasks
(task_name, description, status)

VALUES
('$task_name','$description','$status')";

if(mysqli_query($conn,$sql)){
    echo "success";
}else{
    echo "failed";
}

?>