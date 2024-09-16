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
        <input type="text" name="coc1" id="" placeholder="co-curricular1 title"><br>
        <input type="date" name="coc1st" id="" placeholder="co-curricular1 start year"><br>
        <input type="date" name="coc1et" id="" placeholder="co-curricular1 end year"><br>
        <input type="text" name="coc1des" id="" placeholder="co-curricular1 one line description "><br>

        <input type="text" name="coc2" id="" placeholder="co-curricular2 title"><br>
        <input type="date" name="coc2st" id="" placeholder="co-curricular2 start year"><br>
        <input type="date" name="coc2et" id="" placeholder="co-curricular2 end year"><br>
        <input type="text" name="coc2des" id="" placeholder="co-curricular2 one line description "><br>

        <input type="text" name="coc3" id="" placeholder="co-curricular3 title"><br>
        <input type="date" name="coc3st" id="" placeholder="co-curricular3 start year"><br>
        <input type="date" name="coc3et" id="" placeholder="co-curricular3 end year"><br>
        <input type="text" name="coc3des" id="" placeholder="co-curricular3 one line description "><br>

        <span>HOBBIES</span><br>
        <input type="text" name="hob1" id="" placeholder="Enter hobby 1 "><br>
        <input type="text" name="hob2" id="" placeholder="Enter hobby 2 "><br>
        <input type="submit" name="sub" id="">
    </form>
    <?php
    if (isset($_POST['sub'])) {
        $_coc1 = $_POST['coc1'];
        $_coc1st = $_POST['coc1st'];
        $_coc1et = $_POST['coc1et'];
        $_coc1des = $_POST['coc1des'];

        $_coc2 = $_POST['coc2'];
        $_coc2st = $_POST['coc2st'];
        $_coc2et = $_POST['coc2et'];
        $_coc2des = $_POST['coc2des'];

        $_coc3 = $_POST['coc3'];
        $_coc3st = $_POST['coc3st'];
        $_coc3et = $_POST['coc3et'];
        $_coc3des = $_POST['coc3des'];

        $_hob1 = $_POST['hob1'];
        $_hob2 = $_POST['hob2'];

        $q = "INSERT INTO `cocurricular`(`userdata_id`, `cocu1`, `cocu1sdt`, `cocu1edt`, `cocu1des`, `cocu2`, `cocu2sdt`, `cocu2edt`, `cocu2des`, `cocu3`, `cocu3sdt`, `cocu3edt`, `cocu3des`, `hobbi1`, `hobbi2`) 
              VALUES ('$uid', '$_coc1', '$_coc1st', '$_coc1et', '$_coc1des', '$_coc2', '$_coc2st', '$_coc2et', '$_coc2des', '$_coc3', '$_coc3st', '$_coc3et', '$_coc3des', '$_hob1', '$_hob2')";
        $qr = mysqli_query($conn, $q);
        if ($qr) {
            echo "Record inserted successfully.";
        } else {
            echo "Unsuccessful: " . mysqli_error($conn);
        }
    }
   
    ?>
</body>
</html>
