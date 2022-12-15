<?php
    include 'database.php';
    $profileObj = new database();
    if (isset($_POST['submit'])) {
        $profileObj->insertData($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>RMG Maheshwari</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="main_css/style.css" />
</head>

<body>
<div class="form-layer1 d-flex justify-content-center">
    <div class="form-layer2">
        <form class="form-container text-black" action="" method="post">
            <p class="fw-bold fs-2">Personal Information</p>
            <div class="row mb-3">
                <div class="col-6">
                    <label class="form-label text-black" for="a1">First Name</label>
                    <input class="form-control" id="a1" name="fname" type="text" required>
                </div>
                <div class="col-6">
                    <label class="form-label text-black" for="a2">Last Name</label>
                    <input class="form-control" id="a2" name="lname" type="text" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="">
                    <label class="btn btn-black" for="option1">Gender</label>

                    <input type="radio" class="btn-check m-2" name="gender" value="Male" id="g1" autocomplete="off" />
                    <label class="btn btn-outline-black text-black" for="g1">Male</label>

                    <input type="radio" class="btn-check m-2" name="gender" id="g2" value="Female" autocomplete="off" />
                    <label class="btn btn-outline-black text-black" for="g2">Female</label>

                    <input type="radio" class="btn-check m-2" name="gender" id="g3" value="Prefer Not to Say" autocomplete="off" />
                    <label class="btn btn-outline-black text-black" for="g3">Prefer Not to Say</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-4">
                    <label class="form-label text-black" for="b1">Date of Birth</label>
                    <input class="form-control" id="b1" name="dob" type="date" required>
                </div>
                <div class="col-4">
                    <label class="form-label text-black" for="b2">Age</label>
                    <input class="form-control" id="b2" name="age" type="number" required>
                </div>
                <div class="col-4">
                    <label class="form-label text-black" for="b3">Contact Number</label>
                    <input class="form-control" id="b3" name="numb" type="tel" required>
                </div>
            </div>

            <div class="row mb-3">
                <p class="fs-2 fw-bold">Education</p>
                <div class="col-6">
                    <label class="form-label text-black" for="c1">Higher School Education</label>
                    <input class="form-control" id="c1" name="school" type="text" required>
                </div>
                <div class="col-6">
                    <label class="form-label text-black" for="c2">Field of Interest</label>
                    <input class="form-control" id="c2" name="foi" type="text" required>
                </div>
            </div>

            <div>
                <p class="fs-2 fw-bold">Address</p>

                <div class="row mb-3">
                    <div class="col-12">
                        <label class="form-label text-black" for="d1">Street Address</label>
                        <input class="form-control" id="d1" name="street" type="text" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-4">
                        <label class="form-label text-black" for="d2">City</label>
                        <input class="form-control" id="d2" name="city" type="text" required>
                    </div>
                    <div class="col-4">
                        <label class="form-label text-black" for="d3">Province</label>
                        <input class="form-control" id="d3" name="province" type="text" required>
                    </div>
                    <div class="col-4">
                        <label class="form-label text-black" for="d4">Postal Code</label>
                        <input class="form-control" id="d4" name="pin" type="text" required>
                    </div>
                </div>

            </div>

            <div class="row mb-3">
                <div class=" d-flex justify-content-center">
                    <input type="submit" value="Create Profile" name="submit" class="btn btn-success text-center text-black col-6">
                </div>
            </div>

        </form>
    </div>
</div>
<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>
</body>
</html>

