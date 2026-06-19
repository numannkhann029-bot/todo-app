<?php

include("../config/database.php");

$id = $_POST['id'];

$sql = "DELETE FROM tasks
WHERE id='$id'";

if(mysqli_query($conn,$sql)){
    echo "success";
}else{
    echo "failed";
}

?>