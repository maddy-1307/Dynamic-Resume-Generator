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
        <input type="file" name="fi[]" multiple>
        <input type="text" name="name">
        <input type="submit" name="sub" id="">
    </form>

    <?php
    if(!empty($_POST['sub']))
    {
        $name=$_POST['name'];
        $f=$_FILES['fi']['name'];
        $a="";
        for($i=0;$i<count($f);$i++)
        {
            $a=$a.$f[$i].",";
            $tmp=$_FILES['fi']['tmp_name'][$i];
            move_uploaded_file($tmp,"/Applications/XAMPP/xamppfiles/htdocs/demo/uploads/".$f[$i]);
        }
        $q="INSERT INTO `multi_img`( `name`, `images`) VALUES ('$name','$a')";
        $qr=mysqli_query($conn,$q);
    }
    
    ?>

    <?php
        $s = "SELECT * FROM `multi_img`";
        $sr = mysqli_query($conn,$s);
        foreach($sr as $row){
            ?>
               <?php
                $str = substr($row['images'],0,strlen($row['images'])-1);
                $e = explode(',',$str,0);
                foreach($e as $er){
               ?>
                    <img src="uploads/<?php echo $er; ?>" width="150">
                    <?php
                }
        }
    ?>
    
</body>
</html>