<?php
include("./database/db.php");
$hospital_user_name = $_GET['hospital_user_name'];
$blood_quantity = $_GET['blood_quantity'];
$query = "DELETE FROM bloodAvailbility where hospital_user_name = '$hospital_user_name' AND blood_quantity = '$blood_quantity'";
$check = mysqli_query($connection,$query);
if($check){
    header('location:./hospital.php?hospital_user_name='.$hospital_user_name);
}else{
    echo"error";
}
?>