
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function writeSecretSentence(string $param1, string $param2): string {
            $resultat = $param1 . " s'incline face à " . $param2;
            return $resultat;
        }

        echo writeSecretSentence('ane', 'feu');
        ?>
    </body>
</html>
