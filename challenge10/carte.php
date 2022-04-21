<?php
session_start();  // a ecrire en premier pour 
$login = $_SESSION['name'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
 <?php
 include 'menu.php';
$panier=$_SESSION['pagnier'];
 if (isset($panier)){
 echo '<table border="1">';
 foreach($panier as $livre){
     echo '<tr><td>'.$livre.'</td></tr>';     
 }
 echo '</table>';
 }
 ?>
    </body>
</html>
