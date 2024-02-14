


<?php
setcookie("uid","",time() - 3600, "/");
setcookie("uname","", time() - 3600, "/");

header("Location: index.php?success= You are successfully logged out");

?>