<?php
 $conn=mysqli_connect("localhost","root","","hospital_management");
 if(!$conn)
 {
  echo "database not connected successfully";
 }

     
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    $Pfname=$_POST["Pfname"];
    $Plname=$_POST["Plname"];
    $Patient_id=$_POST["Patient_id"];
    $Gender=$_POST["Gender"];
    $fname=$_POST["fname"];
    $sid=$_POST["sid"];
    $Diagnosis=$_POST["Diagnosis"];
    $Disease=$_POST["Disease"];
    $sql="INSERT INTO `patient_report` (`Pfname`, `Plname`, `Patient_id`, `Gender`, `Doctor_name`, `Doctor_id`, `Diagnosis`, `Disease`) VALUES ('$Pfname', '$Plname', '$Patient_id', '$Gender', '$fname', '$sid', '$Diagnosis', '$Disease')";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "The record was not inserted!".mysql_error($conn);
    }
  }
  
          
?>
<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.round {
  border-radius: 50%;
}
</style>
<title>Patient Report</title>
<style>
div{
text-align:center;
padding: 40px 40px 40px 40px;
}
body{
background-image:url("staff.jpg");
background-size:1400px 800px;
font-size:150%;
background-repeat: no-repeat;
 background-attachment: fixed;  
  background-size: cover;
}
h1
{
font-size: 38px;
}
</style>
</head>
<html>
<body>
<a href="staff.php" class="previous">&laquo; Previous</a>
<div>
<h1> PATIENT REPORT</h1><br>
<form  action="patientreport.php" method="post">
<b>
  <label for="Pfname">Patient First name: </label> 
  <input type="text" id="Pfname" name="Pfname"><br><br>

  <label for="Plname">Patient Last name: </label>
  <input type="text" id="Plname" name="Plname"><br><br>

 <label for="Patient_id">Patient Id : </label>
  <input type="text" id="Patient_id" name="Patient_id"><br><br>

Gender: M<input type="radio" id="Gender" name="Gender" value="Male">
        F<input type="radio" id="Gender" name="Gender" value="Female">
        O<input type="radio" id="Gender" name="Gender" value="Others">
<br><br>
<label for="fname">Doctor First name:</label>
  <input type="text" id="fname" name="fname"><br><br><br>
 <label for="sid">Doctor id:</label>
  <input type="text" id="sid" name="sid"><br><br><br>
  <label for="Diagnosis">Diagnosis:</label>
  <textarea id="Diagnosis" name="Diagnosis" rows="4" cols="50"></textarea><br><br><br>
 <label for="Disease">Disease:</label>
  <input type="text" id="Disease" name="Disease"><br><br><br>

<input type="submit" value="Submit">
<input type="reset" value="Reset">
</b>
</form>
</div>
</body>
</html>