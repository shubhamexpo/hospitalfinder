<?php
session_start();
include('../database/db.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/desktop/register.css">
    <title>Hospital Login</title>
</head>
<body>

<?php 
            
			if(isset($_POST['login']))
			{
				$hospital_user_name=$_POST['hospital_user_name'];
				$pwd=$_POST['hospital_password'];
				//COnnect to DB
				
				
				$result=mysqli_query($connection,"select * from hospital where hospital_user_name='$hospital_user_name'");
				if(mysqli_num_rows($result)==1)
				{
					$row=mysqli_fetch_assoc($result);
					if($row['hospital_password']==$pwd)
					{
                           $_SESSION["hospital_user_name"] = $hospital_user_name;
                            header("location:../hospital.php?hospital_user_name=".$hospital_user_name);
					}
					else
					{

						echo "<script>
						 alert('Username and Password Do not match');
						</script>";
					}
				}
				else
				{
					echo "<script>
					alert('Sorry! Email Does not
					Exists');
				   </script>";
				}
				
			}
			?>


    <div id="hospitalRegister">
        <form method="POST">
            <label for="hospital_user_name">Username</label>
            <input type="text" name="hospital_user_name" id="email" placeholder="Email">
            <label for="hospital_password">Password</label>
            <input type="password" name="hospital_password" id="password" placeholder="Password">
            <button type="submit" name="login">Login</button>
		</form>
		<div class="container">
		<a href="../index.php"><p>Back To Website</p></a>
		<a href="./register.php"><p>Register As Hospital</p></a>
		</div>
    </div>
</body>
</html>