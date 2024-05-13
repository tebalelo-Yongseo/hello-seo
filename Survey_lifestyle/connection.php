<?php


// Start the session
session_start();

   // Connect to MySQL
   $conn = mysqli_connect('localhost', 'root',
   'password', 'survey_database');

   if( mysqli_connect_errno()){
echo "failed to connect";
exit();
   }
   echo "connection successful";





?>