
<html>
	<head>
		<title>Forum post</title>
	</head>
	
	<body>
		 <?php 
	 if(isset($_SESSION['acess'])&& $_SESSION['acess']==4)
	 {
			 
	 }
	/* else
	 {
		 die("not admin");
	}
	*/  
	 ?>
<a href="./home.php">home</a>

	
		<a href="./postview.php">post</a>	 

//saare label laga lena
<form action=deleteprocess.php >
			id seperated by name
			<input type="textarea" name="id">
			<input type="submit">
			<input type="hidden" name="lallan" value="top">
			</form>
</body>
