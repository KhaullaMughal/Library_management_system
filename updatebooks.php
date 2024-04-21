<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Book</title>
</head>
<body>
	<div class="insert">
<h1>Update Book</h1>
<h4></h4>
<form method="POST">
	<label>Title</label>
	<input type="text" name="TITLE" required>
	<label>Author</label>
	<input type="text" name="AUTHOR"  required>
	<label>Isbn</label>
	<input type="number" name="ISBN"  required>
	<label>Publisher</label>
	<input type="text" name="PUBLISHER" required>
	<label>Edition</label>
	<input type="text" name="EDITION" required>
	<label>Year Of Publishing</label>
	<input type="text" name="YEAR_OF_PUBLISHING"  required>
	<input type="submit" name="" value="submit">
	<p>By clicking the submit button, you can add books<br>
		<a href="bookdetails.php">To check the books 'in your library click here</a> </p>
</form>
</div>

<style>
	body{
		background-color: #1A1A1D;
		width: 100%;
		height: 100vh;
		font-family: sans-serif;
	}
	.insert{
		width: 360px;
		height: 900px;
		margin: auto;
		background: white;
		border-radius: 3px;
	}
	h1{
		text-align: center;
	}
	h4{
		text-align: center;
		padding-top: 15px;
	}
	form{
		width: 300px;
		margin-left: 20px;
	}
	form label{
		display: flex;
		margin-top: 20px;
		font-size: 18px;

	}
	form input{
		width: 100%;
		padding: 7px;
		border: none;
		border: 1px solid gray ;
		border-radius: 6px;
		outline: none;
	}
	input[type = "submit"]{
		width: 320px;
		height: 35px;
		margin-top: 20px;
		border: none;
		background-color: #950740 ;
		color: white;
		font-size: 18px;
		cursor: pointer;
	}
	input[type = "submit"]:hover{
		color: white;
		background: #C3073f ;
	}
	p{
		text-align: center;
		padding-top: 20px;
		font-size: 15px;

	}

</style>
</body>
</html>