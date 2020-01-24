<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<a href="view.php" class="btn btn-info" role="button">Add Student</a>
<div class="container">
  <h2>Student Table</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Course</th>
        <th>Age</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
	  <?php

		include 'config/config.php';
			$select = "SELECT * FROM students";
			$result = $conn->query($select);
			while($row = $result->fetch_assoc()){
			?>
			<tr>
							<td><?php echo $row['name'] ?></td>
							<td><?php echo $row['course'] ?></td>
							<td><?php echo $row['age'] ?></td>
							<td><a href="edit.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
							<a href="delete.php?delete=<?php echo $row['id']; ?>" class="delete_btn" >Delete</a></td>

							</tr>
							<?php
								}
							?>
    </tbody>
  </table>
</div>

</body>
</html>
