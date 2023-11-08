<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINCP</title>
    <link rel="stylesheet" href="css/styleadmincp.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <H3>WELCOME TO ADMIN</H3>
    <div class="wrapper">
    <?php
        include("config/config.php"); 
        include("modules/menu.php"); 
        include("modules/main.php"); 
      ?>
    </div>
</body>
</html>