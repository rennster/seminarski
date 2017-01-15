<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" charset = "UTF-8">
		<link rel="stylesheet" type = "text/css" href= "style.css" />
	
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	</head>
<?PHP

include("db_connection.php");

$query = "SELECT 
		change_management.ID,
		change_management.creationdate,
		change_management.title,
		change_management.Notes,
		kategorije.name
		FROM change_management LEFT JOIN kategorije ON (change_management.CategoryID = kategorije.ID)
		WHERE change_management.CategoryID = '7'";

$result = mysql_query($query);

$i = 1;
if($result){
	while($row = mysql_fetch_array($result)){
		$id = $row["ID"];
		$create_date = $row["creationdate"];
		$title = $row["title"];
		$notes = $row["Notes"];
		$cat_name = $row["name"];
		
		echo '	
			<table border="1" style="table-layout:fixed;width:85%;text-align:center;">
				<thead>
					<tbody>
						<tr style="width:17%">
							<td>'.$i.'.</td>
							<td>'.$create_date.'</td>
							<td>'.$title.'</td>
							<td>'.$notes.'</td>
							<td>'.$cat_name.'</td>
						</tr>
					</tbody>
				</thead>
			</table>';
		
		$i++;
	}
}
	else{
		echo "Nema rezultata za prikaz";
		echo mysql_error();	
}
?>
</html>