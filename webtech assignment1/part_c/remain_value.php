<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php


$name = $email = $gender = $Degree = $bday = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $name = test_input($_POST["name"]);
    
    
  
    $email = test_input($_POST["email"]);
    
    
    $Blood = test_input($_POST["Blood"]);
    
    
    $bday = test_input($_POST["bday"]);
 
    $gender = test_input($_POST["gender"]);
    $Degree = test_input($_POST["Degree"]);
  }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}
?>

<h2>Lab Task</h2>

<form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>">  
 <tr>
    <td><h4>
        Name:
      </h4> 

    </td>
    
    <td>
      <input type="text" name="name" value="<?php echo $name;?>">
    </td>
  </tr>
  <br><br>

  <tr>
    <td>
      <h4>
        Email:
      </h4>
    </td>
<td>
  <input type="text" name="email" value="<?php echo $email;?>">
</td>
  </tr>
<br><br>
<tr>
  <td>
    Date of birth:
  </td>

  <td>
     <input type="date" name="bday" value="<?php echo $bday;?>">

  </td>




</tr>
<br><br>

<tr>
  <td>
    Gender:
  </td>

  <td>
    
    <input type="radio" name="gender"<?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
    <input type="radio" name="gender"<?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  </td>
</tr>
<br><br>
<tr>
  <td>
    Degree:
  </td>
  <td>
    <input type="checkbox" name="Degree" <?php if (isset($Degree) && $Degree=="Bsc") echo "checked";?> value="Bsc">Bsc
    <input type="checkbox" name="Degree" <?php if (isset($Degree) && $Degree=="msc") echo "checked";?> value="msc">msc
    <input type="checkbox" name="Degree" <?php if (isset($Degree) && $Degree=="phd") echo "checked";?> value="phd">phd
  </td>
</tr>
<br><br>
<tr>
  <td>
    Blood Group:
  </td>
  <td>
    
    <select name="Blood">
        <option <?php if (isset($Blood) && $Blood=="B+") echo "checked";?> value="B+">B+</option>
        <option <?php if (isset($Blood) && $Blood=="c+") echo "checked";?> value="c+">c+</option>
        <option <?php if (isset($Blood) && $Blood=="d+") echo "checked";?> value="d+">d+</option>
        <option <?php if (isset($Blood) && $Blood=="e+") echo "checked";?> value="e+">e+</option>
      </select>
  </td>
</tr>
<tr>
<td><input name="submit" type="submit" /></td></tr> 
</form>

<?php
 if (isset($_POST['submit'])) {
 $NAME = $_POST["name"];
 $EMAIL = $_POST["email"];
 $Blood = $_POST["Blood"];
$Degree = $_POST["Degree"];
$gender = $_POST["gender"];
$bday = $_POST["bday"];


 
 echo "Name is = ". $NAME .'</br>';
 echo "Email is = ". $EMAIL .'</br>';
 echo "Blood Group is = ". $Blood .'</br>';
 echo "degree Group is = ". $Degree .'</br>';
 echo "Gender Group is = ". $gender .'</br>';
 echo " birthday is = ". $bday .'</br>';

 
 }
 ?>



</body>
</html>