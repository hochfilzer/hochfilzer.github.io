<?php
session_start();?>

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
    <title>Teaching: Leonhard Hochfilzer</title>
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
        <hr>
        <nav>
            <ul id="subjects">
              <li>
                <a href="Fach1.php">Analytic number Theory</a>
              </li>
              <li>·</li>
              <li>
                <a href="Fach2.php">Fach 2</a>
              </li>
              <li>·</li>
              <li>
                <a href="">Fach 3</a>
              </li>
              <li>·</li>
              <li>
                <a href="">Fach 4</a>
              </li>
            </ul>
          </nav>
        <hr />
      </header>

      <div id="mainContent">
        <h1>Analytic number theory</h1>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
          <h1>Documents</h1>
          <ul>
              <li class="documents">
                  <a href="Documents/AnalyticNumberTheory.pdf" target="_blank">Analytic Number Theory</a>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo do</p>
                  <hr class="docHR"/>
              </li>
              <li class="documents">
                  <a href="Documents/sheet1.pdf" target="_blank">Sheet 1</a>
                  <hr class="docHR"/>
              </li>
              <li class="documents">
                  <a href="Documents/sheet3-2.pdf" target="_blank">Sheet 3-2</a>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolo</p>
                  <hr class="docHR"/>
              </li>
              <li class="documents">
                  <a href="Documents/sheet4-4.pdf" target="_blank">Sheet 4-4</a>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore</p>
                  <hr class="docHR"/>
              </li>
          </ul>
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
      </footer>
    </div>
    <script src="myscript.js"></script>
  </body>
</html>