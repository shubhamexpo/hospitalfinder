<?php
include('./database/db.php');
session_start();


$userEmail = $_SESSION["hospital_user_name"];
if($userEmail == false)
{
    header('location:./view/login.php');
}

$name = $_GET['hospital_user_name'];
$displayquery = "SELECT * FROM hospital WHERE hospital_user_name='$name'";
$querydisplay = mysqli_query($connection,$displayquery);
$result = mysqli_fetch_array($querydisplay);

$hospital_id =  $result['hospital_id'];




include('./addDoctor.php');

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
    <link rel="stylesheet" href="./css/desktop/hospital.css" />
    <title><?php echo $result['hospital_name'];?></title>
  </head>
  <body>
      <div class="editProfile dataEntry">
        <p class="closeEditProfile">X</p>
        <p class="h1">Edit Profile Details</p>
          <form method="POST">
            <label for="hospital_name">Hospital Name</label>
            <input type="text" name="hospital_name" placeholder="Hospital Name" value="<?php echo $result['hospital_name'];?>">
            <label for="hospital_details">Hospital Details</label>
            <textarea name="hospital_details" id="hospital_details" placeholder="Hospital Details" value="<?php echo $result['hospital_details'];?>"><?php echo $result['hospital_details'];?></textarea>
            <label for="hospital_phone_number">Contact Number</label>
            <input type="number" name="hospital_phone_number" placeholder="Contact Number" value="<?php echo $result['hospital_phone_number'];?>">
            <label for="hospital_ambulance_number">Ambulance Number</label>
            <input type="number" name="hospital_ambulance_number" placeholder="Ambulance Number" value="<?php echo $result['hospital_ambulance_number'];?>">
            <label>Location</label>
          <select name="states">
          <?php
                $q1 = "SELECT * FROM states";
                $query1 = mysqli_query($connection,$q1);
                while($res1 = mysqli_fetch_array($query1))
                {
                ?>
                <option value="<?php echo $res1['states_name'];?>"><?php echo $res1['states_name'];?></option>
                <?php
                }
            ?>   
          </select>
          <select name="city" id="">
          <?php
                $q2 = "SELECT * FROM citys";
                $query2 = mysqli_query($connection,$q2);
                while($res2 = mysqli_fetch_array($query2))
                {
                ?>
                <option value="<?php echo $res2['citys_name'];?>"><?php echo $res2['citys_name'];?></option>
                <?php
                }
            ?>   
          </select>
          <select name="area" id="">
          <?php
                $q3 = "SELECT * FROM area";
                $query3 = mysqli_query($connection,$q3);
                while($res3 = mysqli_fetch_array($query3))
                {
                ?>
                <option value="<?php echo $res3['areas_name'];?>"><?php echo $res3['areas_name'];?></option>
                <?php
                }
            ?>   
          </select>
          <select name="pincode">
          <?php
                $query4 = mysqli_query($connection,$q3);
                while($res4 = mysqli_fetch_array($query4))
                {
                ?>
                <option value="<?php echo $res4['pincode'];?>"><?php echo $res4['pincode'];?></option>
                <?php
                }
            ?>   
          </select>
            <button type="submit" name="editDetails">Update</button>
          </form>
      </div>
      <div class="addDoctorInfo dataEntry">
        <p class="closeAddDoctorInfo">X</p>
        <p class="h1">Add Doctor</p>
        <form method="POST" enctype="multipart/form-data">
          <label for="doctor_name">Doctor Name</label>
          <input type="text" name="doctor_name" placeholder="Doctor Name">
          <label for="doctor_photo">Doctor Photo</label>
          <input type="file" name="doctor_photo" placeholder="Doctor Photo">
          <label for="doctor_specialization">Specilization</label>
          <input type="text" placeholder="Specialization" name="doctor_specialization">
          <label for="doctor_qualifications">Qualification</label>
          <input type="text" name="doctor_qualifications" placeholder="Qualifications">
          <label for="fromDate">From Date</label>
          <input type="text" name="fromDate" placeholder="From Date">
          <label for="toDate">To Date</label>
          <input type="text" name="toDate" placeholder="To Date">
          <input type="text" name="hospital_id" value="<?php echo $result['hospital_id'];?>" hidden>
          <input type="text" name="hospital_user_name" value="<?php echo $result['hospital_user_name'];?>" hidden>
          <button type="submit" name="addDoctor">Add Doctor</button>
        </form>
      </div>
      <div class="editHospitalPhoto dataEntry">
          <p class="closeEditHospitalPhoto">X</p>
          <p class="h1">Edit Hospital Photos</p>
          <form method="POST" enctype="multipart/form-data">
          <label for="photo1">Photo 1</label>
            <input type="file" name="photo1" value="" require>
            <label for="photo2">Photo 2</label>
            <input type="file" name="photo2" value="" require>
            <label for="photo3">Photo 3</label>
            <input type="file" name="photo3" id="" value="" require>
            <label for="phot4">Photo 4</label>
            <input type="file" name="photo4" id="" value="" require>
            <label for="profile_photo">Profile Photo</label>
            <input type="file" name="profile_photo" id="profile_photo" value="" require>
            <label for="cover_photo">Cover Photo</label>
            <input type="file" name="cover_photo" id="" value="" require>
            <button type="editPhoto" name="editPhoto">Edit Doctor</button>
          </form>
      </div>
      <div class="addBloodG dataEntry">
          <p class="closeAddBloodG">X</p>
          
          <form method="POST">
          <label for="blood_group_name">Select Blood Group</label>
          <select name="blood_group_name" id="">
          <?php
                $q8 = "SELECT * FROM bloodgroup";
                $query8 = mysqli_query($connection,$q8);
                while($res8 = mysqli_fetch_array($query8))
                {
                ?>
                <option value="<?php echo $res8['blood_group_name'];?>"><?php echo $res8['blood_group_name'];?></option>
                <?php
                }
            ?>  
            </select>
            <label for="blood_quantity">Blood Quantity</label>
            <input type="text" name="blood_quantity" require>
            <input type="text" name="hospital_user_name" value="<?php echo $result['hospital_user_name'];?>" hidden require>
            <input type="text" name="hospital_id" value="<?php echo $result['hospital_id'];?>" hidden require>
            <input type="text" name="states" value="<?php echo $result['states'];?>" hidden require>
            <input type="text" name="city" value="<?php echo $result['city'];?>" hidden require>
            <input type="text" name="area" value="<?php echo $result['area'];?>" hidden require>
            <button type="submit" name="addBloodG">Add Blood Quantity</button>
          </form>
      </div>
      <div class="addProfilePhoto dataEntry">
          <p class="closeAddProfilePhoto">X</p>
          <p class="h1">Add Profile Photo</p>
          <form>
            <label for="profile_photo">Add Profile Photo</label>
            <input type="file" name="profile_photo">
            <button type="submit">Add Profile Photo</button>
          </form>
      </div>
      <div class="editProfilePhoto dataEntry">
          <p class="closeEditProfilePhoto">X</p>
          <p class="h1">Edit Profile Photo</p>
          <form>
            <label for="profile_photo">Edit Profile Photo</label>
            <input type="file" name="profile_photo">
            <button type="submit">Edit Profile Photo</button>
          </form>
      </div>
      <div class="editCoverPhoto dataEntry">
          <p class="closeEditCoverPhoto">X</p>
          <p class="h1">Edit Cover Photo</p>
          <form>
            <label for="cover_photo">Cover Photo</label>
            <input type="file" name="cover_photo">
            <button type="submit">Edit Cover Photo</button>
          </form>
      </div>
      <div class="addCoverPhoto dataEntry">
          <p class="closeAddCoverPhoto">X</p>
          <p class="h1">Add Cover Photo</p>
          <form>
            <label for="cover_photo">Add Photo</label>
            <input type="file" name="cover_photo">
            <button type="submit">Add Cover Photo</button>
          </form>
      </div>

      
    <section id="container">
      <div class="coverPhoto">
        <img
          src="<?php if($result['cover_photo']){
            echo $result["cover_photo"];
          }else{
            echo "./media/hospitalPhoto/hospital.jpg";
          }
          ?>"
          id="coverPhoto"
        />
      </div>
      <div class="profile">
        <div class="profilePhoto">
          <img 
          src="<?php if($result['profile_photo']){
            echo $result["profile_photo"];
          }else{
            
            echo './media/hospitalPhoto/hospitalCover.jpg';
            
          }
          ?>"
           id="profileImage" onmouseover='profileImages()' />
          <a href="#profilePhoto"><div id="editProfilePhoto" onmouseout="removeProfileImages()">Edit</div></div></a>
        </div>
        <div class="logout notification"style="cursor:pointer;" onclick="document.location='./logout.php'"><button><a href="./logout.php">Logout</a></button></div>
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
            <p>
              Address:
              <span><?php echo $result['hospital_address'];?></span>
            </p>
            <button id="editProfile">Edit Info</button>
          </div>
          <div class="Hospitalphotos">
              <p>Photos</p>
            <div class="listOfPhoto">
              <img
          src="<?php if($result['photo1']){
            echo $result["photo1"];
          }else{
            echo "./media/hospitalPhoto/hospital.jpg";
          }
          ?>"
               alt="" />
              <img 
              src="<?php if($result['photo2']){
            echo $result["photo2"];
          }else{
            echo "./media/hospitalPhoto/hospital.jpg";
          }
          ?>"
               alt="" />
              <img 
              src="<?php if($result['photo3']){
            echo $result["photo3"];
          }else{
            echo "./media/hospitalPhoto/hospital.jpg";
          }
          ?>"
               alt="" />
              <img 
              src="<?php if($result['photo4']){
            echo $result["photo4"];
          }else{
            echo "./media/hospitalPhoto/hospital.jpg";
          }
          ?>"
               alt="" />
            </div>
          </div>
          <div class="heading">
              <p id="editPhotos" style="cursor: pointer;">Edit Photos</p>
          </div>
        </div>

        <div class="operations">
          <div class="services">
            <div class="addServices">
              <div class="heading">
                <p>Services</p>
                <p>Add Treatments</p>
              </div>
              <div class="items">
                <div class="item">
                  <form method="POST">
                    <input type="text" name="hospital_user_name" value="<?php echo $name;?>" hidden require>

                    <select name="addTreatmentsName">
                    <?php
                $q10 = "SELECT * FROM treatments";
                $query10 = mysqli_query($connection,$q10);
                while($res10 = mysqli_fetch_array($query10))
                {
                ?>
                      <option value="<?php echo $res10['addTreatmentsName'];?>"><?php echo $res10['addTreatmentsName'];?></option>
                      <?php
                }
            ?>  
                    </select>
                    <button type="submit" name="addTreatments">Add Treatment</button>
                  </form>
                </div>
  
              </div>
            </div>
            <div class="removeServices">
              <div class="heading">
                <p>Add Services</p>
              </div>
              <div class="items">
              <?php
                $q11 = "SELECT * FROM hospital WHERE  hospital_user_name='$name'";
                $query11 = mysqli_query($connection,$q11);
                $res11 = mysqli_fetch_array($query11);
            ?>  
              <p style="font-size: 1rem;">Our Facility - <?php echo $res11['treatment'];?></p>
              </div>
            </div>
          </div>
          <div class="bloods">
          <?php
                $q5 = "SELECT * FROM bloodAvailbility WHERE hospital_user_name='$name'";
                $query5 = mysqli_query($connection,$q5);
                while($res5 = mysqli_fetch_array($query5))
                {
                ?>
            <div class="blood">
              <p><?php echo $res5['blood_group_name'];?></p>
              <p><?php echo $res5['blood_quantity'];?></p>
              <a href="./view/editBlood.php?hospital_user_name=<?php echo $name?>&blood_quantity=<?php echo $res5['blood_quantity'];?>"><button name="editBloodG" id="editBloodG">Edit</button></a>
            </div>
                <?php
                }
            ?>  
               <div class="blood"  id="AddBloodGroup" style="cursor: pointer;">
              <p>Add Blood</p>
              </div>
          </div>
          <div class="doctors">
            <div class="addDoctor">
              <p>+</p>
            </div>
            <?php
                $q6 = "SELECT * FROM doctors WHERE hospital_user_name='$name'";
                $query6 = mysqli_query($connection,$q6);
                while($res6 = mysqli_fetch_array($query6))
                {
                ?>
              <div class="doctor">
              <div class="doctorInfo">
                <img 
                src="<?php if($res6['doctor_photo']){
            echo $res6['doctor_photo'];
          }else{
            echo './media/hospitalPhoto/happydoctor.jpg';
          }
          ?>"
                 alt="" />
                <p><?php echo $res6['doctor_name'];?></p>
                <p><?php echo $res6['doctor_specialization'];?></p>
                <p><?php echo $res6['fromDate'];?> To <? echo $res6['toDate'];?></p>
                <p><?php echo $res6['states'];?>,<?php echo $res6['city'];?>,<?php echo $res6['area'];?>-<?php echo $res6['pincode'];?></p>
              </div>
              <div class="edit">
                <a href="./view/editDoctor.php?hospital_user_name=<?php echo $name?>"><button id="editDoctor">Edit</button></a>
              </div>
            </div>
                <?php
                }
            ?>  
            
          </div>
        </div>
      </div>
    </section>
    <script src="./js/main.js"></script>
  </body>
</html>
