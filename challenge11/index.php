<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
                require_once '_connect.php'; // $pdo store db connection instance

 // faire l'ajout avant l'affichage pour rafraichir la page avec les nouvelles donnees               
        if (isset($_GET['user_fname'])) {
            $fname = $_GET['user_fname'];
            $lname = $_GET['user_lname'];

            $query = "INSERT INTO friend (firstname,lastname) values ('$fname' , '$lname')";
//echo "la requete est $query";
            $statement = $pdo->prepare($query)->execute();
        }
        ?>

        <?php
        $query = "SELECT * FROM friend";
        $statement = $pdo->query($query);
        $friends = $statement->fetchAll();
        echo '<table border="1">';
        foreach ($friends as $friend) {
            echo '<tr><td>' . $friend['firstname'] . '</td>';
            echo '<td>' . $friend['lastname'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        ?>
        <form  action="index.php" method="get">
            <div>
                <label for="name">Firstname :</label>
                <input required="" type="text"  id="name"  name="user_fname">
            </div>
            <div>
                <label for="name">Lastname :</label>
                <input required="" type="text"  id="name"  name="user_lname">
            </div><!-- comment -->

            <div  class="button">
            </div>
            <button  type="submit">Add Friend</button>
        </form> 


    </body>
</html>
