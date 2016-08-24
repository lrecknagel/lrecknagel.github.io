<?php
	$BASEDIR = '';
	$NAV_CURRENT = 'home';

	include( $BASEDIR . 'inc/header.php' ); ?>

	<div class="container-fluid"><!-- BEGIN CONTAINER FLUID -->

		<div class="row brand-logo-bg">
			<div class="col-xs-4"></div>
			<div class="col-xs-4">
				<img src="img/base/logo.png" class="img-responsive brand-logo">
			</div>
			<div class="col-xs-4"></div>
		</div>
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4 social-logos">
				<a href="https://www.facebook.com/lucas.recknagel" target="_blank" style="target-new: tab;">
					<i class="fa fa-facebook fa-3x social-logo blue"></i>
				</a>
				<a href="https://twitter.com/lucasrecknagel" target="_blank" style="target-new: tab;">
					<i class="fa fa-twitter fa-3x social-logo red"></i>
				</a>
				<a href="https://github.com/lrecknagel" target="_blank" style="target-new: tab;">
					<i class="fa fa-github fa-3x social-logo yellow"></i>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-2"></div>
			<div class="col-xs-8 welcome-text">
				<h1>Herzlich Willkommen :)</h1>
				<p class="welcome_text">auf der Website von Lucas Recknagel, einem Masterstudenten an der Universität Dresden. Ich beschäftige mich in meinem Studium mit der Medieninformatik. In diesem Gebiet untersuche und entwerfe ich einfachere Bedienmöglichkeiten für diverse digitale Oberfläche wie Webseiten oder mobile Applikationen. Diese Webseite bietet eine Übersicht von Projekten aus der Universität sowie einigen privaten Projekten. Viel Spass beim stöbern!</p>
			</div>
			<div class="col-xs-2"></div>
		</div>

	</div><!-- END CONTAINER FLUID -->

	<?php
	include( $BASEDIR . 'inc/footer.php' );
?>