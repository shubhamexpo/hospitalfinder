<?php
if(isset($_POST['state'])){
    $states_name = $_POST['states_name'];
    $addState = "INSERT INTO states(states_name) VALUES('$states_name')";
    $query = mysqli_query($connection,$addState);
    if($query){
        header('location:../view/addItems.php');
    }
}

if(isset($_POST['citys'])){
    $citys_name = $_POST['citys_name'];
    $addCity = "INSERT INTO citys(citys_name) VALUES('$citys_name')";
    $query = mysqli_query($connection,$addCity);
    if($query){
        header('location:../view/addItems.php');
    }
}

if(isset($_POST['areas'])){
    $areas_name = $_POST['areas_name'];
    $pincode = $_POST['pincode'];
    $addAreas = "INSERT INTO area(areas_name,pincode) VALUES('$areas_name','$pincode')";
    $query = mysqli_query($connection,$addAreas);
    if($query){
        header('location:../view/addItems.php');
    }
}

if(isset($_POST['addBlood'])){
    $blood_group_name = $_POST['blood_group_name'];
    $addBlood = "INSERT INTO bloodgroup(blood_group_name) VALUES('$blood_group_name')";
    $query = mysqli_query($connection,$addBlood);
    if($query){
        header('location:../view/addServices.php');
    }
}

if(isset($_POST['addTreatmentsNames'])){
    $addTreatmentsName = $_POST['addTreatmentsName'];

    $addTreatmentColumn = "ALTER TABLE hospital ADD $s VARCHAR(255) NULL AFTER hospital_id";
    $addTreatment = "INSERT INTO treatments(addTreatmentsName) VALUES('$s')";
    $query = mysqli_query($connection,$addTreatment);
    $query2 = mysqli_query($connection,$addTreatmentColumn);
    if($query2){
        header('location:../view/addTreatments.php');
    }
}
?>
