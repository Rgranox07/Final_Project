<?php
    require './database1.php';
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $ok = true;

    if(empty($first_name)){
        echo '<p>First Name Required</p>';
        $ok = false;
    }
    if(empty($last_name)){
        echo '<p>Last Name Required</p>';
        $ok = false;
    }
    if(empty($username)){
        echo '<p>Username is Required</p>';
        $ok = false;
    }
    if((empty($password)) || ($password != $confirm)){
        echo '<p>Invalid Password</p>';
        $ok = false;
    }
    if($ok){
        $password = hash('sha512', $password);
        $sql = "INSERT INTO admins (first_name, last_name, username, password) VALUES ('$first_name', '$last_name', '$username', '$password');";
        $conn->exec($sql);
        echo '<section class="success-row">';
        echo '<div>';
        echo '<h3>Admin Saved</h3>';
        echo '</div>';
        echo '</section>';
        $conn = null;
    }
?>

<section class="row success-back-row">
    <div>
        <p>All setup, click the button below to head to the sign in!</p>
        <a href="./signin.php">Sign In</a>
    </div>
</section>
