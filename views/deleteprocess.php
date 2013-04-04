
<html>
	<head>
		<title>Forum </title>
	</head>
	
	<body>
	<h3>forum</h3>
	<a href = "./postview.php">post</a><br/>
	
	 
	 
	 <?php
	
	 
	 
	 if(isset($_REQUEST['lallan']))
	 {
		 }
	 else
	 {
		 die("come through proper channels");
	 }
		require_once("config.php");
		$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
		
		if(!$link) {
			die('Failed to connect to server: ' . mysql_error());
		}
		
		$db = mysql_select_db(DB_DATABASE);
		if(!$db) {
			die("Unable to select database");
		}
		$error=0;
		
		$idlist=$_REQUEST['id'];
		$words = preg_split('/\s+/', trim($idlist));
				
		for($i=0;$i<count($words);$i++)
		{	
		
		$result = mysql_query("SELECT * FROM forum where forum_id='$words[$i]'");
		 
		if($result)
		{		
			$post = mysql_fetch_array($result);
			if($post)
			{
				echo "<table border='1'>";
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
				echo "</table>";
				mysql_query("delete from forum where forum_id='$words[$i]'");
		echo "delete sucessful"; 
		
			}
			else
		{
			echo "data not there for id = ".$words[$i];
		}
		
		}
		else
		{
			echo "data not there for".$words[$i];
		}
	}
		$qry2 = "SELECT * FROM forum ";
		$result3 = mysql_query($qry2);
		 
		if($result3)
		{	$count=0;
			while($post = mysql_fetch_array($result3))
			{	$count=$count+1;
				$result2 = mysql_query("UPDATE forum SET forum_id='$count' WHERE forum_id='$post[forum_id]'");
			}
			
		}///this function needs to be worked out
		mysql_close();

	 ?>
	 link to postview page
			</body>
</html>
