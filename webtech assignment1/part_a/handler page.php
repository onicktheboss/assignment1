<?php
 if (isset($_POST['submit'])) {
 $NAME = $_POST["name"];
 $EMAIL = $_POST["email"];
 $Blood = $_POST["Blood"];
$Degree = $_POST["Degree"];
$Gender = $_POST["Gender"];
$bday = $_POST["bday"];


 
 echo "Name is = ". $NAME .'</br>';
 echo "Email is = ". $EMAIL .'</br>';
 echo "Blood Group is = ". $Blood .'</br>';
 echo "degree Group is = ". $Degree .'</br>';
 echo "Gender Group is = ". $Gender .'</br>';
 echo " birthday is = ". $bday .'</br>';

 
 }
 ?>