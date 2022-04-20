
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $message1 ="0@sn9sirppa@#?ia'jgtvryko1";
	$message2 ="q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
	$message3 ="aopi?sgnirts@#?sedhtg+p9l!";
        
        $l = strlen($message1)/2; // calcul de la longueur divisee par 2
        $subMessage1= substr($message1, 5,$l); // extraction d'une sous-chaine de la chaine par indice
        $subMessage1=str_replace("@#?", " ",$subMessage1); // remplacement d'un mot par un autre
        $subMessage1=strrev($subMessage1); // renversement de l'ordre des caracteres
        
         $l = strlen($message2)/2; // calcul de la longueur divisee par 2
        $subMessage2= substr($message2, 5,$l); // extraction d'une sous-chaine de la chaine par indice
        $subMessage2=str_replace("@#?", " ",$subMessage2); // remplacement d'un mot par un autre
        $subMessage2=strrev($subMessage2); // renversement de l'ordre des caracteres
        
        $l = strlen($message3)/2; // calcul de la longueur divisee par 2
        $subMessage3= substr($message3, 5,$l); // extraction d'une sous-chaine de la chaine par indice
        $subMessage3=str_replace("@#?", " ",$subMessage3); // remplacement d'un mot par un autre
        $subMessage3=strrev($subMessage3); // renversement de l'ordre des caracteres

        
        echo "Message dechiffre: ".$subMessage1.' '.$subMessage2.' '.$subMessage3.' ';
        
        ?>
    </body>
</html>