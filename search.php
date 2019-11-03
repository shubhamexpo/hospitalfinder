<?php 
if(isset($_POST['editDetails'])){
    $states_name = $_POST["states_name"];
    $citys_name = $_POST['citys_name'];
    $areas_name = $_POST['areas_name'];
    $Problem = $_POST['Problem'];

    $check1 = "SELECT * FROM hospital WHERE states='$states_name' AND city='$citys_name' AND area='$areas_name' AND treatment='$Problem'";
    $RESULT1 = mysqli_query($connection,$check1);
}
?>