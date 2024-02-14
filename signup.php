<?php 
include "./includes/connection.php";

?>


<html>
    <head>
        <title>signup page</title>
        <link rel="stylesheet" href="./css/signup.css?version=<?php echo time();?>">

    </head>
    <body>

        <form action="./action/signup_action.php" method="post" enctype="multipart/form-data">

            <h1> Sign Up...</h1>
            
        <div class="username">
            <i class="fa-solid fa-user"></i>
            <label for="User_Name">User Name:</label>
            <input type="text" id="User_Name" required placeholder="Enter username" name="s_username">
            <br><br>


            <i class="fa-solid fa-lock"></i>
            <label for="Password">Password:</label>
            <input type="password" id="Password" required placeholder="Enter Password" name="s_password">
            <br><br>

            <i class="fa-solid fa-envelope"></i>
            <label for="Email">Email:</label>
            <input type="email" id="Email" required placeholder="Enter Email" name="s_email">
        
        </div>
            
            <button>Sign up</button>

        </form>





        <?php if(isset($_GET['error'])){ ?>
             <div class="error"><?php echo $_GET['error']; ?></div>
            
         <?php }elseif(isset($_GET['success'])){  ?>
            <div class="success"><?php echo $_GET['success']; ?></div>
         <?php }  ?>


    </body>

</html>
    