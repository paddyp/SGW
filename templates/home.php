<?php 
    // TODO: read the news items and events from DB
    $news_items = array(array('SG 1956 Wambach unterwegs auf dem Soonwaldsteig', '10.09 - 13.092015. 3 Tage unterwegs auf den Soonwaldsteig! Sportliche Wanderungen um die 30km pro Tag!', '10.09.2015'),
                        array('Spiel - Spa&szlig; - Abenteuer', 'ACHTUNG: Das Spiel-Spa&szlig;-Abenteuer EVENT findet aufgrund der gro&szlig;en Teilnehmerzahl am 31.05.2015 um 10 Uhr in der Turnhalle B&auml;rstadt statt.', '31.05.2015'),
                        array('Gauwandertag am 14.05.2015', 'Der Turngau S&uuml;d-Nassau l&auml;dt an Christihimmelfahrt zum traditionellen Gauwandertag nach Eltville-Erbach ein. Wir wollen gerne unseren Titel aus dem letzten Jahr verteidigen und brauchen Eure Hilfe!!!', '14.05.2015'),);
    $events = array(array('Weihnachtsfeier', '06.12.2015 ganzt&auml;gig', 'B&uuml;rgerhaus/Wambach'),
                        array('Halloweenwanderung', '30.10.2015 18:00', 'B&uuml;rgerhaus/Wambach-Wambacher M&uuml;hle'),
                        array('Sch&uuml;ler- und Jugendzeltlager', '11.07.2015 ganzt&auml;gig', 'Sportgel&auml;nde'),
                        array('Tag der offenen T&uuml;r der SG', '26.04.2015 ganzt&auml;gig', 'B&uuml;rgerhaus'),);
 ?>
    <div class="stage">
        <div class="column_small">
            <a class="stage_frame stage_button" href="#"><div class="button_text">Anmeldeformular</div></a>
            <a class="stage_frame stage_button" href="#"><div class="button_text">Satzung</div></a>
            <a class="stage_frame stage_button" href="#"><div class="button_text">Hallenbelegung</div></a>
        </div>
        <div class="column_big">
            <a href="#" class="stage_frame image_highlight stage_highlight_big">
                <img src="img/news1.png" />
                <div class="details">
                    <p>04.07.2014 - Die SG sagt danke!</p>
                    <p>
                        Ein tolles Dauerwerbebanner schm&uuml;ckt seit einigen Tagen den "Lindenplatz" vor dem B&uuml;rgerhaus Wambach.
                    </p>
                </div>
            </a>
        </div>
        <div class="column_small">
            <a class="stage_frame image_highlight stage_highlight_small" href="#">
                <img src="img/news2.png" />
                <div class="details">
                    <p>Gauwandertag 2014</p>
                </div>
            </a>
            <a class="stage_frame image_highlight stage_highlight_small" href="#">
                <img src="img/news3.png" />
                <div class="details">
                    <p>Karfreitagswanderung</p>
                </div>
            </a>
        </div>
    </div>
    <div class="tiles">
        <div class="tile _33 x2">
            <p>Aktuelles</p>
            <?php
                foreach($news_items as $index => $item)
                {
                    print "<a href=\"#\" class=\"news_item\">
                        <p> $item[0] </p>
                        <p> $item[1] </p>
                        <p> $item[2] </p>
                    </a>";
                }
             ?>
        </div>
        
        <div class="tile _33">
            <p>Tanz</p>
            <a href="#" class="image_highlight">
                <img src="img/dance.png" />
                <div class="details">
                    <p>&Uuml;berschrift</p>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
                </div>
            </a>
        </div>
        
        <div class="tile _33">
            <p>Termine</p>
            <?php 
                foreach($events as $index => $event)
                {
                    print "<a href=\"#\" class=\"event\">
                        <p> $event[0] </p>
                        <p> $event[1] </p>
                        <p> $event[2] </p>
                    </a>";                    
                }
             ?>
        </div>
        <div class="tile _66"><p>Weitere Sportangebote</p></div>
        <div class="tile _33"><p>Sponsoren</p>[Logos]</div>
        <div class="tile _33"><p>Medien</p></div>
        <div class="tile _33"><p>Eine Webseite von</p>[Logo + Text]</div>
        
    </div>
    <div class="welcome_text">
        <div class="heading">Willkommen bei der Sportgemeinschaft Wambach!</div>
        <p>Spalte 1. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam.</p>
        <p>Spalte 2. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<br /><br /> At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
        <p>Spalte 3. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
    </div>
