<?php
$msg = "";
if(isset($_POST['confirm'])){
    $uemail=$_POST['uemail'];
    $email=$_POST['email'];
    $name = $_POST['name'];
    $body = $_POST['message'];
    $msg = $body;
    $msg = wordwrap($msg,70);
    if(mail($email,"Some one send message from website",$msg,$uemail))
    {
        header("location:./index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/desktop/register.css">
    <title>Hospital Login</title>
</head>
<body>

    <div id="hospitalRegister">
        <div class="container">
        <a href="../index.php"><p style="font-size:1.7rem;">Book Appoinment</p></a>
		</div>
        <form method="POST" >
            <label for="uemail">Your Name</label>
            <input type="email" name="uemail" id="uemail" placeholder="Email"> 
            <label for="name">Your Name</label>
            <input type="text" name="name" id="name" placeholder="Name">
            <label for="number">Contact Number</label>
            <input type="number" name="number" id="number" placeholder="Contact Number">
            <label for="message">Message</label>
            <input type="text" name="message" id="message" placeholder="Message">
            <input type="text" value="<?php echo $_GET["email"]; ?>" name="email" hidden>
            <button type="submit" name="confirm" id="confirm">Confirm Appoinment</button>
		</form>
        <div class="container">
        <a href="./index.php"><p>Back To Website</p></a>
		</div>
    </div>
</body>
</html>