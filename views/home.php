
<html>
	<head>
		<title>Forum </title>
	</head>
	
	<body>
	<h3>forum</h3>
	<a href = "./postview.php">post</a><br/>
	 <?php 
	if(isset($_SESSION['acess'])&& $_SESSION['acess']==4)
	{
	echo	"<a href='./deleteview.php'>delete</a>";//
	 }
	 ?>
	 <? 
	
	 //databse name is hms table is forum 
	 ?>
	 
	 
	 <?php
		require_once("config.php");
		$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
		
		if(!$link) {
			die('Failed to connect to server: ' . mysql_error());
		}
		
		$db = mysql_select_db(DB_DATABASE);
		if(!$db) {
			die("Unable to select database");
		}
		
		$qry = "SELECT * FROM forum ";
		$result = mysql_query($qry);
		 
		if($result)
		{	echo "<table border='1'>";
			while($post = mysql_fetch_array($result))
			{
				 echo "<tr class='row1'>";
				echo "<td class='1'>".$post['forum_id']."</td>";
				echo "<td class='2'>".$post['subject']."</td>";
				echo "<td class='3'>".$post['date']."</td>";
				echo "<td class='4'>".$post['time']."</td>";
				echo "<td class='6'>".$post['name']."</td>";
				
				echo "</tr>";
				echo "<tr class='row2'>";
				echo "<td class='5'>".$post['post']."</td>";
				echo "</tr>";
				
			}
			echo "</table>";
		}
		else
		{
			echo "error";
		}

	 ?>
	</body>
</html>
