<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $destinataire = "m2017koita@gmail.com";
   $sujet = "Nouveau formulaire de contact soumis";
   $contenu = "Nom: " . $_POST["name"] . "\n";
   $contenu .= "Email: " . $_POST["email"] . "\n";
   $contenu .= "Sujet: " . $_POST["subject"] . "\n";
   $contenu .= "Message: " . $_POST["message"] . "\n";

   // Envoyer l'e-mail
   mail($destinataire, $sujet, $contenu);

   // Redirection vers une page de confirmation
   header("Location: ok.html");

   exit();
}
?>
