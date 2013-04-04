
<html>
	<head>
		<title>Forum post</title>
	</head>
	
	<body>
<a href="./home.php">home</a>
<?php
 	 
	//have a link to home.php
	 if(isset($_SESSION['acess'])&& $_SESSION['acess']==4)
	 {
		echo	"<a href='./deleteview.php'>delete</a>";	 
	 }
	 
	 ?>
//saare label laga lena
<form action=postprocess.php method="post">
			<input type="text" name="subject">
			<input type="text" name="name" >
			<input type="textarea" name="post">
			<input type="hidden" name="lallan" value="top">
			<input type="submit">
			</form>
</body>
