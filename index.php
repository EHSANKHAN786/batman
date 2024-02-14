<?php 
include "./includes/connection.php";

?>

<html>
    <head>
        <title>DASHBOARD</title>
        <link rel="stylesheet" href="./css/batman.css?version=<?php echo time();?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
      
      

    </head>
    <body>

<!------------------------------------------                       LOGO                  ------------------------------------------------------>


        <div class="container">
            <div class="logo"></div>
        </div>

        <div class="navbar">
            <div class="n"><a href="index.php">HOME</a></div>
            <div class="n"><a href="about.php">ABOUT</a></div>
            <div class="n"><a href="#">SERVICE</a></div>
            <div class="n"><a href="#">CONTACT</a></div>
            

            <?php if(isset($_COOKIE['uname'])){ ?>
                
                <div class="n"><a href="./logout.php"><?php echo $_COOKIE['uname']; ?></a></div>
            <?php }else{ ?>
                <div class="n"><a href="admin.php">Admin</a></div>
            <div class="n"><a href="login.php">LOGIN</a></div>
            <div class="n"><a href="signup.php">SIGN UP</a></div>

            <?php } ?>

        </div>
        <marquee behavior="scroll" direction="left"> <h1 style="color:red;">IF YOU WANT TO ACCESS ADMIN PAGE THEN LOGIN CREDINTIALS ARE  username: ahsan password: khann</h1></marquee>
        <br>



<!------------------------------------------                       IMAGE                  ------------------------------------------------------>



        <div class="batman1">
            <div class="img">
               <div class="heading">BATMAN</div>
               <p class="parag">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat doloribus</p>
            </div>
        </div>

<!------------------------------------------                     DESCRIPTION              ------------------------------------------------------>
  

        <h2>SOMETHING ABOUT BATMAN</h2>
        <div class="paragraph1">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, quidem? Beatae, qui! Nisi iste reiciendis ex numquam labore quibusdam cupiditate quam autem totam quasi a aspernatur, provident est at suscipit assumenda velit excepturi hic facere mollitia omnis voluptas pariatur tempora. Dolorem velit sed beatae hic quaerat tempora fugiat ducimus sit enim, repellendus laborum nihil ut tenetur quisquam rem. Magnam modi ipsa enim aspernatur blanditiis nihil impedit doloribus eos tempore. Numquam consequatur excepturi quo aperiam deleniti qui, atque commodi facere, dolore tempore maxime inventore id. Assumenda cupiditate obcaecati nostrum est dolores voluptate suscipit laudantium error, recusandae consequuntur unde sequi deleniti alias eveniet eligendi laborum illo blanditiis. Illum, possimus vitae? Deserunt odio sint quae facere eveniet placeat dolor quibusdam aperiam laudantium distinctio dolorum deleniti, fugit odit rerum doloremque incidunt doloribus repellat iusto dolorem quaerat eos delectus. Atque, eveniet unde sunt dolor nihil non aspernatur cum eaque quasi consequuntur quidem facere blanditiis in excepturi quas animi veniam nostrum architecto quisquam. Placeat voluptatibus, voluptatem ducimus reprehenderit esse perferendis consequuntur ut, nostrum minus expedita dolores ipsam voluptatum corrupti modi deleniti animi beatae? Labore porro impedit perspiciatis est, possimus in. Ea alias ex obcaecati quaerat voluptatibus porro odio neque, ipsa officia in. Eos explicabo nisi perspiciatis.</p>
        </div>


<!------------------------------------------                       CARDS                  ------------------------------------------------------>

      
        <h2 style="margin-bottom: 2%;">THE BATMAN TRIOLOGY</h2>
  
    <div class="container1">
       

            <?php 
            
            
            $query = "SELECT * FROM  task2";
            $query_run = mysqli_query($conn, $query);
            $check_card = mysqli_num_rows($query_run) > 0;

            if($check_card)
            {
                while($row = mysqli_fetch_array($query_run))
                {
                    ?>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="uploads/<?php echo $row['t_image']; ?>" class="card-img-top" alt="batman images" >
                        <br><br><h3 class="card-title"> <?php  echo $row['t_title']; ?></h3><hr>
                        <br><p class="card-text"><?php  echo $row['t_description']; ?></p>
                        <br><h5 class="card-title"> <?php  echo $row['t_year']; ?></h5><br><br>

                    </div>
                </div>
            </div>


                    <?php 
                }
            }
            else
            {
                echo "No Record Found";
            }


            ?>
    
    </div>


<!------------------------------------------                       FOOTER                ------------------------------------------------------>

        <div class="footer">
            <div class="g">LINKS</div>
            
        <div class="fooot">
            <div class="f"><a href="https://www.dc.com/">DC COMICS</a></div>
            <div class="f"><a href="https://en.wikipedia.org/wiki/Batman">WIKIPEDIA</a></div>
            <div class="f"><a href="">MOVIE LIST</a></div>
            <div class="f"><a href="">IMDB</a></div>
        </div></div>
        
    </body>
</html>