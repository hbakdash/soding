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
	$chn= trim($_POST['entername']); 
	//echo $chn;
	$chp= trim($_POST['enternumber']); 
	//echo $chp;
	$database="mydatabase";

	if (file_exists($database)) 
	{
		$db = sqlite_open($database, 0666, $sqliteerror);
		if ($db)
		{
			echo (" Ok." . "<br />\n");
			$sql = "INSERT INTO contacts (name, phone) VALUES ('" . $chn . "', " . $chp . ")";
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