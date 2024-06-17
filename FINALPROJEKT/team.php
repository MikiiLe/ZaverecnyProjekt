<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>



<body>

<title>FROGTILE</title>
    <header>
        <div class = "navbar">
        <img src="mainlogo.png" class="logo">
            
                    <li><a href="team.php">Team</a></li>
                    <li><a href="galerie.html">Galerie</a></li>
                    <li><a href="index.html">Home</a></li>
        </div>
    </header>

    <?php
    include 'obsah.php';
    ?>
</body>
</html>
