<?php
session_start();
if ($_SESSION['loggedin'] == false)
{
    header("Location: login.php");
    die();
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
    <title>Blog Editor: Leonhard Hochfilzer</title>
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
          <form class="logout" action="logout.php" method="post">
              <input type="submit" class="logout" value="Logout" name="Log Out">
          </form>
          <form action="action.php" method="post" class="form-container" enctype="multipart/form-data">
              <h1>Title</h1>
              <input type="text" name="titel" id="title">
              <h1>Description</h1>
              <textarea name="beschreibung" id="beschreibung"></textarea>
              <h1>Date</h1>
              <input type="date" name="doneDate" id="donedate"><br/>
              <input type="file" name="fileWithEntry[]" multiple><br/>
              <input type="submit" value="Upload" name="addEvent" id="addEvent">
              <hr/>
          </form>
          <h1>Upload Pictures without a Blog Entry</h1>
          <form action="upload.php" method="post" enctype="multipart/form-data">
              <h2>Photo Heading</h2>
              <input type="text" name="photoCat" id="photoCat"><br/>
              <input type="file" name="fileUpload[]" multiple><br/>
              <input type="submit" value="Upload">
              <hr/>
          </form>
          <h1>Do you want to Delete any Entries?</h1>
          <h2>Current Entries:</h2>
          <div id="currentEntriesContainer">
              <ul id="currentEntries"></ul>
          </div>
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
