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
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="fi" >
        <input type="text" name="name">
        <input type="submit" name="sub" id="">
    </form>
    <table>
        <tr>
        <th> S.NO</th>
            <th>name</th>
            <th>image</th>
            

        </tr>

        
    </table>
    <?php
    if(!empty($_POST['sub']))
    {
     $fi=$_FILES['fi']['name'];
	$tmp_name=$_FILES['fi']['tmp_name'];
    // echo $tmp_name;s
   // $location="/Applications/XAMPP/xamppfiles/htdocs/demo/updates".$fi;
   $location="/Applications/XAMPP/xamppfiles/htdocs/demo/uploads/".$fi;
    move_uploaded_file($tmp_name,$location);
    $_name=$_POST['name'];
    $q="INSERT INTO `img`(name, image) VALUES ('$_name','$fi')";
    $qr=mysqli_query($conn,$q);



    }
    ?>
</body>
</html>