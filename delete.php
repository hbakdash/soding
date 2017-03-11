<!DOCTYPE HTML PUBLIC >
<html>
<head>
	<title>User Interface</title>
	<meta name="generator" content="TSW WebCoder 2013">
</head>
<body>
<center>
<h1>
..
</h1>
<br>
<?php 
	$chid= trim($_GET['id']); 
	
	$database="mydatabase";

	if (file_exists($database)) 
	{
		$db = sqlite_open($database, 0666, $sqliteerror);
		if ($db)
		{
			echo (" Ok." . "<br />\n");
			$sql = "DELETE FROM contacts WHERE id=" . $chid;
			echo $sql;
			$query = sqlite_query($db, $sql, $error);
			echo $error;
		}
		else
		{
			echo (" No." . "<br />\n");
			echo ($sqliteerror); 
		}
	}
	
	
		header("Location: main.php");
	
?>

</center>

</body>
</html>