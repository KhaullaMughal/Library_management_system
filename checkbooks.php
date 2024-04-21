
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Get Books</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

	<div class="main-div">
		<h1>List of books </h1>
		<a class="btnn" href="Searchbook.php" role = "button">Search book</a>

		<div class="center-div">
			<div class="table responsive">
				<table>
					<thead>
						<tr>
							<th>Id</th>
							<th>Title</th>
							<th>Author</th>
							<th>ISBN</th>
							<th>Status</th>
							<th>Publisher</th>
							<th>Edition</th>
							<th>Year-of-publishing</th>
		
						</tr>
					</thead>
					<tbody>
						<?php 
$con  = mysqli_connect('localhost' , 'root' , '' , 'library_management_db');

//check connection 
if ($con == false) {
	// code...
	die('error:cannot connect');
}

$selectquery = " select * from books ";

$query = mysqli_query($con , $selectquery);

$nums = mysqli_num_rows($query); //to check number of rows //

// echo $nums; //display no of rows them but now we need to fetch data so 

// $res = mysqli_fetch_array($query);

//echo $res[2]; // ese data to mil pr lengthy process hojyega// so now we apply loop here

while ($res = mysqli_fetch_array($query))
 {
	?>
	<tr>
<td><?php echo $res['ID']; ?></td>
<td><?php echo $res['TITLE']; ?></td>
<td><?php echo $res['AUTHOR']; ?></td>
<td><?php echo $res['ISBN']; ?></td>
<td><?php if ( $res['book_status'] == 1)
{
	echo "Issued";
}

else
{
	echo "Available";
}
?>	
</td>
<td><?php echo $res['PUBLISHER']; ?></td>
<td><?php echo $res['EDITION']; ?></td>
<td><?php echo $res['YEAR_OF_PUBLISHING']; ?></td>


	</tr>
	<?php
}

?>		
					</tbody>
				</table>
			</div>
		</div>
	</div>
<style>
	*{margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: sans-serif;

		 }

		 .main-div{
		 	width: 100%;
		 	height: 100vh;
		 	display: flex;
		 	flex-direction: column;
		 	justify-content: center;
		 	align-items: center;

		 }

		 .center-div{
		 	width: 90%;
		 	height: 80vh;
		 	background: -wekbit-linear-gradient(left , #5DADE2 , #00c6FF);
		 	padding: 20px 0 0 0;
		 	box-shadow: 0 10px 20px 0 rgb(0, 0, 0 , .03);
		 	border-radius: 10px;
		 }
		 h1{
		 	font-size: 18px;
		 	color: #000;
		 	text-align: center;
		 	margin-top: -20px;
		 	margin-bottom: 20px;
		 }
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

		 .post-class{
		 	text-transform: uppercase;
		 }
		 .fa{
		 	font-size: 18px;
		 }
		 .fa-edit{
		 	color: #63c76a;
		 }
		 .fa-trash{
		 	color: #ff0000;
		 }
		 a{
		 	text-decoration: none;
		 	display: flex;
		 	justify-content: center;
		 	text-align: center;
		 }
		.button{
		 	background-color: orange;
		 	color: #fff;
		 	font-size: 1em;
		 	padding: 5px;
		 	text-decoration: none;
		 }
		 .btnn{
		 	background-color: green;
		 	color: #fff;
		 	font-size: 1em;
		 	padding: 5px;
		 	text-decoration: none;
		 }
</style>
</body>
</html>