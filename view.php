<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
        header('location: signin.php');
        exit();
    }else{
        include './database.php';
        $profileObj = new database();

// adding delete to delete the record that were inserted
        if(isset($_GET['deletedID']) && !empty($_GET['deletedID'])){
            $deletedID = $_GET['deletedID'];
            $profileObj->deleteRecord($deletedID);
        }
    }
?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bio-data</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="main_css/style.css" rel="stylesheet">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <main class="view-back">

        <div class="p-4 fs-3 fw-bold text-light text-center">
            <p>Student Profiles</p>
        </div>
        <div class="d-flex justify-content-center">

            <h4 class="btn btn-outline-light m-2"><a href="./Profile_form.php" class="nav-link">Add Profile<i class="fa-solid fa-circle-plus pe-2"></i></a></h4>
            <h4 class="btn btn-outline-light m-2"><a href="./afterLoginIndex.php" class="nav-link">Home Page<i class="fa-solid fa-house pe-2"></i></a></h4>

        </div>

        <?php
        // adding msg statement to give infromation about the update,inserted and deleted data.
        if (isset($_GET['msg1']) == "insert") {
            echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Your Profile added successfully
            </div>";
        }
        if (isset($_GET['msg2']) == "update") {
            echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Your Profile updated successfully
            </div>";
        }
        if (isset($_GET['msg3']) == "delete") {
            echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>×</button>
              Profile deleted successfully
            </div>";
        }
        ?>

        <?php
            $profiles = $profileObj->displayData();
            foreach ($profiles as $profile) {
            ?>

        <section class="section1">
            <div class="p-3 profile-data d-flex justify-content-center">
                <div class="sub-profile-data p-5 bg-light">
                        <div>
                            <p>First Name: <span><?php echo $profile['fname']; ?></span></p>
                        </div>
                        <div>
                            <p>Last Name: <span><?php echo $profile['lname']; ?></span></p>
                        </div>
                        <div>
                            <p>Gender: <span><?php echo $profile['gender']; ?></span></p>
                        </div>
                        <div>
                            <p>Date of Birth: <span><?php echo $profile['dob']; ?></span></p>
                        </div>
                        <div>
                            <p>Age: <span><?php echo $profile['age']; ?></span></p>
                        </div>
                        <div>
                            <p>High School: <span><?php echo $profile['school']; ?></span></p>
                        </div>
                        <div>
                            <p>Field of Interest: <span><?php echo $profile['foi']; ?></span></p>
                        </div>
                        <div>
                            <p>Street: <span><?php echo $profile['street']; ?></span></p>
                        </div>
                        <div>
                            <p>City: <span><?php echo $profile['city']; ?></span></p>
                        </div>
                        <div>
                            <p>Province: <span><?php echo $profile['province']; ?></span></p>
                        </div>
                        <div>
                            <p>Postal Code: <span><?php echo $profile['pin']; ?></span></p>
                        </div>

                    <div class="d-flex justify-content-evenly">
                        <div class="d-flex justify-content-center col-md-6">
                            <a href="edit.php?updateID=<?php echo $profile['id'];?>">
                                <input type="submit" class="profile-edit-btn btn btn-outline-success" name="btnAddMore" value="Edit Profile"></a>
                        </div>

                        <div class="d-flex justify-content-center col-md-6">
                            <a href="view.php?deletedID=<?php echo $profile['id'];?>">
                                <input type="submit" class="profile-edit-btn btn btn-outline-danger" name="btnAddMore" value="Delete"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
            }
            ?>

    </main>



    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
    </body>
</html>