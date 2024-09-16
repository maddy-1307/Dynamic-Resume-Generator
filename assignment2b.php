<?php
$conn = mysqli_connect('localhost', 'root', '', 'assign1');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        #a1 {
            text-align: center;
            height: 300px;
            background-color:rgb(188,186,186);
            padding-top:15px;
        }
        img {
            border: 2px solid black;
            border-radius: 50%;
            height: 250px;
            width: 250px;
        }
        #a2 {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #a3 {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            /* margin-top: 20px; */
            background-color:rgb(208,205,205);
            paddig-bottom:50px;

        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
            width:400px;
        }
        th {
            background-color: #f2f2f2;
        }
        td{
            background-color: burlywood;
        }
        #a10{
            border:2px groove black;
            height:900px;
            width:600px;
            background-color:rgb(208,205,205);
           margin-left:650px;
            justify-content:center;
           
        }
    </style>
</head>
<body>
  <?php
  $a = "SELECT * FROM assignment2 WHERE id=3";
  $ar = mysqli_query($conn, $a);
  $row = mysqli_fetch_assoc($ar);

  if ($row) {
      $imagePath = 'uploads/' . $row['image'];
  ?>
  <div id=a10>
  <div id="a1"> 
      <img src="<?php echo $imagePath; ?>" alt="Image">
  </div>
  <div id="a3">
  <div id="a2">
      <h1><?php echo $row['name']; ?></h1>
  </div>
  
      <div>
          <i class="fa fa-envelope" aria-hidden="true">
              <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
          </i>
      </div>
      <div>
          <i class="fa fa-phone" aria-hidden="true">
              <a href="tel:<?php echo $row['number']; ?>"><?php echo $row['number']; ?></a>
          </i>
      </div>
      <div>
          <table>
              <tr>
                  <th>Degree</th>
                  <td><?php echo $row['deg']; ?></td>
              </tr>
              <tr>
                  <th>Specialization Field</th>
                  <td><?php echo $row['field']; ?></td>
              </tr>
              <tr>
                  <th>CGPA</th>
                  <td><?php echo $row['cgpa']; ?></td>
              </tr>
              <tr>
                  <th>Graduating Year</th>
                  <td><?php echo $row['end_yr']; ?></td>
              </tr>
          </table>
      </div>
  </div>
  </div>
  <?php
  } else {
      echo "No records found.";
  }

  mysqli_close($conn);
  ?>
</body>
</html>
