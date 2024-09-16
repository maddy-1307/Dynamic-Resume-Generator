<?php
$conn=mysqli_connect('localhost','root','','assign1');
$uid=$_GET['uid'];
$a="SELECT * FROM abc where id= '$uid'";
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
    <form action="" method="POST">
    <input type="text" name="fname" id="" placeholder="Enter Full Name"  value="<?php echo $row[1];?>"> <br>
    <input type="email" name="emid" id="" placeholder="email@gmail.com" value="<?php echo $row[2];?>"><br>
    <input type="text" name="phone" id="" placeholder="Enter Mobile Number" value="<?php echo $row[3];?>"><br>
    <input type="date" name="dt" id="" value="<?php echo $row[4];?>" ><br>
    <input type="radio" name="gender" id="gender" value="Male" > Male
    <input type="radio" name="gender" id="gender" value="Female" > Female
    <input type="radio" name="gender" id="gender" value="Not to say" >  Not to say <br>
    <input type="text" name="address" id=""  placeholder="Adderess" value="<?php echo $row[6];?>"><br>

    <select name="state" id="state">
                <option value="--State--">--State--</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="UP">UP</option>
                <option value="Delhi">Delhi</option>
                <option value="Haryana">Haryana</option>
                <option value="Punjab">Punjab</option>
    
            </select>
            <br>
            <input type="text" name="pincode" id="" placeholder=" Enter Postal Code"value="<?php echo $row[8];?>" >
<br>
            <input id="sbmit"type="Submit" name="sub" value ="Update"width="100px">


    </form>

    <?php
   if(!empty($_POST['sub']))
   {
       $_fname=$_POST['fname'];
       $_emid=$_POST['emid'];
       $_phone=$_POST['phone'];
       $_dt=$_POST['dt'];
       $_gender=$_POST['gender'];
       $_address=$_POST['address'];
       $_state=$_POST['state'];
       $_pincode=$_POST['pincode'];
       


       $querry = "UPDATE `abc` SET `fullname`='$_fname',`email`='$_emid',`phone number`='$_phone',`dob`='$_dt',`gender`='$_gender',`address`='$_address',`state`='$_state',`pincode`=' $_pincode' WHERE id='$uid'";
       $qr = mysqli_query($conn,$querry);
   }
    
    ?>
</body>
</html>