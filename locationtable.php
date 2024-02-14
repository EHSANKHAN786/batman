<?php
include "./includes/connection.php";
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin table of location</title>
</head>
<body>
    <table border="1" cellspacing=0 cellpadding= 10>
        <tr>
            <td>#</td>
            <td>Username</td>
            <td>Password</td>
            <td>Maps</td>
            <td>latitude</td>
            <td>longitude</td>
        </tr>


        <?php
        

        $rows = mysqli_query($conn, "SELECT * FROM location_data ORDER BY id DESC");
        $i = 1;
        foreach($rows as $row)
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row["username"]; ?></td>
            <td><?php echo $row["a_password"]; ?></td>
            <td><?php echo $row["latitude"]; ?></td>
            <td><?php echo $row["longitude"]; ?></td>

            <td style="width:450px; height:450px;"> <iframe src='https://www.google.com/maps?q=<?php echo $row["latitude"]; ?>, <?php echo $row["longitude"]; ?>&hl=es;z=14&output=embed' width="100%" height="100%"></iframe></td>
        </tr>



    </table>
</body>
</html>