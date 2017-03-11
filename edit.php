<!DOCTYPE html>
<html>
<head>
	<title>User Interface</title>
	<meta name="generator" content="TSW WebCoder 2013">
</head>
<body>
<center>
<h1>
Edit Contact
</h1>
<?php 
	//echo ("This is a test." . "<br />\n");
	$chid= trim($_GET['id']); 
	$database="mydatabase";

	if (file_exists($database)) 
	{
		$db = sqlite_open($database, 0666, $sqliteerror);
				if ($db)
		{
			//echo (" Ok." . "<br />\n");
			$sql = "SELECT name, phone FROM contacts WHERE id = " . $chid;
			//echo $sql;
			$result = sqlite_array_query($db, $sql);
			foreach ($result as $query){}
	?>
	
	<form action="editexe.php" method="post" name="userpass">
	<table width="250" border="0">
		<tr>
			<td width="90" align="right" valign="middle"><strong>Contact Name</strong></td>
			<td width="150" align="center" valign="middle"><input name="entername" type="text" value="<?php echo $query['name'];?>"></td>
		</tr>
		<tr>
			<td align="right" valign="middle"><strong>Contact Number</strong></td>
			<td align="center" valign="middle"><input name="enternumber" type="text" value="<?php echo $query['phone'];?>"></td>
		</tr>
		<tr>
			<td align="center"><input name="id" type="hidden" value="<?php echo $chid;?>"></td>
			<td align="center" valign="middle"><input name="enter" type="submit" value="Save"></td>
		</tr>
	</table>
	</form>

<?php
		
		}
		else
		{
			echo (" No." . "<br />\n");
			echo ($sqliteerror); 
		}
		
		
	}
	
?>
</center>

</body>
</html>