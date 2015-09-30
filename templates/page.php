<!DOCTYPE html>
<html>

<head>
    <title>SG Wambach</title>

    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="keywords" content="" />

    <link href="css/style.css" type="text/css" rel="stylesheet" />
</head>

<body>

<div class="wrapper">
    <div class="header">
        <a href="#" class="logo"><img src="img/logo.png" alt="Logo der Sportgemeinschaft Wambach"/></a>
        <div class="main_navigation">
            <a href="#" class="active">Startseite</a>
            <div class="menu">
                <a href="#">Sportangebote</a>
                <div class="submenu">
                    <a href="#">Aikido</a>
                    <a href="#">Body Fit</a>
                    <a href="#">Fu&szlig;ball</a>
                    <a href="#">Hobby Basketball</a>
                    <a href="#">Gymnastik M&auml;nner</a>
                    <a href="#">Krabbelgruppe</a>
                    <a href="#">Salsa Aerobic</a>
                    <a href="#">Tischtennisschule</a>
                    <a href="#">Tanz</a>
                    <a href="#">Turnen Kinder</a>
                    <a href="#">Wandern</a>
                </div>
            </div>
            <a href="#">Termine</a>
            <a href="#">Medien</a>
            <a href="#">&Uuml;ber uns</a>
        </div>
        <form class="newsletter">
            <label for="newsletter_email">Newsletter abonnieren</label><br />
            <input type="email" id="newsletter_email" placeholder="E-Mail-Adresse"/>
            <input type="submit" value="Ok"/><br />
            <a href="#">&raquo;&nbsp;mehr Informationen</a>
        </form>
        <div class="title_tab">SG Wambach 1956 e.V.</div>
    </div>
    <div class="content">
        <!-- TODO: currently hardcoded, dynamic content will go here -->
        <?php include "home.php" ?>
    </div>
    <div class="footer">
        <div class="title_tab">SG Wambach 1956 e.V.</div>
        <p>
            <a href="#">H&auml;ufig gestellte Fragen (FAQ)</a><br />
            <a href="#">Anmeldeformular</a><br />
            <a href="#">Hallenbelegung</a><br />
            <a href="#">Satzung</a><br />
            <a href="#">Impressum</a>
        </p>
        <p>
            Kontakt<br />
            Schanzenberg 31<br />
            D-65388 Schlangenbad-Wambach<br />
            +49 (0)6129 9080<br />
            diefenbach@sg1956wambach.de
        </p>
    </div>
</div>

</body>
</html>
