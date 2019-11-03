<?php
include('../database/db.php');
include('../register.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/desktop/register.css">
    <title>Hospital Register</title>
</head>
<body>
    <div id="hospitalRegister">
        <form method="POST">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email">
            <label for="hospital_user_name">Username</label>
            <input type="text" name="hospital_user_name" id="hospital_user_name" placeholder="Username">
            <label for="hospital_name">Hospital Name</label>
            <input type="text" name="hospital_name" id="hospital_name" placeholder="Hospital Name">
            <label for="hospital_password">Password</label>
            <input type="text" name="hospital_password" id="hospital_password" placeholder="Password">
            <button type="submit" name="submit">Register</button>
        </form>
        <div class="container">
		<a href="../index.php"><p>Back To Website</p></a>
		<a href="./login.php"><p>Login Hospital</p></a>
		</div>
    </div>
</body>
</html>