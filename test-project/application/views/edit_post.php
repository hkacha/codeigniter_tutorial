<html>
<head>
</head>
<body>

	<form action="<?=base_url()?>posts/editpost/<?=$post['postID']?>" method="post">
		<p>
			Title: <input type="text" name="title" value="<?=$post['title']?>">
		</p>
		<p>
			Description:<textarea name="post">
							<?=$post['post']?>
						</textarea>
		</p>
		<p>
			<input type="submit" value="Edit post">
		</p>
	</form>
</body>
</html>