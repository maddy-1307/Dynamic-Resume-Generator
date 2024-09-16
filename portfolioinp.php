<?php
$conn=mysqli_connect('localhost','root','','portfolio');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Enter Name" id=""></br>
    <input type="email" name="emid" id="" placeholder="email@gmail.com"><br>
    <input type="text" name="phone" id="" placeholder="Enter Mobile Number"><br>
    <input type="text" name="Linked" id="" placeholder="LinkedIn Profile "><br>
    <input type="text" name="city" id="" placeholder="City"><br>
    <input type="text" name="state" id="" placeholder="State"> <br>
    <input type="text" name="descr"placeholder="Enter Description" id=""><br>
    <input type="text" name="Profile" id="" placeholder="Enter Profile"><br>
    <input type="file" name="fi" ><br>
    <input type="submit" name="sub" id="sub">
</form>

<?php


    if(!empty($_POST['sub']))
    {
        $_name=$_POST['name'];
       $_emid=$_POST['emid'];
        $_phone=$_POST['phone'];
        $_Linked=$_POST['Linked'];
        $_city=$_POST['city'];
        $_state=$_POST['state'];
        $_descr=$_POST['descr'];
       $_Profile=$_POST['Profile'];

       $fi=$_FILES['fi']['name'];
	     $tmp_name=$_FILES['fi']['tmp_name'];
         $location="/Applications/XAMPP/xamppfiles/htdocs/demo/uploads/".$fi;
         move_uploaded_file($tmp_name,$location);
        
         $q="INSERT INTO `userdata`( `Name`, `email`, `phone`, `city`, `state`, `linkp`, `description`, `profile`, `img`) 
         VALUES ('$_name','$_emid','$_phone','$_city','$_state','$_Linked','$_descr','$_Profile','$fi')";
        $qr=mysqli_query($conn,$q);
        if ($qr) {
            echo "Record inserted successfully.";
        }
        else{
            echo "UnSucessfull";
        }
        

    }
?>
    
</body>
</html>





<!--  -->