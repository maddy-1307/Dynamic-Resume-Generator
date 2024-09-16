<?php
$conn = mysqli_connect('localhost', 'root', '', 'portfolio');

// Check connection

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
        table {
            border: 1px solid;
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px 5px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>City</th>
        <th>State</th>
        <th>LinkedIn</th>
        <th>Description</th>
        <th>Profile</th>
        <th>Image</th>
        <th>Skills</th>
        <th>Work Experience</th>
        <th>Education</th>
        <th>Resume Generate</th>
        <th>Delete</th>
    </tr>

    <?php
    $query = "SELECT * FROM `userdata`"; // Ensure the table name matches your database schema
    $result = mysqli_query($conn, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['Name']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "<td>".$row['city']."</td>";
            echo "<td>".$row['state']."</td>";
            echo "<td>".$row['linkp']."</td>";
            echo "<td>".$row['description']."</td>";
            echo "<td>".$row['profile']."</td>";
            echo "<td><img src='uploads/".$row['img']."' alt='Image' height='100'></td>";
            echo "<td><a href='portfolioskills2.php?uid=".$row['id']."'><input type='button' value='Skills' style='background-color:red'></a></td>";
            echo "<td><a href='portfoliococur.php?uid=".$row['id']."'><input type='button' value='Co-Curricular' style='background-color:bisque'></a></td>";
            echo "<td><a href='portfolioedu.php?uid=".$row['id']."'><input type='button' value='Education' style='background-color:yellow'></a></td>";
            echo "<td><a href='portfolioresume.php?uid=".$row['id']."'><input type='button' value='Resume Genrate' style='background-color:orange'></a></td>";
            echo "<td><a href='portfoliodelete.php?uid=".$row['id']."'><input type='button' value='Delete' style='background-color:orange'></a></td>";
            echo "</tr>";
        }
    } else {
       
    }

  
    ?>
</table>
</body>
</html>
