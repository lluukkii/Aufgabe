<!doctype html>
<html>
  <head>
    <title>JEEE</title>
	
<style>
			body{
				margin-left: 100px;
				margin-right: 100px;
			}


			label {
			width: 120px;  
			display: block;
			float: left;
			}
			
			#content1{
				width: 45%;
				float: left;
			}
			
			#content2{
				width: 45%;
				float: right;
			}
				#footer{
				position: obsolute;
				margin-top: 220px;
				margin-left: 350px;
				display: block;
			}
			
			
</style>


  </head>
  <body>
  
  <?php
// define variables and set to empty values
$vornameErr = $nachnameErr = $anredeErr = $strasseErr = "";
$vorname = $nachname = $anrede = $strasse = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["vorname"])) {
     $vornameErr = "Vorname ist pflicht";
   } else {
     $vorname = test_input($_POST["vorname"]);
   }
  
   if (empty($_POST["nachname"])) {
     $nachnameErr = "Nachname ist Pflicht";
   } else {
     $nachname = test_input($_POST["nachname"]);
   }
    
   if (empty($_POST["strasse"])) {
     $strasseErr = "Strasse ist pflicht";
   } else {
     $strasse = test_input($_POST["strasse"]);
   }
}


?>
  
  
  
    <!-- Sichtbarer Dokumentinhalt im body -->
    <p>Das isch e Test! </p>
	<div id="header"><img src="header.jpg" alt="basel" width="50%"></div>
	
	<!-- Anrede (select), Vorname (input), Nachname (input), Strasse (input), Ort (input), PLZ (input), Mitteilung (textareas), senden (button)
	-->
	
	<p><span class="error">* Pflicht Feld!</span></p>
	<form name="einfachesformular" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	
	
	<label>Anrede</label>
	<select name="Anrede">					
  <option value="Frau">Frau</option>
  <option value="Herr">Herr</option>
  <option value="An">An</option>
</select>									
	<br />
<label>Vorname</label>
	<input name="Vorname" type="text" />	<?PHP= echo $vorname ?> <span class="error">* <?php echo $vornameErr;?></span> 
	<br />
<label>Nachname</label>
	<input name="Nachname" type="text" />	<span class="error">* <?php echo $nachnameErr;?></span>
	<br />
<label>Stasse</label>	
	<input name="Strasse" type="text" />	<span class="error">* <?php echo $strasseErr;?></span>
	<br />
<label>Ort</label>	
	<input name="Ort" type="text" />		
	<br />
<label>PLZ</label>	
	<input name="PLZ" type="text" />	
	<br />
<label>Mitteilung</label>
	<textarea name"mitteilung"rows="4" cols="50">	
	</textarea>
	<br />
<input type="Submit" name="Submit" value="Submit">	

	
	
	</form>
	
	<div id="content-wrapper">
	
	<div id="content1">            
		<div id="header"><img src="content1.jpg" alt="landschaft" width="20%"></div>
	<p>jeeeeeeeeeeeeeeeee content1
	jeeeeeeeeeeeeeeeee 
	content1jeeeeeeeeeeeeeeeee 
	content1jeeeeeeeeeeeeeeeee content1</p>
	</div>
	
	<div id="content2">          
		<div id="header"><img src="content2.jpg" alt="landschaft2" width="90%"></div>
	<p> das isch dr content 2 jeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee</p>
	</div>
	
	
	
	
	</div>
  </body>
  <footer>
  <div id="footer"></div>
  </footer>
</html>