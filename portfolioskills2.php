<?php
$conn=mysqli_connect('localhost','root','','portfolio');
$uid=$_GET['uid'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
</head>
<body>
    <form action="" method="POST">
    <span>HTML Profficency</span>
    <input type="range" name="html"  max="100", min="0" id="" > <br>
    <span>CSS Profficency</span>
    <input type="range" name="css"  max="100", min="0" id="" ><br>
    <span>JavaScript Profficency</span>
    <input type="range" name="js"   max="100", min="0" id="" >
    <br>
    <span>Java Profficency</span>
    <input type="range" name="java"   max="100", min="0" id="" >
    <br>
    <span>Flutter Profficency</span>
    <input type="range" name="flutter"   max="100", min="0" id="">
    <br>
    <span>Php Profficency</span>
    <input type="range" name="php"   max="100", min="0" id="">
    <br>
    <span>Languages</span><br>
    <span>English</span>
    <input type="text" name="eng" id="" placeholder="% efficency in English"><br>
    <span>Hindi</span>
    <input type="text" name="hindi" id="" placeholder="% efficency in Hindi">
    <br>
    <input type="text" name="field" id="" placeholder="Enter  , seprated skills">
    <input type="submit" name="sub" id="">

    </form>



    <?php
        if(!empty($_POST['sub']))
        {
            
            $_html=$_POST['html'];
            $_css=$_POST['css'];
            $_js=$_POST['js'];
            $_java=$_POST['java'];
            $_flutter=$_POST['java'];
            $_php=$_POST['php'];
            $_eng=$_POST['eng'];
            $_hindi=$_POST['hindi'];
            $_field=$_POST['field'];
            $q="INSERT INTO `skills`( `userdata_id`, `html`, `css`, `js`, `java`, `flutter`, `php`, `eng`, `hindi`,`fields`) 
            VALUES ('$uid',' $_html',' $_css',' $_js',' $_java',' $_flutter',' $_php',' $_eng',' $_hindi','$_field')";
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
