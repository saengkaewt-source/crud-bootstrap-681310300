<?php
include "db_conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM `crud_681310300` WHERE id=$id";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: index.php?msg=Record Delete Successfully");
}else{
    echo"Feiled:".mysqli_error($conn);
}
?>