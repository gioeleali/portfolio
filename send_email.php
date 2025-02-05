<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "gioeleali2001@gmail.com";
    $subject = "Nuovo Messaggio dal Form";
    $name = htmlspecialchars($_POST["fullname"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";

    $body = "Nome: $name\nEmail: $email\nMessaggio:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Messaggio inviato con successo!";
    } else {
        echo "Errore nell'invio del messaggio.";
    }
}
?>
