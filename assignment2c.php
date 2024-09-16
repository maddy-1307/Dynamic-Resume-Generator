<?php
$conn=mysqli_connect('localhost','root','','assign1');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border:1px solid ;
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
            <th>name </th>
            <th>email</th>
            <th>phone number </th>
            <th>degree</th>
            <th>Start year</th>
            <th>End Year</th>
            <th>cgpa</th>
            <th>Image</th>
            <th >Field</th>
            <th>Delete</th>
            <th>Update</th>
    </tr>

    <?php
    $e = "SELECT * FROM `assignment2`";
    $er = mysqli_query($conn, $e);
  
        foreach($er as $r) {
            echo "<tr>";
            echo "<td>".$r['name']."</td>";
            echo "<td>".$r['email']."</td>";
            echo "<td>".$r['number']."</td>";
            echo "<td>".$r['deg']."</td>";
            echo "<td>".$r['start_yr']."</td>";
            echo "<td>".$r['end_yr']."</td>";
            echo "<td>".$r['cgpa']."</td>";
            echo "<td><img src='uploads/".$r['image']."' alt='Image' height='100'></td>";
            echo "<td>".$r['field']."</td>";
            echo "<td><a href='del2.php?id=".$r['id']."'><input type='button' value='DELETE' style='background-color:red'></a></td>";
            echo "<td><a href='update2.php?uid=".$r['id']."'><input type='button' value='Update' style='background-color:green'></a></td>";
            echo "</tr>";
        }
   
    ?>
</table>
    
</body>
</html>