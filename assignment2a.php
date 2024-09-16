<?php
$conn=mysqli_connect('localhost','root','','assign1');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST"  enctype="multipart/form-data">
        <input type="text" name="name" id="" placeholder="Name"><br>
        <input type="email" name="emid" id="" placeholder="email@gmail.com"><br>
        <input type="text" name="phone" id="" placeholder="Enter Mobile Number"><br>

        <select name="degree" id="degree">
                <option value="--Select--">--Select--</option>
                <option value="BTech">BTech</option>
                <option value="MTech">Mtech</option>
                <option value="PHD">PHD</option>
                <option value="BBA">BBA</option>
                <option value="Diploma">Diploma</option>
    
            </select>
            <br>
            <input type="date" name="sdt" id="" placeholder="degree start" >
            <br>
            <input type="date" name="edt" id="" placeholder="Degree end">
            <br>
            <input type="text" name="cgpa" id="" placeholder="cgpa"><br>
            <input type="file" name="fi" ><br>
            <input type="text" name="field" id="" placeholder="Specializtion">
            <br>
            <input type="submit" name="sub" id="">
            

    </form>

    <?php
    if(!empty($_POST['sub']))
    {
        $_name=$_POST['name'];
        $_emid=$_POST['emid'];
        $_phone=$_POST['phone'];
        $_degree=$_POST['degree'];
        $_sdt=$_POST['sdt'];
        $_edt=$_POST['edt'];
        $_cgpa=$_POST['cgpa'];
         $fi=$_FILES['fi']['name'];
	     $tmp_name=$_FILES['fi']['tmp_name'];
         $location="/Applications/XAMPP/xamppfiles/htdocs/demo/uploads/".$fi;
         move_uploaded_file($tmp_name,$location);
        $_field=$_POST['field']; 

        $q="INSERT INTO `assignment2`( `name`, `email`, `number`, `deg`, `start_yr`, `end_yr`, `cgpa`, `image`, `field`) 
        VALUES ('$_name','$_emid','$_phone','$_degree','$_sdt','$_edt','$_cgpa','$fi','$_field')";
        $qr=mysqli_query($conn,$q);

       



    }
    
    ?>
</body>
</html>

