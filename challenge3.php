<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $livres['Treasure Island'] = 1883;
        $livres['Kidbapped'] = 1886;
        $livres['My shadow'] = 1885;
        
        
        asort($livres);

        foreach($livres as $key=>$livre){
            echo '> '.$key.' - '.$livre .'<br>';
        }
        
        ?>
    </body>
</html>
