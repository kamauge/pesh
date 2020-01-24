
				<form method="post">
					<table>
						<tr>
							<td>Name:</td>
							<td><input type="text" name="name" required></td>
						</tr>
						<tr>
							<td>Age:</td>
							<td><input type="text" name="age" required></td>
						</tr>
						<tr>
							<td>Course:</td>
							<td><input type="text" name="course" required></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="save" value="Submit Details"></td>
						</tr>
					</table>
				</form>


<?php
include 'config/config.php';
if(isset($_POST['save'])){
         $name = $_POST['name'];
         $age = $_POST['age'];   
         $course = $_POST['course'];
    $qry = "INSERT INTO students (name,age,course)
        VALUES('$name','$age','$course')";
        $result = $conn->query($qry);
        if($result == TRUE){
            echo 'good';

        }   else{

            echo 'bad';

        }                             
    }                
                        ?>
