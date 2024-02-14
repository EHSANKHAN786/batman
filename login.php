<?php 
include "./includes/connection.php";

?>


<html>
    <head>
        <title>Login page</title>
        <link rel="stylesheet" href="./css/login.css?version=<?php echo time();?>">

    </head>
    <body>

        <form action="./action/login_action.php" method="post" enctype="multipart/form-data">

            <h1>Log In...</h1>
        <div class="username">  
        <i class="fa-solid fa-user"></i>
            <label for="User_Name">User Name:</label>
            <input type="text" id="User_Name" required placeholder="username" name="l_username">
            <br><br>

            <i class="fa-solid fa-lock"></i>
            <label for="Password">Password:</label>
            <input type="password" id="Password" required placeholder="Password" name="l_password">
        </div>

            <button onclick="this.innerHTML='Ooops!'">Login</button>

        </form>


        <?php if(isset($_GET['error'])){ ?>
             <div class="error"><?php echo $_GET['error']; ?></div>
            
         <?php }elseif(isset($_GET['success'])){  ?>
            <div class="success"><?php echo $_GET['success']; ?></div>
         <?php }  ?>





    </body>

</html>
    