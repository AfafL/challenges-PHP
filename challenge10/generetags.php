
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        for ($i = 0; $i < 8; $i++) {
            echo '<div class="conteneurV">';

            for ($j = 0; $j < 8; $j++) {
                if (($i + $j) % 2 == 0)
                    echo '<div id="c' . $j . '.' . $i . '" class="case fonce "><div id="p' . $j . '.' . $i . '" ></div></div>'."\n";
                else
                    echo '<div id="c' . $j . '.' . $i . '" class="case "><div id="p' . $j . '.' . $i . '" ></div></div>'."\n";

                echo '<div class="tire"></div>'."\n";
            }
            echo '</div>'."\n";
        }
        ?>
    </body>
</html>

