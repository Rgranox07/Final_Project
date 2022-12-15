<?php
    include "./database.php";
    $profileObj = new database();
    if (isset($_GET['editId']) && !empty($_GET['editId'])){
        $editId = $_GET['editId'];
        $res = $profileObj->displayRecordById($editId);
    }
    if (isset($_POST['update'])) {
        $profileObj->updateRecord($_POST);;
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
<!-- End your project here-->
<div class="form-layer1 d-flex justify-content-center">
    <div class="form-layer2">
        <form class="form-container text-black" action="edit.php" method="post">
            <p class="fw-bold fs-2">Personal Information</p>
            <div class="row mb-3">
                <div class="col-6">
                    <label class="form-label text-black" for="a1">First Name</label>
                    <input class="form-control" id="a1" name="ufname" type="text" value="<?php echo $res['fname']; ?>" required>
                </div>
                <div class="col-6">
                    <label class="form-label text-black" for="a2">Last Name</label>
                    <input class="form-control" id="a2" name="ulname" type="text" value="<?php echo $res['lname']; ?>" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="">
                    <label class="btn btn-black" for="option1">Gender</label>

                    <input type="radio" class="btn-check m-2" name="ugender" value="Male" id="g1" value="Male" <?php echo ($res['gender']=='Male')?"checked":""; ?> autocomplete="off" />
                    <label class="btn btn-outline-black" for="g1">Male</label>

                    <input type="radio" class="btn-check m-2" name="ugender" id="g2" value="Female" <?php echo ($res['gender']=='Female')?"checked":""; ?> autocomplete="off" />
                    <label class="btn btn-outline-black" for="g2">Female</label>

                    <input type="radio" class="btn-check m-2" name="ugender" id="g3" value="Prefer Not to Say" <?php echo ($res['gender']=='Prefer Not to Say')?"checked":""; ?> autocomplete="off" />
                    <label class="btn btn-outline-black" for="g3">Prefer Not to Say</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-4">
                    <label class="form-label text-black" for="b1">Date of Birth</label>
                    <input class="form-control" id="b1" name="udob" type="date" value="<?php echo $res['dob']; ?>" required>
                </div>
                <div class="col-4">
                    <label class="form-label text-black" for="b2">Age</label>
                    <input class="form-control" id="b2" name="uage" type="number" value="<?php echo $res['age']; ?>" required>
                </div>
                <div class="col-4">
                    <label class="form-label text-black" for="b3">Contact Number</label>
                    <input class="form-control" id="b3" name="unumb" type="tel" value="<?php echo $res['numb']; ?>" required>
                </div>
            </div>

            <div class="row mb-3">
                <p class="fs-2 fw-bold">Education</p>
                <div class="col-6">
                    <label class="form-label text-black" for="c1">Higher School Education</label>
                    <input class="form-control" id="c1" name="uschool" type="text" value="<?php echo $res['school']; ?>" required>
                </div>
                <div class="col-6">
                    <label class="form-label text-black" for="c2">Field of Interest</label>
                    <input class="form-control" id="c2" name="ufoi" type="text" value="<?php echo $res['foi']; ?>" required>
                </div>
            </div>

            <div>
                <p class="fs-2 fw-bold">Address</p>

                <div class="row mb-3">
                    <div class="col-12">
                        <label class="form-label text-black" for="d1">Street Address</label>
                        <input class="form-control" id="d1" name="ustreet" type="text" value="<?php echo $res['street']; ?>" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-4">
                        <label class="form-label text-black" for="d2">City</label>
                        <input class="form-control" id="d2" name="ucity" type="text" value="<?php echo $res['city']; ?>" required>
                    </div>
                    <div class="col-4">
                        <label class="form-label text-black" for="d3">Province</label>
                        <input class="form-control" id="d3" name="uprovince" type="text" value="<?php echo $res['province']; ?>" required>
                    </div>
                    <div class="col-4">
                        <label class="form-label text-black" for="d4">Postal Code</label>
                        <input class="form-control" id="d4" name="upin" type="text" value="<?php echo $res['pin']; ?>" required>
                    </div>
                </div>

            </div>

            <div class="row mb-3">
                <div class=" d-flex justify-content-center">
                    <input type="hidden" name="id" value="<?php echo $res['id']; ?>">
                    <input type="submit" value="UPDATE" name="update" class="btn btn-success text-center col-6">
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
