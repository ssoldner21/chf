<!DOCTYPE html>
<html>
<head>
	<title>Crud</title>
	<link rel="stylesheet" href="css/main.css" type="text/css" />
</head>

<body>
<div id="wrap">
	<div id="header">
	</div>
	
	<div id="content">
		<div id="main">
			<h1>Login</h1>
			<table id="UserLogin">
			<!-- Table header -->
				<thead>
					<tr>
						
					</tr>
				</thead>
				<tfoot>
					<tr>
						<td>
							<form action="login.php" method="post">
							Username:<input type="text" name="user"><br />
							Password:<input type="text" name="passwd"><br />
							<input type="submit" />
							</form>
						</td>
					</tr>
				</tfoot>
			
			<?php /*
				$con = mysql_connect("localhost","root","");
				if (!$con)
				{
				  die('Could not connect: ' . mysql_error());
				}
				
				mysql_select_db("crud", $con);

				$result = mysql_query("SELECT * FROM item");
				echo "<tbody>";
				while($row = mysql_fetch_array($result))
				  {
				  echo "<tr>";
				  echo "<td>" . $row['id'] . " " . "</td>";
				  echo "<td>" . $row['name'] . " " . "</td>";
				  echo "<td><a href=\"update-item.php?id=" . $row["id"] . "&" . "name=" . $row["name"] ."\">Edit</a></td>";
				  echo "<td><a href=\"delete-item.php?id=" . $row["id"] . "\">Delete</a></td>";
				  echo "</tr>";
				  }
				echo "</tbody>";
				*/
			?>
			</table>
			<!-- add these to the end of each record
			<p><a href="#">Edit Item</a></p>
			<p><a href="#">Delete Item</a></p> 
			
			Format nicely, use a stylized table, use seperate php pages for edit delete
			php redirect back to index.php 	
			-->
		</div>
	</div>
</body>

</html>


