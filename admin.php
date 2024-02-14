<?php 
include "./includes/connection.php";

?>


<html>
    <head>
        <title>admin page</title>
        <link rel="stylesheet" href="./css/login.css?version=<?php echo time();?>">

        
    </head>
    <body onload="getLocation();">

        <form action="./action/admin_action.php" method="post" class="locator" enctype="multipart/form-data" autocomplete="off">

            <h1>Admin Log In...</h1>
        <div class="username">  
        <i class="fa-solid fa-user"></i>
            <label for="User_Name">User Name:</label>
            <input type="text" id="User_Name" required placeholder="username" name="username">
            <br><br>

            <i class="fa-solid fa-lock"></i>
            <label for="Password">Password:</label>
            <input type="password" id="Password" required placeholder="Password" name="a_password">

            <input type="hidden" id="latitude" name="latitude"><br>
            <input type="hidden" id="longitude" name="longitude"><br>
        </div>

            <button onclick="this.innerHTML='Ooops!'">Login</button>

        </form>


        <?php if(isset($_GET['error'])){ ?>
             <div class="error"><?php echo $_GET['error']; ?></div>
            
         <?php }elseif(isset($_GET['success'])){  ?>
            <div class="success"><?php echo $_GET['success']; ?></div>
         <?php }  ?>






<script type="text/javascript">
            function getLocation(){
                if(navigator.geolocation){
                    navigator.geolocation.getCurrentPosition(showPosition);
                }
            }
            function showPosition(position){
                document.querySelector('.locator input[name = "latitude"]').value = position.coords.latitude;
                document.querySelector('.locator input[name = "longitude"]').value = position.coords.longitude;
            }
            // function showError(error){
            //     switch(error.code){
            //         case error.PERMISSION_DENIED:
            //         alert("You Must Allow The Request For Geolocation To Fill Out The Form");
            //         location.reload();
            //         break;
            //     }
            // }


        </script>
    </body>

</html>
    