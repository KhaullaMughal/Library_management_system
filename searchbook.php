<?php
$con  = mysqli_connect('localhost' , 'root' , '' , 'library_management_db');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search book</title>
</head>
<body>
<div class="container">
	<form action="" method="POST">
		<label>Search book</label>
		<input type="text" class="box" name="search">
		<input type="submit" class="button" name="submit">
	</form>
	<div class = "search-container">
		<table class="table">
			
			<?php
			if (isset($_POST['submit'])) {
				$search = $_POST['search'];
				$sql = "select * from books where TITLE = '$search'";
				$result  = mysqli_query($con,$sql);
				if ($result) {
				if (mysqli_num_rows($result)>0)
				{
					echo '<thead>
					<tr>
					        <th>Id</th>
							<th>Title</th>
							<th>Author</th>
							<th>ISBN</th>
							<th>Status</th>
							<th>Publisher</th>
							<th>Edition</th>
							<th>Year-of-publishing</th>
							</tr></thead>
					';
					$row = mysqli_fetch_assoc($result);
					echo '<tbody>
					<tr>
			<td>'.$row['ID'].'</td>
			<td>'.$row['TITLE'].'</td>
			<td>'.$row['AUTHOR'].'</td>
			<td>'.$row['ISBN'].'</td>
			<td>'.$row['book_status'].'</td>
			<td>'.$row['PUBLISHER'].'</td>
			<td>'.$row['EDITION'].'</td>
			<td>'.$row['YEAR_OF_PUBLISHING'].'</td>


					</tr>

					</tbody>';
				}
				else{
					echo"Data not found.";
				}
				}
}

			?>
					</table>
	</div>
</div>
</body>
</html><style>
	table{
		 	border-collapse: collapse;
		 	background-color: #fff;
		 	box-shadow: 0 10px 20px 0 rgb(0, 0, 0  ,.03);
		 	border-radius: 10px;
		 	margin: auto;
		 }
		 th , td{
		 	border: 1px solid #F2F2F2;
		 	padding: 8px 30px;
		 	text-align: center;
		 	color: grey;

		 }
		 th{
		 	text-transform: uppercase;
		 	font-weight: 500;
		 }
		 td{
		 	font-size: 13px;
		 }
		 
		 *{
		 	margin: 0;
		 	padding: 0;
		 	font-family: 'poppins' , sans-serif;
		 	box-sizing: border-box;

		 }
		 .container{
		 	width: 100% ;
		 	height: 100vh;
		 	background-color: paleturquoise;
		 	display: flex;
		 	align-items: center;
		 	justify-content: center;
		 }
	     input[class = 'box']{
	     	box-sizing: border-box;
	     	border-radius: 30px;
	     	padding:20px ;
	     }
	     input[class = 'button']{
	     	color: black;
	     	background-color: tomato;
	     	padding: 20px;
	        border-radius: 30px;

	     }




















</style>