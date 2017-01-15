<!DOCTYPE html>
<?php
session_start();
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
			<nav  role="navigation">
		
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

	<div id="right_side">
	
	
		<?php
			if ($link == 0){
				include 'page0.php';
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
