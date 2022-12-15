<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="./main_css/style.css">

</head>
<body>
<!-- Start your project here-->

<div class="area" >
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>


    <div class="form-lay1 d-flex justify-content-center">
        <div class="form-lay2 bg-light">
            <p class="m-0 text-center fs-3 fw-bold">Sign Up</p>
            <form class="form-space" method="post" action="./save-admin.php">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" name="first_name" id="form3Example1" class="form-control" required/>
                            <label class="form-label" for="form3Example1">First name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" name="last_name" id="form3Example2" class="form-control" required/>
                            <label class="form-label" for="form3Example2">Last name</label>
                        </div>
                    </div>
                </div>

                <!-- Username input -->
                <div class="form-outline mb-4">
                    <input type="text" name="username" id="form3Example3" class="form-control" required/>
                    <label class="form-label" for="form3Example3">Username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" name="password" id="form3Example4" class="form-control" required/>
                    <label class="form-label" for="form3Example4">Password</label>
                </div>
                <!--  Confirm Password input  -->
                <div class="form-outline mb-4">
                    <input type="password" name="confirm" id="form3Example4.1" class="form-control" required/>
                    <label class="form-label" for="form3Example4.1">Confirm Password</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>or sign up with:</p>
                    <button type="button" class="btn btn-secondary btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-secondary btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-secondary btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-secondary btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div >

<!-- End your project here-->

<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>
</body>
</html>
