<?php
    include_once '../model/question.php';
    include_once '../controller/blog.php';

    $error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $userC = new blog();
    if (
        isset($_POST["sujet_question"]) && 
        isset($_POST["message_question"]) &&
        isset($_POST["categorie_question"]) && 
        isset($_POST["id_patient"]) 
    ) {
        if (
            !empty($_POST["sujet_question"]) && 
            !empty($_POST["message_question"]) && 
            !empty($_POST["categorie_question"]) && 
            !empty($_POST["id_patient"])
        ) {
            $user = new question(
                $_POST['sujet_question'],
                $_POST['message_question'], 
                $_POST['categorie_question'],
                $_POST['id_patient']
            );
            $userC->ajouterquestion($user);
            header('Location:afficherquestions.php');
        }
        else
            $error = "Missing information";
    }

    
?>