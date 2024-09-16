<?php
$conn = mysqli_connect('localhost', 'root', '', 'form');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>

<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col">
                            <input type="text" name="fname" class="form-control" placeholder="First name" aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="lname">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Current Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="add">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity" name="city">
                        </div>
                        <div class="col-md-6">
                            <label for="Phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select" name="state">
                                <option selected>Choose...</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Gujrat">Gujrat</option>
                                <option value="Maharashtra">Maharashtra</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip" name="zipcode">
                        </div>
                        <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input name="gender" class="form-check-input" type="radio" id="gridRadios1" value="Male" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        MALE
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="gender" class="form-check-input" type="radio" id="gridRadios2" value="Female">
                                    <label class="form-check-label" for="gridRadios2">
                                        FEMALE
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="gender" class="form-check-input" type="radio" id="gridRadios3" value="others">
                                    <label class="form-check-label" for="gridRadios3">
                                        OTHERS
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <label for="startDate">Start</label>
                        <input id="startDate" class="form-control" type="date" name="sdt"/>
                        <label for="endDate">End</label>
                        <input id="endDate" class="form-control" type="date" name="edt"/>
                        <div class="col-md-4">
                            <label for="inputCity" class="form-label">City</label>
                            <select id="inputCity" class="form-select" name="vcity">
                                <option selected>Choose...</option>
                                <option value="Jaipur">Jaipur</option>
                                <option value="Jaisalmer">Jaisalmer</option>
                                <option value="Ajmer">Ajmer</option>
                                <option value="Pushkar">Pushkar</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type='submit' value="submit" name="sub" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Button to trigger the modal -->
<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">Check Availability</button>

<?php
if (!empty($_POST['sub'])) {
    $_fname = $_POST['fname'];
    $_lname = $_POST['lname'];
    $_email = $_POST['email'];
    $_add = $_POST['add'];
    $_city = $_POST['city'];
    $_phone = $_POST['phone'];
    $_state = $_POST['state'];
    $_zipcode = $_POST['zipcode'];
    $_gender = $_POST['gender'];
    $_sdt = $_POST['sdt'];
    $_edt = $_POST['edt'];
    $_vcity = $_POST['vcity'];

    $q = "INSERT INTO `mform`(`f_name`, `l_name`, `email`, `address`, `city`, `phone`, `state`, `zip`, `gender`, `start`, `end`, `vcity`) 
          VALUES ('$_fname','$_lname','$_email','$_add','$_city','$_phone','$_state','$_zipcode','$_gender','$_sdt','$_edt','$_vcity')";
    $qr = mysqli_query($conn, $q);
}
?>
</body>
</html>
