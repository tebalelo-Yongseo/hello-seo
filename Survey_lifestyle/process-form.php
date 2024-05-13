<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$age_group = $_POST['age_group'];
$lifestyle = $_POST['lifestyle'];
$feedback = $_POST['feedback'];
   
var_dump($name, $email, $phone, $address, $age_group, $lifestyle, $feedback);

$conn = mysqli_connect('localhost', 'username',
                      'password', 'database_name');

                      if( mysqli_connect_errno()){
                        echo "failed to connect";
                        exit();
                           }
                           echo "connection successful" ;

?>