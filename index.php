<?php 
include('./database/db.php');
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
    <link rel="stylesheet" href="./css/desktop/style.css" />
    <title>Hospital Finder</title>
  </head>
  <body>
    <section id="upperArea">
      <section id="head">
        <div class="container">
          <div class="logo">
            <img src="./media/google.png" alt="Hospital Finder" />
          </div>
          <div class="login" >
          <a href="./view/login.php">
          <button id="account">
              Login or Create Account
              <span><i class="fas fa-arrow-down"></i></span>
            </button>
          </a>
          </div>
        </div>
      </section>
      <section id="menu">
        <div class="searchCategory">
        <a href="./index.php">
        <div class="item">
            <i class="far fa-hospital" style="color:#000;"></i>
            <p style="color:#000;">Hospital</p>
            <div id="line" style="background-color:#000;"></div>
          </div>
        </a>
        <a href="./showBlood.php">
        <div class="item">
            <i class="fas fa-tint"></i>
            <p>Blood</p>
            <div id="line"></div>
          </div>
        </a>
        <a href="./showDoctors.php">
        <div class="item">
            <i class="fas fa-user-md"></i>
            <p>Doctor</p>
            <div id="line"></div>
          </div>
        </a>
        </div>
      </section>
      <main id="operation">
        <div class="operation">
          <div class="heading">
            <p>Search Hospital According To Location...</p>
          </div>
          <div class="searchForm">
            <form method="POST">
              <div class="options">
                <select name="states_name" id="">
                <?php
                $q2 = "SELECT * FROM states";
                $query2 = mysqli_query($connection,$q2);
                while($res2 = mysqli_fetch_array($query2))
                {
                ?>
                <option value="<?php echo $res2['states_name'];?>"><?php echo $res2['states_name'];?></option>
                <?php
                }
                ?>   
                </select>
                <select name="citys_name" id="">
                <?php
                $q2 = "SELECT * FROM citys";
                $query3 = mysqli_query($connection,$q2);
                while($res3 = mysqli_fetch_array($query3))
                {
                ?>
                <option value="<?php echo $res3['citys_name'];?>"><?php echo $res3['citys_name'];?></option>
                <?php
                }
                ?>   
                </select>
                <select name="areas_name" id="">
                <?php
                $q2 = "SELECT * FROM area";
                $query4 = mysqli_query($connection,$q2);
                while($res4 = mysqli_fetch_array($query4))
                {
                ?>
                <option value="<?php echo $res4['areas_name'];?>"><?php echo $res4['areas_name'];?></option>
                <?php
                }
                ?>   
                </select>
                <select name="Problem" id="">
                <?php
                $q2 = "SELECT * FROM treatments";
                $query5 = mysqli_query($connection,$q2);
                while($res5 = mysqli_fetch_array($query5))
                {
                ?>
                <option value="<?php echo $res5['addTreatmentsName'];?>"><?php echo $res5['addTreatmentsName'];?></option>
                <?php
                }
                ?>   
                </select>
              </div>
              <div class="searchButton">
                <button type="submit" name="searchHospital" id="search">Search</button>
              </div>
            </form>
          </div>
        </div>
      </main>
    </section> 
    <section id="body">
      <div class="results">
      <?php
if(isset($_POST['searchHospital'])){
  $states_name = $_POST['states_name'];
  $citys_name = $_POST['citys_name'];
  $areas_name = $_POST['areas_name'];
  $Problem = $_POST['Problem'];
  $q12 = "SELECT * FROM hospital WHERE states='$states_name' AND city='$citys_name' AND area='$areas_name' AND treatment='$Problem'";
  $query12 = mysqli_query($connection,$q12);
  while($res12 = mysqli_fetch_array($query12))
  {
  ?>
<div class="resultItem">
      <div class="photo">
        <img
        src="<?php if($res12['profile_photo']){
            echo $res12['profile_photo'];
          }else{
            
            echo'./media/hospitalPhoto/hospital.jpg';
            
          }
          ?>"
          alt="Hospital Photo"
        />
      </div>
      <div class="details">
        <div class="info">
          <p>Name: <span><?php echo $res12['hospital_name'];?></span></p>
          <p>
            Location:
            <span><?php echo $res12['states'];?>-<?php echo $res12['city'];?>-<?php echo $res12['area'];?></span>
          </p>
          <p>Phone: <span><?php echo $res12['hospital_phone_number'];?></span></p>
          <p>Call Ambulance: <span><?php echo $res12['hospital_ambulance_number'];?></span></p>
        </div>
        <div class="contact">
          <button id="ambulance" href="tel:<?php echo $res12['hospital_phone_number'];?>">CALL Ambulance</button>
          <a href="./view/hospitalPublicProfile.php?hospital_user_name=<?php echo $res12['hospital_user_name'];?>"><button id="profile">See Hospittal Profile</button></a>
        </div>
      </div>
    </div>
    </div>
  <?php
  } 
}
?>
      </div>
    </section>

    <footer>
      <div class="socialLink">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-twitter"></i>
      </div>
      <div class="copyRights">
        © 2019 HOSPITAL FINDER PVT. LTD.<br />Country India
      </div>
    </footer>
  </body>
</html>
