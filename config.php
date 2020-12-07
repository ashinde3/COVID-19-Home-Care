<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'covid');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   if (!$db) {
     die('Could not connect: ' . mysqli_error($db));
   }

   $db_selected = mysqli_select_db($db, DB_NAME);

   if (!$db_selected) {
     die('Cannot access' . DB_NAME . ': ' . mysqli_error($db));
   }

   mysqli_close($db);
?>
