
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

		<div class="btn"><a class="btnn" href="http://localhost/MyPhp/insertbook.php" role = "button">Add book</a></div>
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
							<th colspan="2">Operations</th>
		
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
	echo '<p><a href = "status.php?id= '.$res['ID'].'&book_status=0">Issued</a></p>';
}

else
{
	echo '<p><a href = "status.php?id= '.$res['ID'].'&book_status=1">Available</a></p>';
}
?>	
</td>
<td><?php echo $res['PUBLISHER']; ?></td>
<td><?php echo $res['EDITION']; ?></td>
<td><?php echo $res['YEAR_OF_PUBLISHING']; ?></td>
<td><a href="updatebook.php?id=<?php echo $res['ID']; ?>" class="button">Update</td>
<td><a href="deletebook.php?id=<?php echo $res['ID']; ?>" class="button">Delete</td>

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


	*{  margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: sans-serif;

		 }

		 body{
		 	background-image: url('book.jpg');
		 	height: 100vh;
		 	display: grid;
		 	place-items: center;
		 }
		 h1{
		 	text-align: center;
		 	color: white;
		 	font-family: papyrus;
		 	margin-top: 30px;
		 }

		 		 table{
		 	width: 600px;
		 	border-collapse: collapse;
		 	background-color: #fff;
		 	box-shadow: 0 10px 20px 0 rgb(0, 0, 0  ,.03);
		 	border-radius: 10px;
		 	margin: auto;
		 	box-shadow: -1px 12px 12px -6px rgba(0, 0, 0, 0.5);
		 }
		table, th , td{
		 	border: 1px solid #F2F2F2;
		 	padding: 20px;
		 	text-align: center;
		 	color: black;
		 	border: 1px solid lightgray;
		 	border-collapse: collapse;

		 }
		 th{
		 	text-transform: uppercase;
		 	font-weight: 500;
		 	background-color: #ff686b;
		 	color: black;
		 	font-style: bold;
		 }
		 tr:nth-child(odd){
		 	background-color: bisque;
		 }
		  tr:nth-child(odd):hover{
		 	background-color: #ffa69e;
		 	transform: scale(1.2);
		 	transition: transform 300ms ease-in;
		 }
		  tr:nth-child(even){
		 	background-color: bisque;
		 }
		  tr:nth-child(even):hover{
		 	background-color: #cfbcab;
		 	transform: scale(1.2);
		 	transition: transform 300ms ease-in;
		 }
		 td{
		 	font-size: 13px;
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
			color: black;
			background-color: bisque;
			padding: 10px;
			border-radius: 5px;
			font-family: sans-serif;
			font-weight: bold;
		}

</style>










</body>
</html>