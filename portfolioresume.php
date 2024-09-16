<?php
$conn = mysqli_connect('localhost', 'root', '', 'portfolio');
$uid = $_GET['uid'];


// for userdata table 
$a = "SELECT * FROM `userdata` WHERE id='$uid'";
$ar = mysqli_query($conn,$a);
$row = mysqli_fetch_row($ar);


// for skills data 
$b = "SELECT * FROM `skills` WHERE userdata_id='$uid'";
$br = mysqli_query($conn,$b);
$row1 = mysqli_fetch_row($br);


// for education data fetch
$c = "SELECT * FROM `Educatioin` WHERE userdata_id='$uid'";
$cr = mysqli_query($conn,$c);
$row2 = mysqli_fetch_row($cr);


// to fetch data from cocurricular table
$d = "SELECT * FROM `cocurricular` WHERE userdata_id='$uid'";
$dr = mysqli_query($conn, $d);
$row3 = mysqli_fetch_row($dr);

if ($row) {
    $imagePath = 'uploads/' . $row[9];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container card border border-dark my-3">
    <div class="row mt-5 mb-5" >
      
      <div class="col-lg-4 col-md-3 col-12">
        <div class="text-center">
        <img src="<?php echo $imagePath; ?>" alt="Image" class="img-fluid border border-2 border-success rounded-circle p-2" style="width:197px !important; height: 197px !important;">
        </div>

        <div class="gap-1 bg-success p-4 d-md-none d-block mt-2">
          <h1 class="text-light text-center"><?php echo $row[1]; ?></h1>
          <h3 class="text-light text-center"><?php echo $row[8]; ?></h3>
          <div style="background-color:white; height:2px; width:100%"></div>
          <p class="text-light mt-3"><?php echo $row[7]; ?></p>
        </div>

        <div class="mt-3">
          <i class="fa-solid fa-envelope text-success"></i>
          <h6><a class="text-dark text-decoration-none" href="mailto:<?php echo $row[2]; ?>"><?php echo $row[2]; ?></a></h6>
        </div>
        <div class="mt-3">
          <i class="fa-solid fa-phone text-success"></i>
          <h6><a class="text-dark text-decoration-none" href="tel:<?php echo $row[3]; ?>"><?php echo $row[3]; ?></a></h6>
        </div>
        <div class="mt-3">
          <i class="fa-solid fa-location-dot text-success"></i>
          <h6><?php echo $row[4]; ?>, <?php echo $row[5]; ?></h6>
        </div>
        <div class="mt-3">
          <i class="fa-brands fa-linkedin text-success"></i>
          <h6><?php echo $row[6]; ?></h6>
        </div>
        <div>
          <h3 class="text-success mt-5">SKILLS</h3>
          <div style="background-color:rgb(25, 135, 84); height:2px; width:100%"></div>
        </div>
      <h5 class="mt-2">HTML</h5>
        <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="<?php echo $row1[2]; ?>" aria-valuemin="0" aria-valuemax="100" style="height: 22px">
          <div class="progress-bar bg-success" style="width: <?php echo $row1[2];?>%"><?php echo $row1[2]; ?>%</div>
          
        </div>
        <h5 class="mt-2">CSS</h5>
        <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="<?php echo $row1[3]; ?>" aria-valuemin="0" aria-valuemax="100" style="height: 22px">
          <div class="progress-bar bg-success" style="width: <?php echo $row1[3];?>%"><?php echo $row1[3]; ?>%</div>
        </div>
        <h5 class="mt-2">JavaScript</h5>
        <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="<?php echo $row1[4]; ?>" aria-valuemin="0" aria-valuemax="100" style="height: 22px">
          <div class="progress-bar bg-success" style="width: <?php echo $row1[4];?>%"><?php echo $row1[4]; ?>%</div>
        </div>
        <h5 class="mt-2">Java</h5>
        <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="<?php echo $row1[5]; ?>" aria-valuemin="0" aria-valuemax="100" style="height: 22px">
          <div class="progress-bar bg-success" style="width: <?php echo $row1[5];?>%"><?php echo $row1[5]; ?>%</div>
        </div>
        <h5 class="mt-2">Flutter</h5>
        <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="<?php echo $row1[6]; ?>" aria-valuemin="0" aria-valuemax="100" style="height: 22px">
          <div class="progress-bar bg-success" style="width: <?php echo $row1[6];?>%"><?php echo $row1[6]; ?>%</div>
        </div>

        <h5 class="mt-2">PHP</h5>
        <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="<?php echo $row1[7]; ?>" aria-valuemin="0" aria-valuemax="100" style="height: 22px">
          <div class="progress-bar bg-success" style="width: <?php echo $row1[7];?>%"><?php echo $row1[7]; ?>%</div>
        </div>

        <div>
          <h3 class="text-success mt-5">LANGUAGES</h3>
          <div style="background-color:rgb(25, 135, 84); height:2px; width:100%"></div>
        </div>

        <h5 class="mt-2">English</h5>
        <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="<?php echo $row1[8]; ?>" aria-valuemin="0" aria-valuemax="100" style="height: 22px">
          <div class="progress-bar bg-success" style="width: <?php echo $row1[8];?>%"><?php echo $row1[8]; ?>%</div>
        </div>

        <h5 class="mt-2">Hindi</h5>
        <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="<?php echo $row1[9]; ?>" aria-valuemin="0" aria-valuemax="100" style="height: 22px">
          <div class="progress-bar bg-success" style="width: <?php echo $row1[9];?>%"><?php echo $row1[9]; ?>%</div>
        </div>

        
        
        
      </div>






      <!-- right side big column side -->
      <div class="col-lg-8 col-md-9 col-12">
        <div class="gap-1 bg-success p-4 d-md-block d-none">
          <h1 class="text-light"><?php echo $row[1]; ?></h1>
          <h3 class="text-light"><?php echo $row[8]; ?></h3>
          <div style="background-color:white; height:2px; width:50%"></div>
          <p class="text-light mt-3"><?php echo $row[7]; ?></p>
        </div>

        <div>
          <h3 class="text-success mt-5">EDUCATION</h3>
          <div style="background-color:rgb(25, 135, 84); height:2px; width:100%"></div>
        </div>
        <div>
          <h5  class="mt-3" style="color:rgb(25, 135, 84);"><strong>Class 10</strong></h5>
          <div style="background-color:rgb(25, 135, 84); height:1px; width:80px"></div>
          <div class="mt-3">
            <h5><?php echo $row2[2];?></h5>
            <h6><?php echo $row2[3];?>%</h6>
          </div>
        </div>
        <div>
          <h5  class="mt-3" style="color:rgb(25, 135, 84);"><strong>Class 12</strong></h5>
          <div style="background-color:rgb(25, 135, 84); height:1px; width:80px"></div>
          <div class="mt-3">
            <h5><?php echo $row2[4];?></h5>
            <h6><?php echo $row2[5];?>%</h6>
          </div>
        </div>

        <div>
          <h5  class="mt-3" style="color:rgb(25, 135, 84);"><strong><?php echo $row2[8];?></strong></h5>
          <div style="background-color:rgb(25, 135, 84); height:1px; width:420px"></div>
          <div class="mt-3">
            <h5><?php echo $row2[6];?></h5>
            <h6><?php echo $row2[7];?> CGPA</h6>
          </div>
        </div>

        <div>
          <h3 class="text-success mt-5">CO-CURRICULAR</h3>
          <div style="background-color:rgb(25, 135, 84); height:2px; width:100%"></div>
        </div>

        <div>
        <h5  class="mt-3" style="color:rgb(25, 135, 84);"><strong><?php echo $row3[2];?></strong></h5>
          <div style="background-color:rgb(25, 135, 84); height:1px; width:155px"></div>
          <div class="mt-3">
            <h5><?php echo $row3[5];?></h5>
            <h6 class="mt-3" style="color:rgb(25, 135, 84);"><?php echo $row3[3];?> - <?php echo $row3[4];?></h6>
            
          </div>
        </div>

        <div>
        <h5  class="mt-4" style="color:rgb(25, 135, 84);"><strong><?php echo $row3[6];?></strong></h5>
          <div style="background-color:rgb(25, 135, 84); height:1px; width:245px"></div>
          <div class="mt-3">
            <h5><?php echo $row3[9];?></h5>
            <h6 class="mt-3" style="color:rgb(25, 135, 84);"><?php echo $row3[7];?> - <?php echo $row3[8];?></h6>
            
          </div>
        </div>


        <div>
        <h5  class="mt-4" style="color:rgb(25, 135, 84);"><strong><?php echo $row3[10];?></strong></h5>
          <div style="background-color:rgb(25, 135, 84); height:1px; width:350px"></div>
          <div class="mt-3">
            <h5><?php echo $row3[13];?></h5>
            <h6 class="mt-3" style="color:rgb(25, 135, 84);"><?php echo $row3[11];?> - <?php echo $row3[12];?></h6>
            
          </div>
        </div>





      </div>
    </div>
  </div>
</body>
</html>
