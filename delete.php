<?php
        include 'config/config.php';
        if(isset($_GET['delete'])){
        $id = $_GET['delete'];
		$query = "DELETE FROM students WHERE id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
	header("location: index.php");
    }
}
?>
