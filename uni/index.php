<?php
$BASEDIR = '../';
$NAV_CURRENT = 'uni';

include( $BASEDIR . 'inc/header.php' ); ?>

<div class="container-fluid">
	<div class="row">

		<div class="col-xs-1"></div>

		<div class="col-xs-10">

			<!-- Filter Controls -->
			<ul id="filter" class="uk-subnav uk-subnav-pill">
				<li class="uk-active" data-uk-filter=""><a href="#">Alle</a></li>
				<li data-uk-filter="filter-uni"><a href="#">Uni</a></li>
				<li data-uk-filter="filter-private"><a href="#">Eigene Projekte</a></li>
				<li data-uk-filter="filter-web"><a href="#">Webentwicklung</a></li>
				<li data-uk-filter="filter-design"><a href="#">Design</a></li>
				<li data-uk-filter="filter-photo"><a href="#">Photo</a></li>
			</ul>

			<!-- Dynamic Grid -->
			<div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 tm-grid-heights" data-uk-grid="{gutter: 20, controls: '#filter'}" style="position: relative; margin-left: -20px; height: 394px;">

				<div data-uk-filter="filter-uni, filter-web" data-grid-prepared="true" style="position: absolute; box-sizing: border-box; padding-left: 20px; padding-bottom: 20px; top: 0px; left: 0px; opacity: 1;">
					<div class="uk-panel-box">
						<img class="img_project" src="img/img_pub.png">
						<p>
							<strong>Publikationsplugin<br/></strong>
							Für das Interactive Media Lab Dresden entwickle ich zur Zeit an einem Wordpress Plugin mit Welchem sich Publikationen, Konferenzen und zugehörige Personen einfach verwalten lassen.
						</p>
					</div>
				</div>

				<div data-uk-filter="filter-private, filter-web" data-grid-prepared="true" style="position: absolute; box-sizing: border-box; padding-left: 20px; padding-bottom: 20px; top: 0px; left: 210.6875px; opacity: 1;">
					<div class="uk-panel-box">
						<img class="img_project" src="img/img_3dev.png">
						<p>
							<strong>3developers<br/></strong>
							Seit Anfang 2013 habe ich mich mit zwei Freunden aus der Universität zusammen geschlossen und bieten unsere Dienste für alle Arten der Webentwicklung an. Dabei haben wir Projekte von der einfachen Website bis zum komplexen Datenbanksystem durchgeführt.<br/>
							<a href="https://www.3delopers.de/"><button>3developers</button></a>
						</p>
					</div>
				</div>

				<div data-uk-filter="filter-uni" data-grid-prepared="true" style="position: absolute; box-sizing: border-box; padding-left: 20px; padding-bottom: 20px; top: 0px; left: 421.375px; opacity: 1;">
					<div class="uk-panel-box">
						<img class="img_project" src="img/img_xdat.png">
						<p>
							<strong>XDAT - Visualisierung<br/></strong>
							Im Sommersemester 2013 habe ich im Rahmen der Vorlesung Interkative Informationsvisualisierung in einem Team an Verbesserungen für die Software XDAT gearbeitet. Diese dient der Darstellung von Datensätzen mit >2 Dimensionen.<br/>
							<a href="http://gitlab.3developers.de/tomh/xdat"><button>Software&amp;Quellcode</button></a>
						</p>
					</div>
				</div>

				<div data-uk-filter="filter-web, filter-private" data-grid-prepared="true" style="position: absolute; box-sizing: border-box; padding-left: 20px; padding-bottom: 20px; top: 0px; left: 632.0625px; opacity: 1;">
					<div class="uk-panel-box">
						<img class="img_project" src="img/img_zareck.png">
						<p>
							<strong>Zahnarztpraxis Recknagel<br/></strong>
							Eine SinglePage Website die als eigenständiges Projekt entwickelt wurde. Die Webseite nutzt kein CMS oder PHP sondern nur zwei kleine Bibliotheken und HTML5.<br/>
							<a href="http://zahnarztpraxis-recknagel.de/"><button>Zur Website</button></a>
						</p>
					</div>
				</div>

				<div data-uk-filter="filter-web, filter-private" data-grid-prepared="true" style="position: absolute; box-sizing: border-box; padding-left: 20px; padding-bottom: 20px; top: 132px; left: 0px; opacity: 1;">
					<div class="uk-panel-box">
						<img class="img_project" src="img/img_teamkyff.png">
						<p>
							<strong>Team Kyffhäuser<br/></strong>
							Die Webseite für das Team kyffhäuser, meinem Lauf- &amp; Radfahrteam wurde mit Wordpress umgesetzt um jedem Teammitglied die Nutzung zu ermöglichen.<br/>
							<a href="http://www.team-kyffhaeuser.bike/"><button>Team Kyffhäuser</button></a>
						</p>
					</div>
				</div>

				<div data-uk-filter="filter-private, filter-design" data-grid-prepared="true" style="position: absolute; box-sizing: border-box; padding-left: 20px; padding-bottom: 20px; top: 152px; left: 210.6875px; opacity: 1;">
					<div class="uk-panel-box">
						<img class="img_project" src="img/img_jejeune.jpg">
						<p>
							<strong>Jejune Insitute<br/></strong>
							Ein Grafik Rework auf Basis eines Low-Res Bildes. Die Inspiration zu diesem Rework kam von der Reportage "The Insitute (2013)". Ich wollte das Logo gern als HighRes Hintergund für meinen Computer benutzen und habe dies mittles Adobe Illustrator nachgebaut.<br/>
							<a href="img/download/jejune_high_res.png"><button>Download</button></a>
						</p>
					</div>
				</div>

				<!--<div data-uk-filter="filter-b" data-grid-prepared="true" style="position: absolute; box-sizing: border-box; padding-left: 20px; padding-bottom: 20px; top: 212px; left: 421.375px; opacity: 1;">
					<div class="uk-panel-box">
						<img class="img_project" src="img/img_jejeune.jpg">
						<p>This is a project example box to test the floating and the common layout scheme. It could hold a bunch of text and one image. A lightbox with further info will be implemented later</p>
					</div>
				</div>

				<div data-uk-filter="filter-a" data-grid-prepared="true" style="position: absolute; box-sizing: border-box; padding-left: 20px; padding-bottom: 20px; top: 172px; left: 632.0625px; opacity: 1;">
					<div class="uk-panel-box">
						<img class="img_project" src="img/img_jejeune.jpg">
						<p>This is a project example box to test the floating and the common layout scheme. It could hold alightbox with further info will be implemented later</p>
					</div>
				</div>-->
			</div>
		</div>

		<div class="col-xs-1"></div>

	</div>
</div>

<?php include( $BASEDIR . 'inc/footer.php' ); ?>