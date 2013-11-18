<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

<div id="container">
	<?php
		foreach($query as $row)
		{
		  print $row->postID;
		  print $row->title;
		  print $row->post;
		  print "<br>";
		}
	?>
</div>

</body>
</html>