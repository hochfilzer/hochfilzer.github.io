<?php
define("DB_HOST", "mysql5");
define("DB_NAME", "db_flock-1549_1");
define("DB_USER", "flock-1549");
define("DB_PW", "dNgm4kZtTSJs");

spl_autoload_register(function ($class){
   include 'classes/' . $class . '.class.php';
});
?>