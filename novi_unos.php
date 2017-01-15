<!DOCTYPE html>
<?php

	include("db_connection.php");
	
	if(isset($_GET['link']))    { $link = (int)$_GET['link']; }
	
	if(!isset($link)) { $link = '0'; }	
	
?>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" http-equiv="Content-Type" content="text/html charset="UTF-8"; />	
	<link rel="stylesheet" type = "text/css" href= "style.css" />


	<div id = "header">
	<a href="the_site.php" target="the_site.php"><img src="hzmo_logo.png" class="logo"/></a>
	<img src="Banner01.jpg" class = "banner" />
	<title>Change managemet</title>     
	</div>
</head>
<body>

<div id = "main-container">
   
	<div id="sidebar">
			   <!-- /. Lijevi sidebar  -->
			<nav class="navbar-default navbar-side" role="navigation">
		
			<ul class="nav" id="main-menu">

			
			<p style = "naslov">Change management </p>
				
				<li>
					<a  href="?link=1"> MS Serveri</a>
				</li>
				 <li>
					<a  href="?link=2" > LX Serveri</a>
				</li>
				<li>
					<a  href="?link=3" > IBM mainframe</a>
				</li>
				<li>
					<a   href="?link=4" name = "link4"> Cisco r/s</a>
				</li>	
				 <li>
					<a  href="?link=5" name = "link5"> Cisco IDS</a>
				</li>
				<li>
					<a  href="?link=6" name = "link6">Web_aplikacije </a>
				</li>
				<li>
					<a  href="?link=7" name = "link7"> Ostalo </a>
				</li>			
				<li>
					<a  href="?link=8"  name = "link8">Unos nove izmjene </a>
				</li>
			</ul>
			
			<a href="the_site.php" target="the_site.php"><img src="email.png" class="address"/></a>
			<a href="the_site.php" target="the_site.php"><img src="login.png" class = "address" /></a>
		
			</nav>  

	</div>


	<div class="right-side">
	
	<form method="POST" action="" >
	
	<label for="Kateg" >Kategorija izmjene</label>
	<select name="kategorija">
	<option value=""></option>';
	<?php
	$query = "SELECT 
			  ID, name
			  FROM kategorije
			  ORDER BY ID ASC";
			  
	$result = mysql_query($query);
	
	while($row = mysql_fetch_array($result))
	{
		$id   = $row["ID"];
		$naziv = $row["name"];
		
		echo '<option value="'.$id.'">'.$naziv.'</option>';
	}
	?>
	</select>
	<br />
	<label for="naslov_izmjene">Naslov izmjene</label>
	<input type="text" name="naslov" value="" /><br />
	<label for="opis_izmjene">Opis izmjene</label>
	<input type="text" name="izmjena" value="" /><br />
	
	<input type="submit" name="btn_save" value="Spremi" />
	</form>

	<?php
	if(isset($_POST["btn_save"]))
	{
		$id_kat  = $_POST["kategorija"];
		$ime_kat = $_POST["naslov"];
		$izmjena_kat = $_POST["izmjena"];
		
		
		if (!$_POST["kategorija"] or !$_POST["naslov"] or !$_POST["izmjena"]) {
			 
			 echo 'Nisu uneseni svi potrebni podaci';
		}
		else if ($_POST["kategorija"] and $_POST["naslov"] and $_POST["izmjena"]){

			$query ="INSERT INTO change_management (title, CategoryID, Notes)
			VALUES ('$ime_kat', '$id_kat', '$izmjena_kat')";
				
			$result = mysql_query($query);}
		if($result)
		{
			echo 'Nova izmjena je pohranjena';
		}
		else
		{
			echo 'Doslo je do pogreske kod spremanja podataka';
		}
	}
	if ($link == 0){
		// include 'page0.php';	
		echo 'Unos novih podataka';
	}
	if ($link == 1){
		include 'page1.php';
	}
	if ($link == '2'){
		include 'page2.php';
	}
	if ($link == '3'){
		include 'page3.php';
	}
	if ($link == '4'){
		include 'page4.php';
	}
	if ($link == '5'){
		include 'page5.php';
	}	 
	if ($link == '6'){
		include 'page6.php';
	}	 
	if ($link == '7'){
		include 'page7.php';
	}
	if ($link == '8'){
		header("Location: novi_unos.php");
	}

	?>
	
</div>	

</div>


</body>
</html>
