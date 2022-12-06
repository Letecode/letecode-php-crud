<?php 

    if($_POST['name'] and 
        $_POST['email'] and
        $_POST['country'] and
        $_POST['gender']
    ) {

        include_once 'database.php';
        $db = new Database();
        $save = $db->createApprenant($_POST['name'], $_POST['email'], $_POST['country'], $_POST['gender']);
        if(!$save) {
            echo "Error";
        } else {
            header('Location: ../index.php');
        }


    } else {
        header('Location: ../index.php');
    }

?>