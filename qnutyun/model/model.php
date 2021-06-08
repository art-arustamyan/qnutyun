<?php 
include_once('../DbConnection.php');

	function select_products() {
		global $conn;
		$result = mysqli_query($conn, "SELECT id, books_name FROM books");
		return mysqli_fetch_all($result, MYSQLI_ASSOC);
	}



 ?>