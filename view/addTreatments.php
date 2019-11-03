<?php
include('../database/db.php');
include('../addItems.php');

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
        <a href=""
          ><p>
            <span><i class="fas fa-tachometer-alt"></i></span> Dashboard
          </p></a
        >
        <a href=""
          ><p>
            <span><i class="far fa-hospital"></i></span> Hospitals
          </p></a
        >
        <a href=""
          ><p>
            <span><i class="fas fa-users"></i></span> Users
          </p></a
        >
        <a href=""
          ><p>
            <span><i class="fas fa-search-location"></i></span> Add Location
          </p></a
        >
      </div>
    </main>
    <section id="container">
      <header id="navBar">
        <div class="searchBar">
          <form action="">
            <input
              type="search"
              name=""
              id=""
              placeholder="Search Data and Reports"
            />
            <button type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
        <div class="alert">
          <div>
            <i class="fas fa-envelope"></i>
            <p id="number">2</p>
          </div>
          <div>
            <i class="fas fa-bell"></i>
            <p id="number">3</p>
          </div>
        </div>
        <div class="login">
          <img src="../media/user.png" alt="" />
          <p>Shubham Singh</p>
          <i class="fas fa-sort-down"></i>
        </div>
      </header>

      <div class="statics">
        <h1>Overview</h1>
        <div class="treatments">
        <div class="showBlood">
            
            <?php
                $q1 = "SELECT * FROM treatments";
                $query1 = mysqli_query($connection,$q1);
                while($res1 = mysqli_fetch_array($query1))
                {
                ?>
                <div class="blood">
                <p id="bloodName"><?php echo $res1['addTreatmentsName'];?></p>
                </div>
                <?php
                }
            ?>    
            
        </div>
        <div class="addTreatments">
            <form method="POST">
                <input type="text" name="addTreatmentsName" placeholder="Treatments Name" require>
                <button type="submit" name="addTreatmentsNames">Add Treatments</button>
            </form>
        </div>
        </div>
      </div>
    </section>
  </body>
</html>
