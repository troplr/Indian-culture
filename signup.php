<?PHP
 
$uname = "";
$pword = "";
$cpword="";
$e_mail = "";
$errorMessage = "";
    
 
$database = "LOGIN";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $uname = $_POST['username'];
    $e_mail = $_POST['email'];
    $pword = $_POST['password'];
	
	$uname = htmlspecialchars($uname);
    $pword = htmlspecialchars($pword);
	 
	$db_handle = mysql_connect("localhost", "root", "");
	$db_found = mysql_select_db($database, $db_handle);

	if ($db_found) {
		
		$query="SELECT * FROM login WHERE Name = '$uname' AND Email='$e_mail'";
		$result = mysql_query($query);
		$num_rows = mysql_num_rows($result);
        
		if ($num_rows > 0) {
			$errorMessage = "Username already taken";
		}
		else {
			
			$query = "INSERT INTO login(Name,Email,Password) VALUES ('$uname','$e_mail','$pword')";
			
			 mysql_query($query);

			session_start();
			$_SESSION['login'] = "1";

			header ("Location: login.php");
            mysql_close($db_handle);
		}
	}
	else {
		$errorMessage = "Database Not Found";
		mysql_close($db_handle);
	}
  }
?>
<html>
<head>
	<title>Register</title>
<style>
            body {
                background-image: url("web_project/myphotos/highlight10.jpg");
                background-attachment: fixed;
                background-repeat: no-repeat;
            }

            footer{
                height: auto;
                text-align: center;   }

            footer div {
                margin: auto;
                display: inline-block;
            }

            #f3 {
                padding: 50px;
             }

            #f3 form {
                padding: 50px 50px;
                padding-bottom:25px;   
                font-size: 20px;
                text-align: left;
                margin: 0;
                 background-color: rgba(238, 238, 238, 0.88);
                border: 1px solid lightgray;
                border-radius: 5px;
            }
 

            #f3 form input {
                font-size: 15px;
                padding: 10px 30px;
                border: 1px solid #dbdbdb;
                text-align: center;
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
					<form action="signup.php" METHOD="POST">
					
                        <input type="text" name="username" id="username" placeholder="Username" required>
                        <br>
                        <br><br>
                        <input type="email" name="email" placeholder="abc@gmail.com" required>
                        <br>
                      <br>
                        <br>
                        <input type="password" name="password" placeholder="password">
                        <br><br><br>
                        <input type="password" name="cpassword" placeholder="confirm password">
                        <br>
                        <br><br>        
                        <input type="submit" name="submit" id="button" value="Register" >
                        <br><br>
                        <a href="login.php" style="margin-right:170px;">Log In</a>
                    </form>
                </div>
            </div>
        </footer>
		<?PHP
		 if($errorMessage == ""){
			 
		 }
		 else{
			echo "<script type='text/javascript'>alert('$errorMessage');</script>";
			}
		?>
  </body>
</html>
