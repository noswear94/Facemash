<head>
<link rel="stylesheet" href="style.css" />
</head>
<div class="header">
			<h1>FACEMASH</h1>
</div>
<?php
	$con=mysql_connect("localhost","root","");
	if(mysql_select_db("facemash"))
	{

	}
	else{
		echo "Error";
	}


	$i=1;
	$query="Select * from photos  order by rating desc";
	$sql=mysql_query($query);
	while($row=mysql_fetch_array($sql))
	{	
		echo "<center>";
		echo " -----------------".$i." -----------------";
		echo '<div id="photoRandom"><img src="images/'.$row['photo'].'"></br>';
		echo "Current rating : <b>".$row['rating']."</b><br>";
		echo "</center>";
		$i++;
	}


	
	
?>