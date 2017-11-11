<?php

$con=mysql_connect("localhost","root","");
	if(mysql_select_db("facemash"))
	{

	}
	else{
		echo "Error";
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Facemash</title>
		<link rel="stylesheet" href="style.css" />
	</head>

	<body>
		<div class="header">
			<h1>FACEMASH</h1>
		</div>

		<div class="main_wrapper">
			<p>
				<strong>We are let in for our looks? No. Will we be judged on them? Yes.</strong>
			</p>
			<h3>Who's Hotter? Click to Choose.</h3>
			<?php

			do{
			$query1="SELECT * from photos ORDER BY rand() ";
			$sql1=mysql_query($query1);
			$row1=mysql_fetch_array($sql1);

			$query2="SELECT * from photos ORDER BY rand() ";
			$sql2=mysql_query($query2);
			$row2=mysql_fetch_array($sql2);
			}while ($row2['id']==$row1['id']) ;
			
			?>
			
				<div id="photoRandom">
					<a href="vote.php?id1=<?php echo $row1['id'] ?>&amp;id2=<?php echo $row2['id'] ?>&amp;photo=first"><img src="images/<?php echo $row1['photo'] ?>" /></a>
					<p id="or">OR</p>
					<a href="vote.php?id2=<?php echo $row2['id'] ?>&amp;id1=<?php echo $row1['id'] ?>&amp;photo=second"><img src="images/<?php echo $row2['photo'] ?>" /></a>
				</div>
		</div>
<br><br>
<center>
		<a href="ranking.php" class="rank" style="text-decoration:none;color:#000;font-size:25px;"><strong>Rankings</strong></a>
</center>
	</body>
</htmL>
