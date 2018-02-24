 <?PHP
 session_start();
			
			$_SESSION['login']="";
 
			session_destroy();
?>

	<html>
	<head>
	<title>Logout...</title>
	<style>
	body{
		text-align:center;
		font-falily:courier;
		
	}
	</style>
	</head>
	<body>

<h1>
	you have been Logged Out ..!!!
</h1>
	</body>
	</html>
