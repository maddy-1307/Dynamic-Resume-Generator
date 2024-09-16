<?php
$conn = mysqli_connect('localhost', 'root', '', 'portfolio');

$uid = $_GET['uid'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <span>Class 10 th</span><br>
        <input type="text" name="schname10" placeholder="School Name" required><br>
        <input type="text" name="sc10" placeholder=" score in % of class 10" required><br>
        <span>Class 12 th</span><br>
        <input type="text" name="schname12" placeholder=" School Name " required><br>
        <input type="text" name="sc12" placeholder=" score in % of class 12" required><br>
        <span>College</span><br>
        <input type="text" name="cname" placeholder="College Name" required><br>
        <input type="text" name="ccgpa" placeholder="Cgpa" required><br>
        <input type="text" name="spc" placeholder="Specialization" required><br>
        <input type="submit" name="sub" >
    </form>

    <?php
    if (!empty($_POST['sub'])) {
        $_schname10 = $_POST['schname10'];
        $_sc10 = $_POST['sc10'];
        $_schname12 = $_POST['schname12'];
        $_sc12 = $_POST['sc12'];
        $_cname = $_POST['cname'];
        $_ccgpa = $_POST['ccgpa'];
        $_spc = $_POST['spc'];

        
        $q = "INSERT INTO `Educatioin` (`userdata_id`, `stname`, `stscore`, `stw`, `stwscore`, `cname`, `sgpa`, `specs`) 
              VALUES ('$uid','$_schname10','$_sc10','$_schname12','$_sc12','$_cname','$_ccgpa','$_spc')";

        $qr = mysqli_query($conn,$q);

        if ($qr) {
            echo "Record inserted successfully.";
        } else {
            echo "Unsuccessful";
        }
    }
   
 
    ?>
</body>
</html>
