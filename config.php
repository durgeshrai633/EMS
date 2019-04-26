<?php
 define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root1');
   define('DB_PASSWORD', 'raman');
   define('DB_DATABASE', 'project1');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if($db)
{
    echo 'Connected';
}
