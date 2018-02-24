<?PHP
session_start();
if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
	header ("Location: login.php");
}
?>
<html>
<head>
<title>Connect...</title>
<style>
 body{
	 text-align:center;
	 background-color:#eee;
	 color:
 }
 
</style>
<head>
<body>
	<h1>Your info have been sent</h1>
 <h3>we will improve website experiance by improving website info and layout 
 <br>Thank you for sending us this kind of issue </h3>
</body>
 
 </html>
 