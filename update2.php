<?php
$conn=mysqli_connect('localhost','root','','assign1');
$uid=$_GET['uid'];
$a="SELECT * FROM assignment2 where id= '$uid'";
$ar= mysqli_query($conn,$a);
$row=mysqli_fetch_row($ar);
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
        <input type="text" name="name" id="" placeholder="Name"  value="<?php echo $row[1];?>"><br>
        <input type="email" name="emid" id="" placeholder="email@gmail.com" value="<?php echo $row[2];?>"><br>
        <input type="text" name="phone" id="" placeholder="Enter Mobile Number" value="<?php echo $row[3];?>"><br>

        <select name="degree" id="degree">
                <option value="--Select--">--Select--</option>
                <option value="BTech">BTech</option>
                <option value="MTech">Mtech</option>
                <option value="PHD">PHD</option>
                <option value="BBA">BBA</option>
                <option value="Diploma">Diploma</option>
    
            </select>
            <br>
            <input type="date" name="sdt" id="" placeholder="degree start" value="<?php echo $row[5];?>" >
            <br>
            <input type="date" name="edt" id="" placeholder="Degree end" value="<?php echo $row[6];?>">
            <br>
            <input type="text" name="cgpa" id="" placeholder="cgpa" value="<?php echo $row[7];?>"><br>
            <input type="file" name="fi" ><br>
            <input type="text" name="field" id="" placeholder="Specializtion" value="<?php echo $row[9];?>">
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

      $q="UPDATE `assignment2` SET 
      `name`='$_name',`email`='$_emid',`number`='$_phone',`deg`='$_degree',`start_yr`='$_sdt',`end_yr`='$_edt',`cgpa`='$_cgpa',`image`='$fi',`field`='$_field' WHERE id='$uid'";
        $qr=mysqli_query($conn,$q);
   }
    
    ?>
</body>
</html>