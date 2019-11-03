<?php


if(isset($_POST['editDetails'])){
    $hospital_name = $_POST["hospital_name"];
    $hospital_details = $_POST['hospital_details'];
    $hospital_phone_number = $_POST['hospital_phone_number'];
    $hospital_ambulance_number = $_POST['hospital_ambulance_number'];
    $hospital_address = $_POST['hospital_address'];
    $states = $_POST['states'];
    $city = $_POST['city'];
    $area = $_POST['area'];

    $update="UPDATE hospital SET hospital_name='$hospital_name' ,hospital_details='$hospital_details',hospital_phone_number='$hospital_phone_number',hospital_ambulance_number='$hospital_ambulance_number',hospital_address='$hospital_address', states='$states', city='$city',area='$area' WHERE hospital_user_name='$name'";
    $query = mysqli_query($connection,$update);
    header("location:./hospital.php?hospital_user_name=".$name);
}

if(isset($_POST['editPhoto'])){

    
  $photo1 = $_FILES['photo1'];

  $fileName1 = $photo1['name'];

  $fileError1 = $photo1['error'];

  $filetmp1 = $photo1['tmp_name'];

  $fileExtension1 = explode('.',$fileName1);

  $fileCheck1 = strtolower(end($fileExtension1));


  $fileExtensionStored1 = array('png','jpg','jpeg');
  if(in_array($fileCheck1,$fileExtensionStored1)){
      $destinationFile1 = './media/hospitalPhoto/'.$fileName1;
      move_uploaded_file($filetmp1,$destinationFile1);
  }


  $photo2 = $_FILES['photo2'];

  $fileName2 = $photo2['name'];

  $fileError2 = $photo2['error'];

  $filetmp2 = $photo2['tmp_name'];

  $fileExtension2 = explode('.',$fileName2);

  $fileCheck2 = strtolower(end($fileExtension2));
  
  $fileExtensionStored2 = array('png','jpg','jpeg');
  if(in_array($fileCheck2,$fileExtensionStored2)){
      $destinationFile2 = './media/hospitalPhoto/'.$fileName2;
      move_uploaded_file($filetmp2,$destinationFile2);
  }


  $photo3 = $_FILES['photo3'];

  $fileName3 = $photo3['name'];

  $fileError3 = $photo3['error'];

  $filetmp3 = $photo3['tmp_name'];

  $fileExtension3 = explode('.',$fileName3);

  $fileCheck3 = strtolower(end($fileExtension3));

  $fileExtensionStored3 = array('png','jpg','jpeg');
  if(in_array($fileCheck3,$fileExtensionStored3)){
      $destinationFile3 = './media/hospitalPhoto/'.$fileName3;
      move_uploaded_file($filetmp3,$destinationFile3);
  }


  $photo4 = $_FILES['photo4'];

  $fileName4 = $photo4['name'];

  $fileError4 = $photo4['error'];

  $filetmp4 = $photo4['tmp_name'];

  $fileExtension4 = explode('.',$fileName4);

  $fileCheck4 = strtolower(end($fileExtension4));

  $fileExtensionStored4 = array('png','jpg','jpeg');
  if(in_array($fileCheck4,$fileExtensionStored4)){
      $destinationFile4 = './media/hospitalPhoto/'.$fileName4;
      move_uploaded_file($filetmp4,$destinationFile4);
  }

  $profile_photo = $_FILES['profile_photo'];

  $fileName5 = $profile_photo['name'];

  $fileError5 = $profile_photo['error'];

  $filetmp5 = $profile_photo['tmp_name'];

  $fileExtension5 = explode('.',$fileName5);

  $fileCheck5 = strtolower(end($fileExtension5));

  $fileExtensionStored5 = array('png','jpg','jpeg');
  if(in_array($fileCheck5,$fileExtensionStored5)){
      $destinationFile5 = './media/doctorPhoto/'.$fileName5;
      move_uploaded_file($filetmp5,$destinationFile5);
  }

  $cover_photo = $_FILES['profile_photo'];

  $fileName6 = $cover_photo['name'];

  $fileError6 = $cover_photo['error'];

  $filetmp6 = $cover_photo['tmp_name'];

  $fileExtension6 = explode('.',$fileName6);

  $fileCheck6 = strtolower(end($fileExtension6));

  $fileExtensionStored6 = array('png','jpg','jpeg');
  if(in_array($fileCheck6,$fileExtensionStored6)){
      $destinationFile6 = './media/doctorPhoto/'.$fileName6;
      move_uploaded_file($filetmp6,$destinationFile6);
      
  }


  $updatePhoto ="UPDATE hospital SET photo1='$destinationFile1' ,photo2='$destinationFile2',photo3='$destinationFile3',photo4='$destinationFile4',profile_photo='$destinationFile5',cover_photo='$destinationFile6' WHERE hospital_user_name='$name'";
  $query = mysqli_query($connection,$updatePhoto);
  if($query){
    echo "succ";
  }

  header("location:./hospital.php?hospital_user_name=".$name);

}










if(isset($_POST['addDoctor'])){
    $doctor_name = $_POST['doctor_name'];
    $doctor_specialization = $_POST['doctor_specialization'];
    $doctor_qualifications = $_POST['doctor_qualifications'];
    
    $fromDate = $_POST['fromDate'];
    $toDate = $_POST['toDate'];

    
    $hospital_id = $_POST['hospital_id'];
    $hospital_user_name = $_POST['hospital_user_name'];

    $doctor_photo = $_FILES['doctor_photo'];

    $fileName1 = $doctor_photo['name'];

    $fileError1 = $doctor_photo['error'];

    $filetmp1 = $doctor_photo['tmp_name'];

    $fileExtension1 = explode('.',$fileName1);

    $fileCheck1 = strtolower(end($fileExtension1));


    $fileExtensionStored1 = array('png','jpg','jpeg');
    if(in_array($fileCheck1,$fileExtensionStored1)){
        $destinationFile1 = './media/doctorPhoto/'.$fileName1;
        move_uploaded_file($filetmp1,$destinationFile1);
    }
    
    $addDoctor = "INSERT INTO doctors(doctor_name,doctor_specialization,doctor_qualifications,fromDate,toDate,hospital_id,hospital_user_name,doctor_photo) VALUES ('$doctor_name','$doctor_specialization','$doctor_qualifications','$fromDate','$toDate','$hospital_id','$hospital_user_name','$destinationFile1')";
    $queryyy = mysqli_query($connection,$addDoctor);
    if($queryyy){
        header("location:./hospital.php?hospital_user_name=".$name);
    }
}

if(isset($_POST['editDoctor'])){
    $doctor_name = $_POST['doctor_name'];
    $doctor_specialization = $_POST['doctor_specialization'];
    $doctor_qualifications = $_POST['doctor_qualifications'];
    
    $fromDate = $_POST['fromDate'];
    $toDate = $_POST['toDate'];
    $hospital_user_name = $_POST['hospital_user_name'];
    
    $hospital_id = $_POST['hospital_id'];

    $doctor_photo = $_FILES['doctor_photo'];

    $fileName1 = $doctor_photo['name'];

    $fileError1 = $doctor_photo['error'];

    $filetmp1 = $doctor_photo['tmp_name'];

    $fileExtension1 = explode('.',$fileName1);

    $fileCheck1 = strtolower(end($fileExtension1));


    $fileExtensionStored1 = array('png','jpg','jpeg');
    if(in_array($fileCheck1,$fileExtensionStored1)){
        $destinationFile1 = './media/doctorPhoto/'.$fileName1;
        move_uploaded_file($filetmp1,$destinationFile1);
    }
    

   $updateDoctor="UPDATE doctors SET doctor_name='$doctor_name',doctor_specialization='$doctor_specialization',doctor_qualifications='$doctor_qualifications',fromDate='$fromDate',toDate='$toDate',doctor_photo='$destinationFile1' WHERE hospital_user_name='$hospital_user_name'";

    $queryyy = mysqli_query($connection,$updateDoctor);
    if($queryyy){
        header("location:../hospital.php?hospital_user_name=".$name);
    }
}

if(isset($_POST['addBloodG'])){
    $blood_group_name = $_POST['blood_group_name'];
    $blood_quantity = $_POST['blood_quantity'];
    $hospital_user_name = $_POST['hospital_user_name'];    
    $hospital_id = $_POST['hospital_id'];
    $states = $_POST['states'];
    $city = $_POST['city'];
    $area = $_POST['area'];


    $addBloodG = "INSERT INTO bloodAvailbility(blood_group_name,blood_quantity,hospital_user_name,hospital_id,states,city,area) 
    VALUES('$blood_group_name','$blood_quantity','$hospital_user_name','$hospital_id','$states','$city','$area')";
    $queryyy = mysqli_query($connection,$addBloodG);
    if($queryyy){
        header("location:./hospital.php?hospital_user_name=".$name);
    }
}


if(isset($_POST['editBloodG'])){
    $blood_group_name = $_POST['blood_group_name'];
    $blood_quantity = $_POST['blood_quantity'];
    $hospital_user_name = $_POST['hospital_user_name'];    
    $hospital_id = $_POST['hospital_id'];
    $states = $_POST['states'];
    $city = $_POST['city'];
    $area = $_POST['area'];

    $updateDoctor="UPDATE bloodAvailbility SET blood_quantity='$blood_quantity',states='$states',city='$city',area='$area' WHERE hospital_user_name='$hospital_user_name' AND blood_group_name='$blood_group_name' ";

    $queryyy = mysqli_query($connection,$updateDoctor);
    if($queryyy){
        header("location:../hospital.php?hospital_user_name=".$name);
    }
}



if(isset($_POST['addTreatments'])){
    $hospital_user_name = $_POST['hospital_user_name'];
    $addTreatmentsName = $_POST['addTreatmentsName'];

    $updateDoctor="UPDATE hospital SET treatment='$addTreatmentsName' WHERE hospital_user_name='$hospital_user_name'";

    $queryyy = mysqli_query($connection,$updateDoctor);
    if($queryyy){
        header("location:./hospital.php?hospital_user_name=".$name);
    }
}


?>
