<?php
include "./includes/connection.php";
if(isset($_GET['t_id'])){   
    $t_id = $_GET['t_id'];
    $sql="select * from task2 WHERE t_id='$t_id'";

    $result = $conn->query($sql);
    if($result-> num_rows>0){
        $row = $result->fetch_assoc();
        // $t_name = $row['t_name'];
        // $t_age = $row['t_age'];
        // $t_course = $row['t_course'];
        $t_title = $row['t_title'];
        $t_description = $row['t_description'];
        $t_year = $row['t_year'];
    }else{
        header("Location: gettask.php");
    }
    }else{
        header("Location: gettask.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Form</title>
</head>
<style>
    
    form{
        border: 1px solid black;
        height:30vh;
        width: 30%;
        background: aqua;
        text-align: center;
    }
    .success{
        color: green;
    }
    .error{
        color: red;
    }
</style>
<body>
    <form action="./action/delete_task_action.php?t_id=<?php echo $t_id; ?>" method="post"><br><br>
        <input  name="t_title" value="<?php echo $t_title; ?>" placeholder="title"><br><br>
        <input name="t_description"  placeholder="description" value="<?php echo $t_description; ?>"><br><br>
        <input name="t_year" placeholder="year" value="<?php echo $t_year; ?>"><br><br>
        <input type="submit" value="submit">
    </form>
    
    <?php if(isset($_GET['error'])){ ?>
             <div class="error"><?php echo $_GET['error']; ?></div>
            
         <?php }elseif(isset($_GET['success'])){  ?>
            <div class="success"><?php echo $_GET['success']; ?></div>
         <?php }  ?>

         
    
</body>
</html>   