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
    <title>Research: Leonhard Hochfilzer</title>
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
        <h1>My Interests:</h1>
        <p>
          Currently, I am writing up my fourth year dissertation, which is about applications of random matrix theory to number theory, in particular number theory over function fields. There I prove a result on the variance of the von Mangoldt function attached to a Galois representation of a function field in short intervals - this will appear soon below.  Most recently I have worked together with <a href="https://www.tdoliver.com" target="_blank">Thomas Oliver</a> during the summer of 2019 and we produced the pre-print below. When I was still young and foolish I worked on some epidemiology with Robin Thompson (perhaps not foolish, given the current situation).
        </p>
        <h1>Recent Publications:</h1>
        <ul>
          <li>
            <a href="https://arxiv.org/abs/1910.02821" target="_blank"
              >Ratios of Artin L-functions</a>
              <p>
                  We show that certain quotients of Artin L-functions have infinitely many poles. Our result follows from a converse theorem for Maass forms of Laplace eigenvalue 1/4 in which the twisted L-functions are not assumed to be entire. We do not need the automorphy of Artin L-functions, only their meromorphic continuation.
              </p>
          </li>
          <li>
            <a
              href="https://www.sciencedirect.com/science/article/pii/S1755436519300210" target="_blank"
              >Accurate forecasts of the effectiveness of interventions against
              Ebola may require models that account for variations in symptoms
              during infection</a
            >
            <p>
                The title really says it all. This paper used work that I have done during the summer of 2018 under supervision of <a href="https://www.robin-thompson.co.uk" target="_blank">Robin Thompson</a>.
            </p>
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
