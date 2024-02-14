<?php 
include "../includes/connection.php";



if(isset($_POST['s_username']) && isset($_POST['s_password']) && isset($_POST['s_email'])){





$s_username=$_POST['s_username'];
$s_password=$_POST['s_password'];
$s_email=$_POST['s_email'];


if($s_username==""){
    header("Location: ../signup.php?error=Error not inserted record");
    exit;
}


$sql1="SELECT * FROM signup WHERE s_username LIKE '$s_username' ";
$result1 = $conn->query($sql1);
if($result -> num_rows > 0){
    header("Location: ../signup.php?error=Error not inserted record");
    exit;
}


$sql="INSERT INTO `signup`(`s_username`,`s_password`,`s_email`) VALUES ('$s_username','$s_password','$s_email')";
if($conn->query($sql) === true){

    header("Location: ../login.php?success= You are successfully  signup");
}else{
    header("Location: ../signup.php?error= You have entered an invalid username or password");
}

}else{
    header("Location: ../task1.php?error= please fill all the fields");
 }



?>
