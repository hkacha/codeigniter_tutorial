<html>
<head>
</head>
<body>
	<center>
		<h3>All contacts</h3><br>
		<a href="<?base_url()?>contacts/new_contact">Add new contact</a><br><br>
		<table border="1">
			<?php
				if (count($contact) < 1) {
			?>
				<td><h1>No records available</h1></td>

			<?php
				}else{
			?>
				<tr>
					<td>Name</td>
					<td>Number</td>
					<td>Action</td>
				</tr>
				<?php
					foreach ($contact as $records)
					{
				?>
						<tr>
							<td>
								<?=$records['name']?>
							</td>
							<td>
								<?=$records['contact_no']?>
							</td>
							<td>
								<a href="<?base_url()?>contacts/detail_contacts/<?=$records['id']?>">Detail</a>&nbsp;&nbsp;&nbsp;
								<a href="<?base_url()?>contacts/edit_contact/<?=$records['id']?>">Edit</a>&nbsp;&nbsp;&nbsp;
								<a href="<?base_url()?>contacts/delete_contact/<?=$records['id']?>">Delete</a>
							</td>
						</tr>
				<?php
					} //end of foreach loop
				?>

			<?php
			} // end of if condition
			?>
		</table>
		<?=$pages?>
	</center>
</body>
</html>