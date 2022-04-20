
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

// TODO

if ($opponentWeapon=='fists') //poing
    $stevensonWeapon = 'gun';

if ($opponentWeapon=='whip')
    $stevensonWeapon = 'fists';

if ($opponentWeapon=='gun')
    $stevensonWeapon = 'whip';

echo " arme de l'adversaire est :".$opponentWeapon.'<br>';
echo " on choisi ".$stevensonWeapon." comme arme pour stevenson";

        ?>
    </body>
</html>
