<?php 
include "../includes/connection.php";
// print_r($_POST);
// exit;
if(isset($_POST['t_title']) && isset($_POST['t_description']) && isset($_POST['t_year']) && isset($_GET['t_id']) ){

$t_id=$_GET['t_id'];
$t_title=$_POST['t_title'];
$t_description=$_POST['t_description'];
$t_year=$_POST['t_year'];
$sql="UPDATE task2 SET t_title='$t_title',t_description='$t_description',t_year='$t_year' WHERE t_id='$t_id'";
if($conn->query($sql) === true){
    header("Location: ../gettask.php?success= your record has been successfully updated");
}else{
    header("Location: ../gettask.php?error= your record has not been successfully updated");
}
}else{
    header("Location: ../gettask.php" );
 }
?>