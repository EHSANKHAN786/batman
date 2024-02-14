<?php 
include "../includes/connection.php";
// print_r($_POST);
// exit;
if(isset($_GET['t_id']) ){
$t_id=$_GET['t_id'];

$sql="DELETE from task2 WHERE t_id='$t_id'";
if($conn->query($sql) === true){
    header("Location: ../gettask.php?success= your record has been successfully updated");
}else{
    header("Location: ../gettask.php?error= your record has not been successfully updated");
}
}else{
    header("Location: ../gettask.php" );
 }
?>