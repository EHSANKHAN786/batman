<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Form</title>
    <link rel="stylesheet" href="./css/task1.css?version=<?php echo time();?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>

<body>
    <form action="./action/task_action.php"  method="post" enctype="multipart/form-data"><br><br>

        <h1>Insert card</h1>

        <label for="file">Select an image:</label>
        <input type="file" id="file" name="t_image"><br><br>

        <label for="title">Enter title:</label>
        <input  name="t_title" id="title" placeholder="title"><br><br>

        <label for="description">Enter description:</label>
        <input name="t_description" id="description" placeholder="description"><br><br>

        <label for="year">Enter year:</label>
        <input name="t_year" id="year" placeholder="year"><br><br>

        <div id="errormessage"></div>

        <button onclick="this.innerHTML='Ooops!'">Submit</button>
    </form>
    <br>
    <?php if(isset($_GET['error'])){ ?>
             <div class="error"><?php echo $_GET['error']; ?></div>
            
         <?php }elseif(isset($_GET['success'])){  ?>
            <div class="success"><?php echo $_GET['success']; ?></div>
         <?php }  ?>

         
    
</body>
</html>   



<script src="task1.js">
</script>
