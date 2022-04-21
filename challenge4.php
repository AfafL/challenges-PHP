<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $filmes['La fille du Docteur Jekyll'] = ['John Agar', 'Gloria Talbott', 'Arthur Shields'];
        $filmes['Les deux visages du Dr Jekyll'] = ['Paul Massie', 'Dawn Addams', 'Christopher Lee'];
        $filmes['Le Professeur Foldingue'] = ['Eddie Murphy', 'Jada Pinkett', 'James Coburn'];

        foreach ($filmes as $titre => $acteurs) {
            echo 'Dans le film  ' . $titre . ', les principaux acteurs'. '<br> sont:';
            foreach($acteurs as $acteur){
                echo $acteur.', ';
            }
            echo '<br><br>';
        }
        ?>
    </body>
</html>
