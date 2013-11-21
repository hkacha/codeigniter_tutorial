<html>
<head>
</head>
<body>
	<div id="container">
		<form action="<?=base_url()?>posts/new_post" method="post">
			<p>
				Title:<input name="title" type="text">
			</p>
			<p>
				Description:<textarea name="post"></textarea>
			</p>
			<p>
				<input type="submit" value="Add post">
			</p>
		</form>
	</div>
</body>
</html>