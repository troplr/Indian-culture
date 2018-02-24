<?PHP
 
$f_name = "";
$l_name= "";
$e_mail="";
$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $f_name = $_POST['firstname'];
    $l_name = $_POST['lastname'];
	$e_mail = $_POST['email'];
    
	
	$f_name = htmlspecialchars($f_name);
    $l_name = htmlspecialchars($l_name);
	
 
	$database = "LOGIN";
 
	$db_handle = mysql_connect("localhost", "root", "");
	$db_found = mysql_select_db($database, $db_handle);

	if ($db_found) {
		
		$query="SELECT * FROM subscribe WHERE Email='$e_mail'";
		$result = mysql_query($query);
		$num_rows = mysql_num_rows($result);
        
		if ($num_rows > 0) {
			$errorMessage = "Email already Subscribed";
		}
		else {
			$query = "INSERT INTO subscribe(Firstname,Lastname,Email) VALUES('$f_name','$l_name','$e_mail')";
			$result = mysql_query($query);
			
			session_start();
			$_SESSION['subscribe']="1";
			
			header ("Location: sub.php");
            mysql_close($db_handle);
		}
	}
	else {
		$errorMessage = "Database Not Found";
		mysql_close($db_handle);
	}
  }
 ?>
 <?PHP
		 if($errorMessage == ""){
			 
		 }
		 else{
			echo "<script type='text/javascript'>alert('$errorMessage');</script>";
			
			}
?>