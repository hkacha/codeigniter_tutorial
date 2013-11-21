<html>
<head>
</head>
<body>
	<h1>hiii</h1>
	<?php
		if (!isset($post)) {
	?>
	<p>There are currently no posts</p>
	
	<?php
	}
	else{
	?>
	
	<h2>
		<?=$post['title']?>
	</h2>
	<?=$post['post']?>
	<?
		}
	?>
</body>
</html>