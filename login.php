<?php
session_start();
$_SESSION['loggedin'] = false;
if(!isset($_SESSION['darkmode'])){
    $_SESSION['darkmode'] = false;
}

?>



<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="style.css">
      <?php
      if($_SESSION["darkmode"]) {
          echo "<link rel='stylesheet' href='styledark.css'>";
      } else {
          echo "<link rel='stylesheet' href='stylelight.css'>";
      }
      ?>
      <link rel="apple-touch-icon" sizes="180x180" href="Favicons/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="Favicons/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="Favicons/favicon-16x16.png">
      <link rel="manifest" href="Favicons/site.webmanifest">
      <link rel="mask-icon" href="Favicons/safari-pinned-tab.svg" color="#5bbad5">
      <meta name="msapplication-TileColor" content="#da532c">
      <meta name="theme-color" content="#ffffff">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="myscript.js"></script>
    <title>Login: Leonhard Hochfilzer</title>
  </head>
  <body>
    <div id="container">
      <header>
        <h1><a href="index.php">Leonhard Hochfilzer</a></h1>
        <h2>Mathematician</h2>
        <nav>
          <ul id="begin">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="Research.php">Research</a>
            </li>
            <li>
              <a href="Teaching.php">Teaching</a>
            </li>
            <li>
              <a href="Blog.php">Blog</a>
            </li>
            <li>
              <a href="Photos.php">Photos</a>
            </li>
          </ul>
        </nav>
        <hr />
      </header>

      <div id="mainContent">
          <h1>Login</h1>
          <form action="authentification.php" method="post">

            Username: <input type="text" name="username"/><br/>

            Passwort: <input type="password" name="password" /><br />
            <input type="submit" value="Login" name="login">
           </form>
        <br />
      </div>

      <footer>
        © 2020 by Fabian Gaugusch.
        <div id="ThemeToggle">
          <img
              <?php
              if($_SESSION["darkmode"]) {
                  echo "src='Assets/Light.png'";
              } else {
                  echo "src='Assets/Dark.png'";
              }
              ?>
            alt="DarkIcon"
            id="ThemeIcon"
            onclick="changeMode()"
          />
      </footer>
    </div>
    <script src="myscript.js"></script>
  </body>
</html>
