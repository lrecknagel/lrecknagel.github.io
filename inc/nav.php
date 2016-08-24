<?php ?>

<div class="navbar" role="navigation">
	<div class="container-fluid">

		<!-- Menu Title for Mobile Menu -->
		<!--<span class="mobile_nav_title">Menü</span>-->
		<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
			<span class="fa fa-bars fa-2x"></span>
		</button>

		<div class="navbar-collapse collapse navbar-responsive-collapse" id="navbar-collapse-1">
			<ul class="nav navbar-nav">

				<li id="home" <?php if ( isset( $NAV_CURRENT ) && $NAV_CURRENT == 'home' ) echo ' class="active"'; ?>>
					<a href="/">Home</a>
				</li>
				<li id="aboutme" <?php if ( isset( $NAV_CURRENT ) && $NAV_CURRENT == 'aboutme' ) echo ' class="active"'; ?>>
					<a href="/aboutme">Ich</a>
				</li>
				<li id="uni" <?php if ( isset( $NAV_CURRENT ) && $NAV_CURRENT == 'uni' ) echo ' class="active"'; ?>>
					<a href="/uni">Projekte &amp; Uni</a>
				</li>
				<!--<li id="projects" <?php if ( isset( $NAV_CURRENT ) && $NAV_CURRENT == 'projects' ) echo ' class="active"'; ?>>
					<a href="/projects">Projekte</a>
				</li>-->

			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>