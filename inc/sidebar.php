<?php ?>

<div id="sticky-sidebar">
	<ul>
		<li>
			<a href="/contact" <?php if ( isset( $NAV_CURRENT ) && $NAV_CURRENT == 'contact' ) { echo ' class="lr-email active"'; } else { echo ' class="lr-email"'; } ?>>
				<i class="fa fa-envelope 2x"></i>
				<span>Kontakt</span>
			</a>
		</li>
		<li>
			<a href="/impressum" <?php if ( isset( $NAV_CURRENT ) && $NAV_CURRENT == 'impressum' ) { echo ' class="lr-info active"'; } else { echo ' class="lr-info"'; } ?>>
				<i class="fa fa-info-circle 2x"></i>
				<span>Impressum</span>
			</a>
		</li>
		<li>
			<a href="/disclaimer" <?php if ( isset( $NAV_CURRENT ) && $NAV_CURRENT == 'disclaimer' ) { echo ' class="lr-datenschutz active"'; } else { echo ' class="lr-datenschutz"'; } ?>>
				<i class="fa fa-lock 2x"></i>
				<span>Datenschutz</span>
			</a>
		</li>
	</ul>
</div>