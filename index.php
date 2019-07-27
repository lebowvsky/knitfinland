<?php
require('controler/frontend/frontend.php');
require('controler/frontend/frontendMessage.php');



try {
    if(isset($_GET['action'])) {
        if($_GET['action']== 'sendMessage'){
            if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
                if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
                    sendMessage($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message']);
                    accueil();
                }
            }
        }
    }
    else {
        accueil();
    }
}

catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}


