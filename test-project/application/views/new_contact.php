<html>
<head>
</head>
<body>
	<center>
		<h3>Add new contact</h3>
		<form action="<?=base_url()?>contacts/new_contact" method="post">
			<p>
				<input type="text" name="name">
			</p>
			<p>
				<input type="text" name="contact_no">
			</p>
			<p>
				<input type="submit" value="Add Contact">
				<input type="reset" value="Cancel">
			</p>
		</form>
	</center>
</body>
</html>