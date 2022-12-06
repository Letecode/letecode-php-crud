<?php 

    if($_POST['name'] and 
        $_POST['email'] and
        $_POST['country'] and
        $_POST['gender'] and 
        $_POST['id']
    ) {
        include_once 'database.php';
        $db = new Database();
        $update = $db->updateApprenant($_POST['id'], $_POST['name'], $_POST['email'], $_POST['country'], $_POST['gender']);
        if(!$update) {
            echo "Error";
        } else {
            header('Location: ../index.php');
        }


    } else {
        header('Location: ../index.php');
    }

?>