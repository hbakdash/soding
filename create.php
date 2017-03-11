<!DOCTYPE html>
<html>
<head>
	<title>User Interface</title>
	<meta name="generator" content="TSW WebCoder 2013">
</head>
<body>
<center>
<h1>
Create New Contact
</h1>
<?php 
	//echo ("This is a test." . "<br />\n");
	$database="mydatabase";

	if (file_exists($database)) 
	{
		$db = sqlite_open($database, 0666, $sqliteerror);
	?>
	
	<form action="createexe.php" method="post" name="userpass">
	<table width="250" border="0">
		<tr>
			<td width="90" align="right" valign="middle"><strong>Contact Name</strong></td>
			<td width="150" align="center" valign="middle"><input name="entername" type="text" value=""></td>
		</tr>
		<tr>
			<td align="right" valign="middle"><strong>Contact Number</strong></td>
			<td align="center" valign="middle"><input name="enternumber" type="text" value=""></td>
		</tr>
		<tr>
			<td align="center">&nbsp;</td>
			<td align="center" valign="middle"><input name="enter" type="submit" value="Add New"></td>
		</tr>
	</table>
	</form>

<?php
		
	}
	
?>
</center>

</body>
</html>