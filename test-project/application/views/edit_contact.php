<html>
<head>
</head>
<body>
	<center>
		<h3>Modify contact</h3>
		<form action="<?=base_url()?>contacts/edit_contact/<?=$contact['id']?>" method="post">
			<p>
				<input type="text" name="name" value="<?=$contact['name']?>">
			</p>
			<p>
				<input type="text" name="contact_no" value="<?=$contact['contact_no']?>">
			</p>
			<p>
				<input type="submit" value="Add Contact">
				<input type="reset" value="Cancel">
			</p>
		</form>
	</center>
</body>
</html>