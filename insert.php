<?php
 $conn = mysqli_connect('localhost','root','','mad');
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
        <input type="text" placeholder="name" name="fname" required>
        <input type="text" placeholder="last name" name="lname" required>
        <input type="text" placeholder="number" name="phone" required>
        <input type="text" placeholder="address" name="add" required>
        <input type="submit" placeholder="name" name="sub">

    </form>
    <?php
          if(!empty($_POST['sub'])){
            $name = $_POST['fname'];
            $last = $_POST['lname'];
            $phone = $_POST['phone'];
            $add=$_POST['add'];

            $q = "INSERT INTO `input` (`name`, `l_name`, `phone`, `address`) 
                  VALUES ('$name','$last','$phone','$add')";
            $qr = mysqli_query($conn,$q);

        }

    ?>

</body>
</html>