<?php 

$con  = mysqli_connect('localhost' , 'root' , '' , 'library_management_db');

$id  = $_GET['id'];
$selectquery = " select * from issuance_details ";

$query = mysqli_query($con , $selectquery);
while ($res = mysqli_fetch_array($query)) {
	$Member_Name = $res['MEMBER_NAME'];
	$title = $res['TITLE'];
	$issuedate = $res['ISSUE_DATE'];
	$duedate = $res['DUE_DATE'];
	}

?>


<?php

if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$Member_Name = $_POST['MEMBER_NAME'];
	$title = $_POST['TITLE'];
	$issuedate = $_POST['ISSUE_DATE'];
	$duedate = $_POST['DUE_DATE'];

	$result = mysqli_query($con , "update issuance_details set MEMBER_NAME = '$Member_Name' , TITLE  = '$title' , ISSUE_DATE = '$issuedate' , DUE_DATE = '$duedate' where ISSUANCE_ID = $id");
	if ($result) {
		echo "Updated";
	}
	else{
		echo "Failed";
	}
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <title>Update Issuance</title>
  </head>
  <body>
    
    <div class="container my-5">
    	<form action="" method="POST">
  <div class="form-group">
    <label >Member name</label>
    <input type="text" class="form-control" name="MEMBER_NAME" value="<?php  echo $Member_Name; ?>">
  </div>
 
 <div class="form-group">
    <label >Book title</label>
    <input type="text" class="form-control" name="TITLE" value="<?php echo $title; ?>">
  </div>
  <div class="form-group">
    <label >Issue Date</label>
    <input type="date" class="form-control" name="ISSUE_DATE" value="<?php echo $issuedate; ?>">
  </div>
  <div class="form-group">
    <label >Due Date</label>
    <input type="date" class="form-control" name="DUE_DATE" value="<?php echo $duedate; ?>">
  </div>
  
  <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
  <button type="submit" class="btn btn-dark btn-lg" name="update">Update</button>
</form>
</div>
  </body>
</html>