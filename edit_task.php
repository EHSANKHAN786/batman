<?php
include "./includes/connection.php";
if(isset($_GET['t_id'])){   
    $t_id = $_GET['t_id'];
    $sql="select * from task2 WHERE t_id='$t_id'";

    $result = $conn->query($sql);
    if($result-> num_rows>0){
        $row = $result->fetch_assoc();
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
    <title>Edit Form</title>
    <link rel="stylesheet" href="./css/edit.css?version=<?php echo time();?>">
</head>
<body>
    <form action="./action/edit_task_action.php?t_id=<?php echo $t_id; ?>" method="post"><br><br>
        <h1>Edit card..</h1>
      
        <label for="title">Enter title:</label>
        <input  name="t_title" id="title" value="<?php echo $t_title; ?>" placeholder="title"><br><br>

        <label for="description">Enter description:</label>
        <input name="t_description" id="description" placeholder="description" value="<?php echo $t_description; ?>"><br><br>

        <label for="year">Enter year:</label>
        <input name="t_year" id="year" placeholder="year" value="<?php echo $t_year; ?>"><br><br>

        <button>Submit</button>
    </form>
    
    <?php if(isset($_GET['error'])){ ?>
             <div class="error"><?php echo $_GET['error']; ?></div>
            
         <?php }elseif(isset($_GET['success'])){  ?>
            <div class="success"><?php echo $_GET['success']; ?></div>
         <?php }  ?>

         
    
</body>
</html>   