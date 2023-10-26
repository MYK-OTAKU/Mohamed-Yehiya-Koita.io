<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "m2017koita@gmail.com"; // Remplacez par votre adresse e-mail
    $subject = "Nouveau message depuis le formulaire de contact";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "OK";
    } else {
        http_response_code(500);
        echo "Erreur lors de l'envoi de l'e-mail.";
    }
}
?>
