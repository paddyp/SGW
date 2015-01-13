<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>SG 1956 Wambach</title>


<link rel="shortcut icon" href="img/favicon.ico" />


<link href="css/style.css" rel="stylesheet" type="text/css"/>
<!-- Hauptgroessen -->

<link href="css/desktop.css" 		rel="stylesheet" type="text/css" media="screen and (min-width: 1024px)"								/>
<link href="css/tablet.css" 		rel="stylesheet" type="text/css" media="screen and (min-width: 600px) and (max-width: 1024px)" 	/>
<link href="css/mobil.css" 			rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" 	/>

<script src="js/jquery-2_1_0.js">
</script>
</head>

<body>

<div class="main">
    <div class="header">
     	<div id="logo">
        	<img src="img/logo.png" />
        </div> 
        <div id="titel">
        	SG Wambach 1956 e.V.
        </div> 
        <div id="newsletter">
        Nichts verpassen? Newsleter abbonieren !
        <form>
        <input type="email" id="inputEmail" /> <input type="button" />
        </form>
        </div>
        
        <div id="impressum">
        	<a>Impressum</a>
        </div>
       
    </div>
     <div class="navigation">
     	<div id="content">
        	Startseite Neuigkeiten Sportangebote Ausfl&uuml;ge Termine &Uuml;ber uns
        </div>   
     </div>
    
    <div class="content">
         <?php
		 $id;
		 
		 if(!isset($_GET['id'])){
		 	$id = 1;
		 }else{
			$id = $_GET['id']; 
		 }
		 
		 switch($id)
		 {
			case 1: include('inc/startseite.php');break;
			case 2: include('inc/startseite2.php');break;
			default: include('inc/startseite.php'); 
		 }
		 ?>
        
    </div>
    
    <div class="footer">
    	<p>
    		Unter diesem link ist der aktuelle Stand der SG Wambach Seite einzusehen.
    	</p>
    </div>

</div>




</body>
</html>