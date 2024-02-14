<?php 
include "../includes/connection.php";



if(isset($_POST['l_username']) && isset($_POST['l_password'])){

$l_username=$_POST['l_username'];
$l_password=$_POST['l_password'];


$sql="SELECT * FROM signup WHERE s_username LIKE '$l_username' AND s_password LIKE '$l_password'";
$result = $conn->query($sql);
if($result -> num_rows > 0){
    $row = $result->fetch_assoc();
setcookie("uid",$row['id'],time() + (86400 *30), "/");
setcookie("uname",$row['s_username'], time() + (86400 *30), "/");

    header("Location: ../index.php?success= You are successfully logged in");
}else{
    header("Location: ../login.php?error= You have entered an invalid username or password");
}

}else{
    header("Location: ../login.php?error= please fill all the fields");
 }


?>
