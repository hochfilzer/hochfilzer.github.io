<?php
session_start();
$_SESSION['loggedin'] = false;
if(!isset($_SESSION['darkmode'])){
    $_SESSION['darkmode'] = false;
}

?>


<!DOCTYPE html>
<html lang="en">
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
    <title>Leonhard Hochfilzer</title>
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
        <h1>About Me</h1>

        <p id="aboutMeText">
          I am a 4th year mathematics student at the University of Oxford,
          expecting to graduate with an MMath in July 2020. After this I am
          planning to start a PhD at the University of Göttingen under
          supervision of
          <a
            href="https://sites.google.com/site/damarishomepage/home?authuser=0"
            target="_blank"
            >Damaris Schindler </a
          >.
        </p>
        <br />
        <p>
          My main interests lie in (analytic) number theory, </br> however I find it
          particularly fascinating when different areas of mathematics interact.
          Mainly influenced by my available course choices at Oxford I have
          found myself to also really enjoy algebraic geometry. Therefore I am
          looking forward to counting some rational points on varieties in
          Göttingen soon.
        </p>
          <br/>
          <h1>Contact</h1>
          <p>Email: <a href="mailto:leonhard.hochfilzer@sjc.ox.ac.uk">leonhard.hochfilzer@sjc.ox.ac.uk</a></p>
        <img src="Assets/Portrait.jpeg" alt="Portrait" id="Portrait" />
        <hr />
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
        </div>
      </footer>
    </div>
    <script src="myscript.js"></script>
  </body>
</html>
