<?php 

    if(
        $_POST['id']
    ) {
        include_once 'database.php';
        $db = new Database();
        $deleted = $db->deleteApprenant($_POST['id']);
        if(!$deleted) {
            echo "Error";
        } else {
            header('Location: ../index.php');
        }


    } else {
        header('Location: ../index.php');
    }

?>