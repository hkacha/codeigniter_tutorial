<html>
<head>
</head>
<body>
	<h1>hiii</h1>
	<?php
		if (!isset($posts)) {
	?>
	<p>There are currently no posts</p>
	
	<?php
	}
	else{
		foreach ($posts as $row) {
	?>
	<h2>
		<a href="<?=base_url()?>posts/post/<?=$row['postID']?>">
			<?=$row['title']?> - 
		</a>
		<a href="<?=base_url()?>posts/editpost/<?=$row['postID']?>">
			Edit - 
		</a>
		<a href="<?=base_url()?>posts/deletepost/<?=$row['postID']?>">
			Delete
		</a>
	</h2>
	<p><?=substr(strip_tags($row['post']),0,200).".."?></p>
	<p>
		<a href="<?=base_url()?>posts/post/<?=$row['postID']?>">
			Read More
		</a>
	</p>
	<hr>
	<?php
		}
	}
	?>
	<?=$pages?>
</body>
</html>