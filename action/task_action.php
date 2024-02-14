<?php 
include "../includes/connection.php";


if(isset($_FILES['t_image']) && isset($_POST['t_title']) && isset($_POST['t_description']) 
&& isset($_POST['t_year'])){






    $target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["t_image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["t_image"]["tmp_name"]);
  if($check !== false) {
     echo "File is an image - " . $check["mime"] . ".";
   $uploadOk = 1;
  } else {
    echo "File is not an image.";
    // header("Location: gettask.php?error=File is not an image.")
    $uploadOk = 0;
  }

// Check if file already exists
if (file_exists($target_file)) {
//  echo "Sorry, file already exists.";
 header("Location: ../gettask.php?error=Sorry, file already exists.");
  $uploadOk = 0;
}

// Check file size
if ($_FILES["t_image"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
  header("Location: ../gettask.php?error=Sorry, your file is too large.");
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  header("Location: ../gettask.php?error=Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
  //headerlocation
  header("Location: ../gettask.php?error=Sorry, your file was not uploaded.");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["t_image"]["tmp_name"], $target_file)) {


$t_image = $_FILES["t_image"]["name"]; 
$t_title=$_POST['t_title'];
$t_description=$_POST['t_description'];
$t_year=$_POST['t_year'];

$sql="INSERT INTO `task2`(`t_image`, `t_title`, `t_description`,`t_year`) VALUES ('$t_image','$t_title','$t_description','$t_year')";
if($conn->query($sql) === true){
    header("Location: ../index.php?success= your record has been successfully inserted");
}else{
    header("Location: ../task1.php?error= your record has not been successfully inserted");
}

    echo "The file ".htmlspecialchars( basename( $_FILES["t_image"]["name"])). " has been uploaded.";
  } else {
    // echo "Sorry, there was an error uploading your file.";
    header("Location: ../index.php?error= Sorry, there was an error uploading your file.");
  }
}











}else{
    header("Location: ../task1.php?error= please fill all the fields");
 }
?>