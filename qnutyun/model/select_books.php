<?php 	
include_once('model.php');
	function select_books() {
		global $conn;
		$result = mysqli_query($conn, "SELECT id, books_name, FROM books");
		return mysqli_fetch_all($result, MYSQLI_ASSOC);
	}
	echo json_encode(select_books());



?>