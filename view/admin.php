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
            <span><i class="fas fa-tachometer-alt"></i></span> Dashboard
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
          <p>Shubham Singh</p>
          <i class="fas fa-sort-down"></i>
        </div>
      </header>

      <div class="statics">
        <h1 style="display: flex; justify-content: center; align-items: center;">Welcome To Hospital Finder</h1>
        </div>
    </section>
  </body>
</html>
