<?php
include "./includes/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TABLE</title>
    <style>
      
        table, th, td {
          /* display: flex;
    justify-content: center; */
  border: 1px solid black;
  border-collapse: collapse;
  padding: 10px;
  /* text-align: center; */
  
  background-color:white;
}
    </style>
</head>
<body>
<table action="./action/task_action.php">
            <tr>
                <th>Sr. no</th> 
                <th>Images</th> 
                <th>title</th>
                <th>description</th>
                <th>year</th>
                <th colspan="3">Action</th>
            </tr>
            <?php
            // $i=1;
            $sql="Select * from task2";
            $result = $conn->query($sql);

if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {

    echo '<tr>
    <td>'.$row['t_id'].'</td>
    <td><img height="100" width="100" src="uploads/'.$row['t_image'].'"></td>
    <td>'.$row['t_title'].'</td>
    <td>'.$row['t_description'].'</td>
    <td>'.$row['t_year'].'</td>
    <td><a href="task1.php">insert</a></td>
    <td><a href="edit_task.php?t_id='.$row['t_id'].'">Edit</a></td>
    <td><a href="./action/delete_task_action.php?t_id='.$row['t_id'].'">Delete</a></td>

    </tr>';
    //  $i++;
  }
}else{
    echo '<tr>
    <td colspan="4">No data</td>
    </tr>';
}
            ?>
            </table>
</body>
</html>