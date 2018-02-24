 
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Boxes</title>
    <script type="text/javascript">
        i = 1;

        function change() {
            setInterval("test()", 3000);
        }

        function test() {
            document.getElementById("bimage").src = "web_project/myphotos/" + i + ".jpg";
            i++;
            if (i == 5)
                i = 1;
        }

    </script>
    <style type="text/css">
        body {
            font-weight: bold;
            font-size: 80%;
            font-family: "Courier New", Courier, monospace;
            margin: auto;
            padding: 0;
        }
        
        #page {
            padding: 20px;
            background-color: #ffffff;
        }
        
        #logo {
            position: relative;
            left: 0%;
            bottom: 5px;
            text-align: center;
        }
        
        #indian_culture {
            margin: auto;
            padding: 1px 30px;
            font-size: 30px;
            border-radius: 100px;
            position: relative;
            top: 70px;
            left: -30px;
        }
        
        #logo_img {
            margin: auto;
            position: relative;
            left: -250px;
            width: 100px;
            height: 100px;
        }
        
        ul {
            width: 1100px;
            padding: 10px;
            margin: 0px auto 0px auto;
            border-top: 3px solid #000;
            border-bottom: 1px groove #000;
            text-align: center;
        }
        
        li {
            display: inline;
            margin: 0px 3px;
        }
        
        a {
            color: #898989;
            text-decoration: none;
            padding: 6px 18px 5px 18px;
        }
        
        a:hover,
        a.on {
            color: #d15050;
        }
        
        p {
            text-align: center;
            width: 600px;
            margin: 20px auto 20px auto;
            background-color: #eee;
            padding: 20px;
        }
        
        #ddiv {
            text-align: center;
            font-size: 22px;
            padding: 0;
            margin: auto;
        }
        
        #ddiv a {
            padding: 0px;
            margin: auto;
            margin: 3% 0px;
            display: inline-block;
            border: 1px solid lightgray;
            background-color: #f2f2f2;
            padding-bottom: 0px;
        }
        
        #ddiv a img {
            width: 400px;
            height: 350px;
        }
        
        #ddiv a h5 {
            padding: 15px;
            margin: auto;
        }
        
        #ddiv a:hover {
            transition: all, .3s;
            box-shadow: 3px 3px 50px gray;
            background-color: snow;
        }
        
        #r {
            height: 700px;
            padding: 0;
            margin: auto;
            text-align: center;
            font-size: 20px;
        }
        
        #r a {
            margin-top: 3%;
            display: inline-block;
            background-color: rgba(211, 211, 211, 0.38);
            padding-top: 20px;
            border: 1px solid lightgray;
            box-shadow: 1px 1px 2px gray;
            border-radius: 10px;
        }
        
        #r a img {
            margin: 0;
            width: 200px;
            height: 200px;
            box-shadow: 1px 1px 3px gray;
        }
        
        #r a:hover {
            cursor: pointer;
            transition: all, .4s;
            background-color: lightgray;
        }
        
        #bimage {}
        
        #navigation li {
            font-size: 22px;
        }
        
        #section-2 {
            width: auto;
            height: auto;
            text-align: center;
            margin: auto;
            position: relative;
            top: -150px;
        }
        
        #section-2 a {
            display: inline-block;
            text-align: center;
            margin: 2%;
            padding: 10px;
            padding-bottom: 0px;
             box-shadow: 2px 2px 5px 2px gray;
          }
        
        #section-2 a img {
            width: 300px;
            height: 350px;
           box-shadow: 1px 1px 3px gray;
        }
         
        
        #section-2 a h5 {
            font-size: 20px;
            padding: 0;
            color: black;
            padding: 0;
        }
        
        #section-2 a:hover {
            transition: .3s;
            background-color:lightcoral;
        }
        
        footer {
            height: 450px;
             background-repeat: no-repeat;
            text-align: center;
            background-color: #383838;
            box-shadow: 3px 3px 30px gray;
        }
        
        footer div {
            margin: auto;
            display: inline-block;
        }
        
        footer #f1 {
            max-height: auto;
            width: 200px;
            padding: 30px;
            margin: 0px 100px;
			position:relative;
			top:-100px;
        }
        
        footer #f1 h2 {
            border-radius: 100px;
            color: firebrick;
        }
        
        footer #f1 a {
            border-radius: 10px;
        }
        
        footer #f1 a img:hover {
            transform: scale(1.3);
            transition: .3s;
        }
        
        footer #f1 a img {
            max-width: 50px;
            max-height: 50px;
            border-radius: 100px;
        }
        
        #f2 {
            padding: 30px;
            position: relative;
            top: -150px;
            right: 60px;
            text-align: justify;
        }
        #f2 h1{
            color:firebrick; 
        }
        
        #f2 a {
            color: dimgrey;
            font-size: 20px;
           }
        
        #f2 a:hover {
            text-decoration: underline;
            color: firebrick;
        }
        
        #f3 {
            padding: 30px;
            position: relative;
            left: 100px;
        }
        
        #f3 form {
            background-color: rgba(240, 248, 255, 0.65);
            border: 1px solid lightgray;
            padding: 20px;
            font-size: 20px;
            text-align: left;
             margin: 0;
        }
        
        #f3 h2 {
            font-size: 25px;
            background-color: rgba(240, 248, 255, 0.65);
            margin: 0;
             padding: 10px;
            color: firebrick;
            border: 2px solid lightgray;
        }
        
        #f3 form label {
            color: firebrick;
        }
        
        #f3 form input {
            font-size: 20px;
            padding: 5px;
            border: 1px solid black;
        }
        
        #f3 form input:hover {
            background-color: lightgray;
        }
        
        #button {
            color: aliceblue;
            background-color: gray;
        }
        
        #button:hover {
            background-color: lightgray;
            color: black;
        }

    </style>
</head>

<body onload="change();">
    <div id="page">
        <div id="logo">
            <h1 id="indian_culture">Indian Culture</h1>
            <img src="web_project\myphotos\1233.jpg" alt="The Analog Specialists" id="logo_img" />

        </div>
        <ul id="navigation">
            |
            <li><a href="#" class="on">Home</a></li>|
            <li><a href="contact.php">Contact Us</a></li>|
            <li><a href="About.php">About</a></li>|
            <li><a href ="login.php">Sign In</a></li>|
			<li><a href="signup.php">Sign Up</a></li>|
        </ul>
        <br>
        <div style="margin:auto;text-align:center;">

            <img src="web_project/myphotos/1.jpg" id="bimage" height="600" width="60%">
        </div>

        <p style="font-size:22px;">
            Our Community will provide One of the Best Arts and Philosophy for seeing in india.
        </p>
        <div id="ddiv" >
			
            <a href="Religions.php" style="margin-right:3%;" >
						
                <img src="web_project/myphotos/religious-funeral-traditions-main.jpg">

                <h5>Religions</h5>
            </a>

            <a href="Festivals.php">

                <img src="web_project/myphotos/Hindu_festival_rituals_Holi_colors.jpg">

                <h5>Festivals</h5>
            </a>
        </div>

        <br>
        <div id="r">
            <h1 style="font-family:courier;color:#454545;
                           text-shadow:3px 3px 20px grey;position:relative;top:30px;">Visual arts</h1>
            <a href="paintings.php" style="margin-right:2%;">
                <img src="web_project/myphotos/Ajanta_Padmapani.jpg">
                <h5>Painting</h5>
            </a>
            <a href="sculptures.php" style="margin-right:2%;">
                <img src="web_project/myphotos/Asokanpillar-crop.jpg">
                <h5>Sculpture</h5>
            </a>
            <a href="Architecture.php" style="margin-right:2%;">
                <img src="web_project/myphotos/TajMahalbyAmalMongia.jpg">
                <h5>Architecture</h5>
            </a>
        </div>
        <br>
        <div id="section-2">
            <a href="Martial-Arts.php">
                <img src="web_project/myphotos/Yoga_prayer_by_the_Sea.jpg">
                <h5>Indian martial arts</h5>
            </a>
            <a href="performing_Arts.php">
                <img src="web_project/myphotos/27.jpg">
                <h5>Performing arts</h5>
            </a>
        </div>
    </div>
    <footer>
        <div>
            <div id="f2">
                <h1><ins>Popular Links</ins></h1>
                <a href="https://en.wikipedia.org/wiki/Culture_of_India">- Culture of India</a>
                <br>
                <a href="http://www.culturalindia.net/">- For Enjoying Vacation</a>
                <br>
                <a href="http://www.livescience.com/28634-indian-culture.html">- Traditions and Customs of India</a>
                <br>
                <a href="http://www.mapsofindia.com/culture/">- map of india</a>
            </div>
            <div id="f1">
                <h2><ins>Follow Us On:</ins></h2>

                <a href="https://www.facebook.com/IndianCultureAndTraditions/ "><img title="www.fb.com" src="social_icons/facebook.png.jpg"></a>
                <br>
                <br>

                <a href="https://in.pinterest.com/lummbe/indian-culture/"><img title="www.pintrest.com" src="social_icons/pin.png.jpg"></a>
                <br>
                <br>

            </div>
            <div id="f3" onsubmit="return validate();">
                <h2>Subscribe</h2>
                <br>
                <form action="Home.php" name="myForm" onsubmit="return validate();" method="post">
                    <label>First_name:</label>
                    <br>
                    <input type="text" name="firstname" id="f_name" placeholder="type here..." required>
                    <br>
                    <br>
                    <label>Last_name:</label>
                    <br>
                    <input type="text" name="lastname" id="l_name" required>
                    <br>
                    <br>
                    <label>Email:</label>
                    <br>
                    <input type="email" name="email" id="email" required>
                    <br>
                    <br>
                    <input type="submit" name="submit" id="button" value="Subscribe">
                </form>
            </div>
        </div>
    </footer>
    <script>
        function validate() {
            var x = document.forms["myForm"]["firstname"].value;
            var y = document.forms["myForm"]["lastname"].value;
            var z = document.forms["myForm"]["email"].value;
            var a = document.forms["myForm"]["number"].value;
            if (x == "" || x == null) {
                alert("Please Enter First_Name");
                return false;
            } else if (y == "" || y == null) {
                alert("please Enter Last_Name");
                return false;
            } else if (z == "" || z == null) {
                alert("please Enter Email");
                return false;
            } else if (a == "") {
                alert("please Enter your mobile number");
                return false;
            }
        }
    </script>
</body>
</html>
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
 			
			header ("Location: sub.php");
            mysql_close($db_handle);
		}
	}
	else {
		$errorMessage = "Database Not Found";
		mysql_close($db_handle);
	}
  }
		 if($errorMessage == ""){
			 
		 }
		 else{
			echo "<script type='text/javascript'>alert('$errorMessage');</script>";
			}
?>

	 
