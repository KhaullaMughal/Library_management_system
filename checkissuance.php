<?php

$con  = mysqli_connect('localhost' , 'root' , '' , 'library_management_db');


$your_member_id = '3'; // Replace this with your actual member ID

// Query to fetch issuance details for a specific member
$sql = "SELECT books.title, issuance.issuance_date, issuance.due_date, issuance.return_date
        FROM books
        INNER JOIN issuance ON books.id = issuance.id
        WHERE issuance.member_id = '$your_member_id'";

$result = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Issuance Details</title>
</head>
<body>
    <h1>Issuance Details for Member ID: <?php echo $your_member_id; ?></h1>
    <table>
        <tr>
            <th>Title</th>
            <th>Issuance Date</th>
            <th>Due Date</th>
            <th>Return Date</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["title"] . "</td>";
                echo "<td>" . $row["issuance_date"] . "</td>";
                echo "<td>" . $row["due_date"] . "</td>";
                echo "<td>" . $row["return_date"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No issuance details found for this member.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
