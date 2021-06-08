jQuery(document).ready(function($) {
	function printTable(dataTable) {
		if(dataTable.length > 0) {
			let row = "";
			dataTable.forEach( function(item, index) {
				row += `
					<tr>
						<td>${index + 1}</td>
						<td>${item.books_name}</td>
					</tr>
				`;
			});
			$("#res").html(row);
		} else {
			$("#res").html("Empty");
		}
	}
	$.ajax({
		url:"../model/select_books.php",
		method:"get",
		dataType:"json",
		success:function(data) {
			printTable(data);
		}
	})

})