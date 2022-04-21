<?php include('inc/head.php'); ?>
<?php

function listFolder($location) {
    if (!$location or!is_dir($location)) {
        return false;
    }

    $matchedfiles = array();

    $all = opendir($location);
    while ($file = readdir($all)) {
        $fullPathLocation = $location . "/" . $file;
        if (is_dir($location . '/' . $file) and $file <> ".." and $file <> ".") {
            echo '<a href="index.php?location=' . $fullPathLocation . '">' . $file . '</a>&nbsp';
            echo '<a href="index.php?location=' . $fullPathLocation . '&action=delete">X</a><br>';
        } else if ($file == "..") {
            $fullPathLocation = dirname($location, 1);
            echo '<a href="index.php?location=' . $fullPathLocation . '">' . $file . '</a><br>';
//            echo ".. (folder parent)<br>";
        } else if ($file == ".") {
            
        } else {
            $path_info = pathinfo($file);
            if ($path_info['extension'] == 'txt' || $path_info['extension'] == 'html')
                echo '<a href="index.php?location=' . $fullPathLocation . '&action=edit">' . $file . '</a> (file)&nbsp';
            else
                echo $file . '(file)&nbsp';
            echo '<a href="index.php?location=' . $fullPathLocation . '&action=delete">X</a><br>';
        }
    }
    closedir($all);
}

$location = $_GET['location'];
if (is_null($location)) {
    $location = "./files";
}

$action = $_REQUEST['action'];
if (is_null($action)) {
    listFolder($location);
} else if ($action == 'delete') {
    //    URL : index.php?location=files/uk/churchill.txt & action=delete
    //    listing => listFolder("files/uk/")
    $parent = dirname($location, 1);
    if (file_exists($location)) {
        if (is_dir($location))
            rmdir($location);
        else
            unlink($location, null);
    }
    listFolder($parent);
} else if ($action == 'edit') {
    if (is_readable($location)) {
        // tester sile fichier est .txt ou .html
        $path_info = pathinfo($location);
        if ($path_info['extension'] == 'txt' || $path_info['extension'] == 'html') {
            $content = file_get_contents($location);
            $nbrows = intdiv(strlen($content), 70);
            if ($nbrows > 10)
                $nbrows = 10;
            echo '<form  action="index.php" method="post">';
            echo '<textarea name="new_content" rows="' . $nbrows . '" cols="80">' . $content . '</textarea><br>';
            echo '<input type="hidden" name="location" value ="' . $location . '"/>';
            echo '<input type="hidden" name="action" value ="save"/>';
            echo '<button  type="submit">Save File</button></form>';
        }
    }
} else if ($action == 'save') {
    // lire le contenu du fichier et le nom du fichier pour faire l'enregistrement
    $content = $_POST['new_content'];
    $filename = $_POST['location'];
    file_put_contents($filename, $content);
    $parent = dirname($filename, 1);
    listFolder($parent);
}
?>
<?php include('inc/foot.php'); ?>