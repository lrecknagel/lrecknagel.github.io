<?php

	$name = isset($_POST["name"]) ? $_POST["name"] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$message = isset($_POST['message']) ? $_POST['message'] : '';
	$from = 'From: '.$name;
	$to = 'lucas91@me.com';
	$subject = 'Kontakt - Lucas Recknagel';
	$human = isset($_POST['human']) ? $_POST['human'] : '';
	$body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit'] && $human == '4') {
        if (mail ($to, $subject, $body, $from)) {
			echo '<p>Ihre Nachricht wurde versendet ;)</p>';
		} else {
		    echo '<p>Up´s da ist ein Fehler aufgetreten :/</p>';
		}
    } else if ($_POST['submit'] && $human != '4') {
		echo '<p>Sie haben die Anto-Spam Frage leider falsch beantwortet.</p>';
    }

?>