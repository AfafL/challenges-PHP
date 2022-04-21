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
 $livres=["programmation PHP, 20euro","Histoire, 10euro","Comptabilite generale, 25euro"];
 
 echo '<table border="1">';
 for($i=0;$i<count($livres);$i++){
     echo '<tr><td>'.$livres[$i].'</td>';
      echo '<td><a href="index.php?refProduit='.$i.'">ajouter au panier</a></td>';    
     echo '</tr>';     
 }
 
 if (isset($_GET['refProduit'])){
 $panier=$_SESSION['pagnier'];
 $refP=$_GET['refProduit'];
 $refP= intval($refP);
 if (!isset($panier)){
     $panier=[];    
 }
 $panier[count($panier)]= $livres[$refP];
 $_SESSION['pagnier']=$panier;
 }
 
 echo '</table>';
 
 $panier=$_SESSION['pagnier'];
 echo "<br>il y a ".count($panier)." dans le pagnier" ;    

 ?>

    </body>
</html>
