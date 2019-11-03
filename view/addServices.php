<?php
include('../database/db.php');
include('../addItems.php');
$q1 = "SELECT * FROM bloodgroup";
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
    <link rel="stylesheet" href="../css/desktop/admin.css" />
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

      <div class="statics">
        <h1>Overview</h1>
        <div class="addServices">
        <div class="showBlood">
            <div class="blood">
            <?php
                $q1 = "SELECT * FROM bloodgroup";
                $query1 = mysqli_query($connection,$q1);
                while($res1 = mysqli_fetch_array($query1))
                {
                ?>
                <p id="bloodName"><?php echo $res1['blood_group_name'];?></p>
                <?php
                }
            ?>    

            </div>
        </div>
        <div class="addBlood">
            <form method="post">
                <p>Add Blood</p>
                <input type="text" name="blood_group_name" id="">
                <button type="submit" name="addBlood">Add Blood Group</button>
            </form>
        </div>
        </div>
      </div>
    </section>
  </body>
</html>
