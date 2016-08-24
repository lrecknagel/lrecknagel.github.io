<?php
$BASEDIR = '../';
$NAV_CURRENT = 'contact';

include( $BASEDIR . 'inc/header.php' );

	$name = isset($_POST["name"]) ? $_POST["name"] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$message = isset($_POST['message']) ? $_POST['message'] : '';
	$from = 'From: '.$name;
	$to = 'lucas91@me.com';
	$subject = 'Kontakt - Lucas Recknagel';
	$human = isset($_POST['human']) ? $_POST['human'] : '';
	$body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if (isset($_POST['submit']) && $human == '4') {
        if (mail ($to, $subject, $body, $from)) {
			echo '<p>Ihre Nachricht wurde versendet ;)</p>';
		} else {
		    echo '<p>Up´s da ist ein Fehler aufgetreten :/</p>';
		}
    } else if (isset($_POST['submit']) && $human != '4') {
		echo '<p>Sie haben die Anto-Spam Frage leider falsch beantwortet.</p>';
    }

?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-4"></div>
			<div class="col-xs-4">
				<form method="post" action="index.php">
					<label>Name</label>
					<input name="name" placeholder="Vor- & Zuname">
					<label>Email</label>
					<input name="email" type="email" placeholder="Email Adresse">
					<label>Nachricht</label>
					<textarea name="message" placeholder="Geben Sie hier ihre Nachricht ein ..."></textarea>
					<label>Lösung von 2+2? (Anti-spam)</label>
					<input name="human" placeholder="Antwort ...">
					<input id="submit" name="submit" type="submit" value="Versenden">
				</form>
			</div>
			<div class="col-xs-4"></div>
		</div>
	</div>

<?php include( $BASEDIR . 'inc/footer.php' ); ?>