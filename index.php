<?php
include 'function.php';
include 'crud.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>ACTIVITY 3 - ESTENZO</title>
</head>






<body>
	<br>
	<div class="container mx-auto p-2 border" style="width: 700px;">
	
		<form method="post" enctype="multipart/form-data">
			<div class="col-md-4">
				<div class="form-group" style="width: 400px; margin-left: 120px;">
					<label>Menu name: </label>
					<input class="form-control" type="text" name="menuName"/>
				</div>
				<div class="form-group" style="width: 400px; margin-left: 120px;">
					<label>Menu description: </label>
					<textarea class="form-control" name="menuDesc" rows="2"></textarea>
				</div>
				<div class="form-group" style="width: 400px; margin-left: 120px;">
					<label>Price: </label>
					<input class="form-control" type="text" name="price" />
				</div>
				<button class="btn btn-primary" type="submit" name="submit" style="margin-left: 280px; margin-top: 15px;">Submit</button>
				<br>
				<br>
			</div>
		</form>
	</div>

	<br>
	
	<div>
		<table class="table table-bordered table-hover mx-auto p-2" style="width:auto;">
			<tr>
				<td style="text-align: center;"><b>ID</b></td>
				<td style="text-align: center;"><b>MENU NAME</b></td>
				<td style="text-align: center;"><b>MENU DESCRIPTION</b></td>
				<td style="text-align: center;"><b>PRICE</b></td>
				<td style="text-align: center;"><b>ACTION</b></td>
			</tr>
			<?php
			$rows = view_data();
			foreach ($rows as $row) {
				echo "<tr>";
				echo "<td>" . $row['menu_id'] . "</td>";
				echo "<td>" . $row['menu_name'] . "</td>";
				echo "<td>" . $row['menu_desc'] . "</td>";
				echo "<td>" . $row['price'] . "</td>";
			?>
				<td>
					<form method="post" enctype="multipart/form-data" action="?edit_id=<?php echo $row['menu_id']; ?>" style="display: inline;">
						<input type="hidden" name="edit" value="<?php echo $row['menu_id']; ?>">
						<button type="submit" class="btn btn-primary">EDIT</button>&nbsp;
					</form>

					<form method="post" style="display: inline;">
						<input type="hidden" name="delete" value="<?php echo $row['menu_id']; ?>">
						<button type="submit" class="btn btn-danger" onclick="return confirm('Delete record?')">DELETE</button>
					</form>
				</td>
			<?php echo "</tr>";
			}
			?>
	<br>
    
	

</body>

</html>