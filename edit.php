<?php 
		include 'config/config.php';
	    if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$record = mysqli_query("SELECT * FROM students WHERE id=$id");

		if (count($record) == 1 ) {
			$result = mysqli_fetch_array($record);
			$name = $result['name'];
            $age = $result['age'];
            $course = $result['course'];

		}
	}
?>

				<form method="post">
					<table>
						<tr>
							<td>Name:</td>
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
							<td><input type="text" name="name" value="<?php echo $name; ?>" ></td>
						</tr>
						<tr>
							<td>Age:</td>
							<td><input type="number" name="age" value="<?php echo $age; ?>" ></td>
						</tr>
						<tr>
							<td>Course:</td>
							<td><input type="text" name="course" value="<?php echo $course; ?>"></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="update" value="Update Details"></td>
						</tr>
					</table>
				</form>