<?php
include('../database/db.php');

$name = $_GET['hospital_user_name'];
$displayquery = "SELECT * FROM hospital WHERE hospital_user_name='$name'";
$querydisplay = mysqli_query($connection,$displayquery);
$result = mysqli_fetch_array($querydisplay);

$hospital_id =  $result['hospital_id'];

include('../addDoctor.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.11.1/css/all.css"
      integrity="sha384-IT8OQ5/IfeLGe8ZMxjj3QQNqT0zhBJSiFCL3uolrGgKRuenIU+mMS94kck/AHZWu"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/desktop/hospital.css" />
    <title><?php echo $result['hospital_name'];?></title>
  </head>
  <body>      
    <section id="container">
      <div class="coverPhoto">
        <img
          src="
          <?php if($result['cover_photo']){
            echo ".".$result["cover_photo"];
          }else{
            echo "../media/hospitalPhoto/hospital.jpg";
          }
          ?>
          "
          id="coverPhoto"
        />
      </div>
      <div class="profile">
        <div class="profilePhoto">
          <img src="
          <?php if($result['profile_photo']){
            echo ".".$result["profile_photo"];
          }else{
            
            echo '../media/hospitalPhoto/hospital.jpg';
            
          }
          ?>
          " id="profileImage" onmouseover='profileImages()' />
          
        </div>
      </div>
      <div class="category">
        <div class="information">
          <div class="bio">
            <p>
              <span><i class="fas fa-globe-americas"></i></span> Intro
            </p>
            <p style="margin-top: 1rem;"><?php echo $result['hospital_name'];?></p>
            <p id="desc">
            <?php echo $result['hospital_details'];?>
            </p>
            <p>Phone: <span><?php echo $result['hospital_phone_number'];?></span></p>
            <p>Ambulance Number: <span><?php echo $result['hospital_ambulance_number'];?></span></p>
          </div>
          <div class="Hospitalphotos">
              <p>Photos</p>
            <div class="listOfPhoto">
              <img src="
              <?php if($result['photo1']){
            echo ".".$result["photo1"];
          }else{
            echo "../media/hospitalPhoto/hospital.jpg";
          }
          ?>
              " alt="" />
              <img src="
              <?php if($result['photo2']){
            echo ".".$result["photo2"];
          }else{
            echo "../media/hospitalPhoto/hospital.jpg";
          }
          ?>
              " alt="" />
              <img src="
              <?php if($result['photo3']){
            echo ".".$result["photo3"];
          }else{
            echo "../media/hospitalPhoto/hospital.jpg";
          }
          ?>
              " alt="" />
              <img src="
              <?php if($result['photo4']){
            echo ".".$result["photo4"];
          }else{
            echo "../media/hospitalPhoto/hospital.jpg";
          }
          ?>
              " alt="" />
            </div>
          </div>
        </div>

        <div class="operations" style="display: flex; justify-content: center; align-items: center;">
          <div class="services">
            <div class="removeServices">
              <div class="heading">
                <p>Our Services</p>
              </div>
              <div class="items">

              <p style="font-size: 1rem;">Our Facility - <?php echo $result['treatment'];?></p>
              </div>
            </div>
          </div>
          <div class="bloods">
          <?php
                $q5 = "SELECT * FROM bloodAvailbility";
                $query5 = mysqli_query($connection,$q5);
                while($res5 = mysqli_fetch_array($query5))
                {
                ?>
            <div class="blood">
              <p><?php echo $res5['blood_group_name'];?></p>
              <p><?php echo $res5['blood_quantity'];?></p>
            </div>
                <?php
                }
            ?>  
          </div>
          <div class="doctors">
            <?php
                $q6 = "SELECT * FROM doctors WHERE hospital_user_name='$name'";
                $query6 = mysqli_query($connection,$q6);
                while($res6 = mysqli_fetch_array($query6))
                {
                ?>
              <div class="doctor">
              <div class="doctorInfo">
                <img src="
                <?php if($res6['doctor_photo']){
            echo ".".$res6['doctor_photo'];
          }else{
            echo '../media/hospitalPhoto/happydoctor.jpg';
          }
          ?>
                " alt="" />
                <p><?php echo $res6['doctor_name'];?></p>
                <p><?php echo $res6['doctor_specialization'];?></p>
                <p><?php echo $res6['fromDate'];?> To <? echo $res6['toDate'];?></p>
                <p><?php echo $res6['states'];?>,<?php echo $res6['city'];?>,<?php echo $res6['area'];?>-<?php echo $res6['pincode'];?></p>
                
              </div>
            </div>
                <?php
                }
            ?>  
            
          </div>
        </div>
      </div>
    </section>
    <script src="../js/main.js"></script>
  </body>
</html>
