<?php
     session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mon nouveau site PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <ul>
            <li class="menu"><a href="index.php">Index</a></li>
            <?php
            if(isset($_SESSION) && !empty($_SESSION)){
            ?>
               <li class="menu">
                   <?php echo "<a>Bonjour $_SESSION[username]</a>";?>
               </li>   
        <?php 
               }else{
        ?>
            <li class="menu">
                <a href="login.php">Login</a>
            </li>
            <?php
              }

            ?>
            
        </ul>
    </header>