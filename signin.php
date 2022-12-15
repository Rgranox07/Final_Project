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


<div>
    <p class="text-center fs-2 fw-bold">Sign In</p>
    <form class="p-3" method="post" action="./validate.php">
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="text" name="username" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Username</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" name="password" id="form1Example2" class="form-control" />
            <label class="form-label" for="form1Example2">Password</label>
        </div>

        <!-- Submit button -->
        <button type="submit" value="Log-in" class="btn btn-primary btn-block">Sign in</button>
    </form>
</div>

<!-- End your project here-->

<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>
</body>
</html>
