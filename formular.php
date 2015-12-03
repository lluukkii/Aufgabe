
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="test.css" />
<title>Meine erste Seite</title>
</head>
<body>

<?php
$anrede = '';
$vorname = '';
$nachname = '';
$strasse = '';
$ort = '';
$mitteilung = '';
$plz = '';

$err_anrede = '';
$err_vorname = '';
$err_nachname = '';
$err_strasse = '';
$err_plz = '';
$err_ort = '';
$err_mitteilung = '';



$nachricht = '';
$done = 'Ihre Daten wurden erfolgreich übermittelt';
$validierung = true;

	//Formulardaten in Variabeln speichern
	if(isset($_GET['anrede']))
	{
			$anrede = $_GET['anrede'];
	}
	if(isset($_GET['vorname']))
	{
			$vorname = $_GET['vorname'];
	}
	if(isset($_GET['nachname']))
	{
			$nachname = $_GET['nachname'];
	}
	if(isset($_GET['strasse']))
	{
			$strasse = $_GET['strasse'];
	}
	if(isset($_GET['ort']))
	{
			$ort = $_GET['ort'];
	}
	if(isset($_GET['plz']))
	{
			$plz = $_GET['plz'];
	}
	if(isset($_GET['mitteilung']))
	{
			$mitteilung = $_GET['mitteilung'];
	}
			//Auswertung Formulardaten
	
	if(isset($_GET['submit']))
	{
			if($anrede == '')
			{
				$err_anrede = 'Anrede auswählen';
				$validierung = false;				
			}
			if($vorname == '')
			{
				$err_vorname = 'Vorname fehlt';
				$validierung = false;				
			}
			if($nachname == '')
			{
				$err_nachname = 'Nachname fehlt';
				$validierung = false;				
			}
			if($strasse == '')
			{
				$err_strasse = 'Strasse fehlt';
				$validierung = false;				
			}
			if($ort == '')
			{
				$err_ort = 'Ort fehlt';
				$validierung = false;				
			}
			if($plz == '')
			{
				$err_plz = 'PLZ fehlt';
				$validierung = false;				
			}
			if($mitteilung == '')
			{
				$err_mitteilung = 'Bitte geben Sie Ihre Mitteilung ein';
				$validierung = false;				
			}
	}
			
				if($validierung and isset($_GET['submit']))
				{
					$nachricht .= 'Anrede: '.$anrede;
					$nachricht .= 'Vorname: '.$vorname;
					$nachricht .= 'Nachname: '.$nachname;
					$nachricht .= 'Strasse: '.$strasse;
					$nachricht .= 'PLZ: '.$plz;
					$nachricht .= 'Ort: '.$ort;
					$nachricht .= 'Nachricht: ';
					$nachricht .= $mitteilung;
					
			mail('marion.gasser@gally-websolutions.com', 'Kontaktformular Testseite', $nachricht);
			$ausgabe = "Die E-Mail wurde erfolgreich versendet. Vielen Dank ...";
			echo $validierung;
			echo $nachricht;
				}
			
		
			
?>

	<h2>Anmeldung Basel-Trip</h2>
	
	<form name="einfachesformular" action="?" method="get">
	
	<?php 
	
	$optionherr = '';
	$optionfrau = '';
	
	if($anrede == 'Herr'){
		$optionherr = 'selected="selected"';
	}
	if($anrede == 'Frau'){
		$optionfrau = 'selected="selected"';
	}
	?>
	
	<?php echo $err_anrede; ?>
	<label>Anrede</label>
	<select name="anrede">
		<option value="Frau"  <?php echo $optionfrau ?> >Frau</option> 
		<option value="Herr" <?php echo $optionherr ?> >Herr</option> 
	</select>
		</br>
		<label>Vorname</label>
		<input name="vorname" type="text" value="<?php echo $vorname ?>" />
		<?php echo $err_vorname; ?>
		</br>
		<label>Nachname</label>
		<input name="nachname" type="text" value="<?php echo $nachname ?>" />
				<?php echo $err_nachname; ?>
		</br>
		<label>Strasse</label>
		<input name="strasse" type="text" value="<?php echo $strasse ?>" />
		<?php echo $err_strasse; ?>
		</br>
		<label>Ort</label>
		<input name="ort" type="text" value="<?php echo $ort ?>" />
		<?php echo $err_ort; ?>
		</br>
		<label>PLZ</label>
		<input name="plz" type="text" value="<?php echo $plz ?>" />
		<?php echo $err_plz; ?>
		</br>
		<label>Mitteilung</label>
		<textarea name="mitteilung" rows="4" cols="50" ><?php echo $mitteilung ?></textarea>
		<?php echo "</br>";
			  echo $err_mitteilung;	
		?>	
		</br>
		<button type="submit" name='submit' >Senden</button>
		
		
		
	</form>

	
	
	
	

<div id="header">

<div id="content-wrapper">
	<div id="content1">Content1</div>
	<div id="content2">Content2</div>
</div>

<img src="pics/polar.jpg" alt="Polarlichter" width="50%"/></div>

	<h1>Willkommen in Basel ...</h1>
	
	
	<p1>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed 
	diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
	sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
	Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit </p1>
	<p2>
	amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
	eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam 
	voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet 
	clita kasd gubergren, no sea takimata sanctus est Lorem ipsum 
	dolor sit amet.</p2>
	


	
	
<div id="footer">
<p3>	Max Muster <br />
	Musterstrasse 33<br />
	3333 Basel</p3>

</div>

</body>
<!--
KOMMENTAR
-->


</html>

