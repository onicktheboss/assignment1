<!doctype html>
<html>
<head>


</head>

<body>

<table>
<form action="" method="post">
<tr>
    <td><h4>
        Name:
      </h4> 

    </td>
    <br>
    <td>
      <input type="text" name="name" value="<?php echo $name;?>">
    </td>
  </tr>
  <br>

  <tr>
    <td>
      <h4>
        Email:
      </h4>
    </td>
<br>
<td>
  <input type="text" name="email">
</td>
  </tr>
<br>
<tr>
  <td>
    Date of birth:
  </td>

  <td>
     <input type="date" name="bday">

  </td>




</tr>
<br>

<tr>
  <td>
    Gender:
  </td>

  <td>
    
    <input type="radio" name="Gender" value="Male">Male
    <input type="radio" name="Gender" value="female">female
  </td>
</tr>
<br>
<tr>
  <td>
    Degree:
  </td>
  <td>
    <input type="checkbox" name="Degree" value="Bsc">Bsc
    <input type="checkbox" name="Degree" value="msc">msc
    <input type="checkbox" name="Degree" value="phd">phd
  </td>
</tr>
<tr>
  <td>
    Blood Group:
  </td>
  <td>
    
    <select name="Blood">
        <option value="b+">b+</option>
        <option value="A+">A+</option>
        <option value="o+">o+</option>
        <option value="ab+">ab+</option>
      </select>
  </td>
</tr>
<tr>
<td><input name="submit" type="submit" /></td></tr>

</form>
</table>

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



</body>
</html>