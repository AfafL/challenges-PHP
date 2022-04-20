
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $nomLivre = 'Voyage avec un âne dans les Cévennes';
        $lue = false;
        $annee = 1878;
        $prix = 6.0;
        ?>
        <table border='1'>  
            <tr><td>Nom du livre </td>
                <td> <?php echo $nomLivre; ?> </td>          
            </tr>
            <tr><td>Deja lu </td>
                <td> <?php
                if ($lue)
                    echo "Livre lu";
                echo "Livre non lu";
                ?>   </td>        
            </tr>
            <tr><td>Annee </td>
                <td>  <?php echo $annee; ?> </td>          
            </tr>

            <tr><td>Prix </td>
                <td> <?php echo $prix . " €"; ?> </td>          
            </tr>

        </table>   
    </body>
</html>