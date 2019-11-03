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
        <div class="addLocation">
        <div class="addState">
            <h5>Add State</h5>
        <form method="post">
        <label for="states_name">State</label>
        <input type="text" name="states_name" placeholder="State" require>
        <button type="submit" name="state">Add State</button>
        </form>
        </div>
        <hr>
        <div class="addCity" style="margin-top: 1rem">
            <h5>Add City</h5>
        <form method="post">
        <label for="citys_name">Add City</label>
        <input type="text" name="citys_name" placeholder="State" require>
        <button type="submit" name="citys">Add City</button>
        </form>
        </div>
        <hr>
        <div class="addArea" style="margin-top: 1rem">
            <h5>Add Areas</h5>
        <form method="post">
        <label for="areas_name">Add Area</label>
        <input type="text" name="areas_name" placeholder="Area" require>
        <label for="pincode">Add Pin-Code</label>
        <input type="text" name="pincode" placeholder="Pin-Code" require>
        <button type="submit" name="areas">Add City</button>
        </form>
        </div>

        <hr>
      </div>
    </section>
  </body>
</html>
