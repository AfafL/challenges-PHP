
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $prenom = $_GET['user_fname'];
        $nom = $_GET['user_lname'];
        $email = $_GET['user_email'];
        $tel = $_GET['user_tel'];
        $sujet = $_GET['user_sujet'];
        $message = $_GET['user_message'];

        echo "Merci " . $prenom . " ".$nom . " de nous avoir contacté à propos de " . $sujet . "<br><br>";
        echo "Un de nos conseiller vous contactera soit à l’adresse " . $email . " ou par ";
        echo "téléphone au " . $tel . " dans les plus brefs délais pour traiter votre demande :<br><br>";
        echo $message;
        ?>
    </body>
</html>
