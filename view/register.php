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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/desktop/register.css">
    <title>Hospital Register</title>
</head>
<body>
    <div id="hospitalRegister">
        <form method="POST" class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email" require>
            <div class="invalid-feedback">
                Enter a valid email
            </div>
            <label for="hospital_user_name">Username</label>
            <input type="text" name="hospital_user_name" class="form-control" id="hospital_user_name" placeholder="Username" require>
            <div class="invalid-feedback">
                Username must be between 2 and 10 characters
            </div>
            <label for="hospital_name">Hospital Name</label>
            <input type="text" name="hospital_name" id="hospital_name" class="form-control" placeholder="Hospital Name" require>
            <div class="invalid-feedback">
                Name must be between 2 and 10 characters
            </div>
            <label for="hospital_password">Password</label>
            <input type="text" name="hospital_password" class="form-control" id="hospital_password" placeholder="Password" require>
            <div class="invalid-feedback">
                Password must be between 7 and 10 characters
            </div>
            <button type="submit" name="submit">Register</button>
        </form>
        <div class="containers">
		<a href="../index.php"><p>Back To Website</p></a>
		<a href="./login.php"><p>Login Hospital</p></a>
		</div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="../js/validate.js"></script>
</body>
</html>