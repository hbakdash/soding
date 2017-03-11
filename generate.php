<!DOCTYPE html>
<html>
<head>
	<title>Generate Database</title>
	<meta name="generator" content="TSW WebCoder 2013">
</head>
<body>

<?php 
	echo ("This is a database generator page" . "<br />\n");
	$database="mydatabase";

	if (file_exists($database)) 
	{
		$db = sqlite_open($database, 0666, $sqliteerror);
	}
	else
	{
		$db = sqlite_open($database, 0666, $sqliteerror);
		if ($db)
		{
			echo (" Ok." . "<br />\n");
			$sql = "CREATE TABLE contacts (id INTEGER PRIMARY KEY, name TEXT, phone INTEGER)";
			$query = sqlite_query($db, $sql, $error);
			echo $error;
		}
		else
		{
			echo (" No." . "<br />\n");
			echo ($sqliteerror); 
		}
	}	
	
?>

</body>
</html>