<?php 
include('../database/db.php');
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
    <link rel="stylesheet" href="../css/desktop/checkHospital.css" />
    <title>Admin</title>
  </head>
  <body>
    <main id="menu">
    <div class="logo">
        <img src="../media/logo@2x.png" alt="" />
        <p>Admin</p>
      </div>
      <div class="pagesLink">
        <a href="../view/admin.php"
          ><p>
            <span><i class="fas fa-tachometer-alt"></i></span> Dashboard
          </p></a
        >
        <a href="../view/checkHospital.php"
          ><p>
            <span><i class="far fa-hospital"></i></span> Hospitals
          </p></a
        >
        <a href="../view/addItems.php"
          ><p>
            <span><i class="fas fa-users"></i></span> Add Location
          </p></a
        >
        <a href="../view/addServices.php"
          ><p>
            <span><i class="fas fa-users"></i></span> Add Blood
          </p></a
        >
      </div>
    </main>
    <section id="container">
      <header id="navBar">
        <div class="login">
          <img src="../media/user.png" alt="" />
          <p>Admin</p>
          <i class="fas fa-sort-down"></i>
        </div>
      </header>

      <div class="container">
          <div class="category">
              <p>Chech By Category</p>
            <form>
                <div class="options">
                    <select name="state" id="">
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
                    <button type="submit" name="searchHospital" id="search">Search</button>
                </div>
            </form>
          </div>
          <div class="data">
                <table class="tabel1">
                        <thead class="head">
                          <td>Sno</td>
                          <td>Hospital Name</td>
                          <td>Email</td>
                          <td >Phone Number</td>
                          
                        </thead>
                        <tbody class="body">
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
                          <tr>
                            <td>1</td>
                            <td id="name"><?php echo $res12['hospital_name'];?></td>
                            <td id="email"><?php echo $res12['email'];?></td>
                            <td id="phone"><?php echo $res12['hospital_phone_number'];?></td>
                            <td id="edit">
                                <a href="./view/hospitalPublicProfile.php?hospital_user_name=<?php echo $res12['hospital_user_name'];?>"><span><i class="fas fa-link">Check Hospital Profile</i></span></a>
                            </td>
                          </tr>
<?php
  } 
}else{
  $q12 = "SELECT * FROM hospital ";
  $query12 = mysqli_query($connection,$q12);
  while($res12 = mysqli_fetch_array($query12))
  {
  ?>
                          <tr>
                            <td>1</td>
                            <td id="name"><?php echo $res12['hospital_name'];?></td>
                            <td id="email"><?php echo $res12['email'];?></td>
                            <td id="phone"><?php echo $res12['hospital_phone_number'];?></td>
                            <td id="edit">
                                <a href="../view/hospitalPublicProfile.php?hospital_user_name=<?php echo $res12['hospital_user_name'];?>"><span><i class="fas fa-link"></i>Check Hospital Profile</span></a>
                                
                            </td>
                          </tr>
<?php
  } 
}
?>
                        </tbody>
                      </table>
          </div>
      </div>



      </div>
    </section>
  </body>
</html>
