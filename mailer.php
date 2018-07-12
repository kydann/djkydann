<?php

$your_address = "deejaychrizz@gmail.com";

if (isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['message'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $content = "Haz sido contactado por: $name($email)

		Mensaje: $message

		Contestar a: $email
		";

    $headers = "From: $email" . PHP_EOL;
    $headers .= "Reply-To: $email" . PHP_EOL;
    $headers .= "MIME-Version: 1.0" . PHP_EOL;
    $headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
    $headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

    if (mail($your_address, $subject, $content, $headers)) {
        echo 'Enviado';
        header("location: index.php");
    }
} else {
    return false;
}
?>