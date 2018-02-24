
<?PHP

$uname = "";
$pword = "";
$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$uname = $_POST['username'];
		$pword = $_POST['password'];

		$uname = htmlspecialchars($uname);
		$pword = htmlspecialchars($pword);

	//==========================================
	//	CONNECT TO THE LOCAL DATABASE
	//==========================================
		
		$database = "LOGIN";
 
		$db_handle = mysql_connect("localhost", "root", "");
		$db_found = mysql_select_db($database, $db_handle);

	if ($db_found) {
		
		$query = "SELECT * FROM login WHERE Name = '$uname' AND Password='$pword'";
		$result = mysql_query($query);
		$row=mysql_fetch_assoc($result);

	//====================================================
	//	CHECK TO SEE IF THE $result VARIABLE IS TRUE
	//====================================================

			if ($row) {
				session_start();
				$_SESSION['login'] = "1";
				header ("Location: lhome.php");
			}
			else {
				 $errorMessage = "Invalid Login";
				session_start();
				$_SESSION['login'] = '';
			}	
		 
	mysql_close($db_handle);

	}
	else {
		$errorMessage = "Database not found";
		mysql_close($db_handle);
	}
	 if($errorMessage == ""){
			 
		 }
		 else{
			echo "<script type='text/javascript'>alert('$errorMessage');</script>";
			}
}
?>
<html>
<head>
<title>Login</title>
    <style>
        body {
            background-image: url("web_project/myphotos/highlight10.jpg");
            background-attachment: fixed;
            background-repeat: no-repeat;
         }
        
        footer {
            height: auto;
			margin-right:5%;
            text-align: center;
            margin-top: 2%;
        }
        
        footer div {
            margin: auto;
            display: inline-block;
        }
        
        #f3 {
            padding: 30px;
        }
        
        #f3 form {
            background-color: rgba(238, 238, 238, 0.87);
            padding: 60px 40px;
            padding-bottom: 25px;
            font-size: 20px;
            text-align: left;
            margin: 0;
            border: 1px solid lightgray; 
            border-radius: 3px;
             }        
        #f3 form label {
            color: black;
            font-size: 23px;
            font-weight: bold;
        }
        
        #f3 form input {
            font-size: 17px;
            padding: 5px 40px;
            border: 1px solid #dbdbdb;
            padding: 10px;
         }
        
        #button {
            color: black;
            background-color: #dbdbdb;
        }
        
        #button:hover {
            color: brown;
            background-color: lightgray;
            transition: .3s;
            cursor: pointer;
        }
        
        a {
            text-decoration: none;
        }
        
        a:hover {
            text-decoration: underline;
            color: brown;
        }

    </style>
</head>
<body>
    <footer>
        <div>
            <div id="f3">
                 <br>
                <form action="login.php" name="loginForm"  method="post" >
                   
                    <input type="text" name="username" placeholder="username" required>
                    <br>
                    <br><br>
                    
                    <input type="password" name="password" placeholder="password" required>
                    <br>
                    <br><br>
                    <input type="submit" name="submit" id="button" value="Login">
                    <br>
                    <br><br>
                     <a href="signup.php">Create Account<br></a>
                </form>
            </div>
        </div>
    </footer>
	 
</body>
</html>