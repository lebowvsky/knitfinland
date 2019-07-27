<?php

// Appel de la classe
require_once('model/messageManager.php');

function sendMessage($name, $email, $subject, $message) {
    $messageManager = new messageManager($name, $email, $subject, $message);
    $sendedMessage = $messageManager->sendEmail();
}