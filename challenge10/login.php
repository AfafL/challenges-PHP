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
        // tester le marqueur dans la session si l'utilisateur est deja connecte
        // deja connecte : il a deja recu le formulaire de login et il a saisie un identifie correcte
// cette page implemente plusieurs cas d'utilisation
// 1- envoi de formulaire pour les non connectes
// 2- valide la connexion d'un utilisateur (par stockage de login dans la session)
// 3- si l'utilisateur est deja connecte, elle affiche un message de bien venu
// 4- si l'utilisateur appuie sur logout, elle le deconnecte (par effacement de la session)        

        if (!isset($login)) {
            if (isset($_GET['user_name'])) {
                //2--------------------
                $login = $_GET['user_name']; // enregistrer l'indicateur de connexion dans la session
                $_SESSION['name'] = $login;
                include 'menu.php';
            } else {
                // 1----------
                ?>  <form  action="login.php" method="get">
                    <label for="name">Nom :</label>
                    <input required="" type="text"  id="name"  name="user_name">
                    <button  type="submit">Connexion</button>
                </form>           
        <?php
    }
} else {
    if (isset($_GET['logout'])) {
        // 4--------------------------
        session_destroy();
        ?>
                <form  action="login.php" method="get">
                    <label for="name">Nom :</label>
                    <input required="" type="text"  id="name"  name="user_name">
                    <button  type="submit">Connexion</button>
                </form>
    <?php
    } else {
        // 3-----------------------
        include 'menu.php';
    }
}
?>

    </body>
</html>
