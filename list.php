<!DOCTYPE html>
<html>
<head>
	<title>User Interface</title>
	<meta name="generator" content="TSW WebCoder 2013">
</head>
<body>
<center>
<h1>
List Contacts Page
</h1>

<?php 
	//echo ("This is a test." . "<br />\n");
	$database="mydatabase";
	?>
	<form action="createexe.php" method="post" name="userpass">
	<table width="250" border="0">
<?php
	if (file_exists($database)) 
	{
		$db = sqlite_open($database, 0666, $sqliteerror);
		if ($db)
		{
			$sql= "SELECT id, name, phone FROM contacts";
			$query = sqlite_array_query($db, $sql, SQLITE_ASSOC);
			foreach ($query as $entry) {
		?>
		<tr>
			<td width="90" align="left" valign="middle"><strong>
			<?php
			echo $entry['name'];
			?>
			</strong></td>
			<td width="90" align="left" valign="middle"><strong>
			<?php
			echo $entry['phone'];
			?>
			</strong></td>
			<td width="90" align="left" valign="middle">
			<?php 
			echo "<a href=\"edit.php?id=".$entry['id']."\">";
			echo "Edit";
			?>
			</a></td>
			<td width="90" align="left" valign="middle">
			<?php
			echo "<a href=\"delete.php?id=".$entry['id']."\">";
			echo "Delete";
			?>
			</a></td>
		</tr>
		<?php		
			//echo 'Name: ' . $entry['name'] . '  Phone: ' . $entry['phone'];
			//echo "<br />\n";
}		}
		else
		{
			echo (" No." . "<br />\n");
			echo ($sqliteerror); 
		}

	}
	
	
	?>
	</table>
	</form>
	
	<a href="main.php">Main Page</a>

</center>

</body>
</html>