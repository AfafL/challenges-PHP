
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $donnees_valides=1;
        $prenom = $_GET['user_fname'];
        $nom = $_GET['user_lname'];
        $email = $_GET['user_email'];
        $tel = $_GET['user_tel'];
        $sujet = $_GET['user_sujet'];
        $message = $_GET['user_message'];

        $email=filter_var($email,FILTER_VALIDATE_EMAIL);
        
        if (strlen($tel)==0 || strlen($nom)==0 || strlen($email)==0)
            $donnees_valides=0;
        if (strlen($prenom)==0 || strlen($sujet)==0 || strlen($message)==0)
            $donnees_valides=0;    
        
        if ($donnees_valides==1) {
        echo "Merci " . $prenom . " ".$nom . " de nous avoir contacté à propos de " . $sujet . "<br><br>";
        echo "Un de nos conseiller vous contactera soit à l’adresse " . $email . " ou par ";
        echo "téléphone au " . $tel . " dans les plus brefs délais pour traiter votre demande :<br><br>";
        echo $message;
        }
        else {
            echo "certaines donnees sont invalides, veuillez resaisir";
        }
 
        
// autre methode du teste de validation        
//        if (!is_null($tel) && !is_null($nom) && !is_null($email) && !is_null($prenom) && !is_null($sujet) && !is_null($message)){      
//        echo "Merci " . $prenom . " ".$nom . " de nous avoir contacté à propos de " . $sujet . "<br><br>";
//        echo "Un de nos conseiller vous contactera soit à l’adresse " . $email . " ou par ";
//        echo "téléphone au " . $tel . " dans les plus brefs délais pour traiter votre demande :<br><br>";
//        echo $message;
//        }
//        else {
//            echo "certaines donnees sont invalides, veuillez resaisir";
//        }        
        
        
        
        ?>
    </body>
</html>
