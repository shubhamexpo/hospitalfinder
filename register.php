    
<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $hospital_password = $_POST['hospital_password'];
    $hospital_user_name = $_POST['hospital_user_name'];
    $hospital_user_name = $_POST['hospital_user_name'];
    $hospital_name = $_POST['hospital_name'];
    $register = "INSERT INTO hospital(email,hospital_user_name,hospital_name,hospital_password) VALUES('$email','$hospital_user_name','$hospital_name','$hospital_password')";
    $query = mysqli_query($connection,$register);
    if($query){
        header('location:../view/login.php');
    }
}
?>