<?php
include "../includes/connection.php";



if (isset($_POST['username']) && isset($_POST['a_password']) && isset($_POST['latitude']) && isset($_POST['longitude'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $a_password = $_POST['a_password'];
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];

    $query = "INSERT INTO location_data VALUES ('$id','$username','$a_password','$latitude','$longitude')";
    mysqli_query($conn, $query);





    $sql2 = "SELECT * FROM admin_table WHERE username LIKE '$username' AND a_password LIKE '$a_password'";
    $result = $conn->query($sql2);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        setcookie("uid", $row['id'], time() + (86400 * 30), "/");
        setcookie("uname", $row['username'], time() + (86400 * 30), "/");

        header("Location: ../task1.php?success= You are successfully logged in");
    } else {
        header("Location: ../admin.php?error= You have entered an invalid username or password");
    }
} else {
    header("Location: ../admin.php?admin error ");
}
