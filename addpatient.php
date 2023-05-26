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
    $Admission_date=$_POST["Admission_date"];
    $Admission_id=$_POST["Admission_id"];
    $sql="INSERT INTO `patient` (`Pfname`, `Plname`, `Patient_id`, `Gender`, `Admission_date`, `Admission_id`) VALUES ('$Pfname', '$Plname', '$Patient_id', '$Gender', '$Admission_date', '$Admission_id');";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
    $insert=true;
    }else{
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


<title>Patient details</title>
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<style>
div{
text-align:center;
padding:20px 20px 20px 20px;
margin:20px 350px 400px 350px;
font-size: 28px;
background-color:#add8e6;
box-sizing: border-box;
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
border: 10px ridge darkblue;
}
body{
background-image:url("hospital.jpg");
background-size:1500px 1000px;
background-repeat: no-repeat;
background-attachment: fixed;  
background-size: cover;
}
h1
{
font-size: 38px;
background-color:#add8e6;
}
</style>
</head>
<html>
<body>
<a href="patient.html" class="previous">&laquo; Previous</a>

<div>
  <h1 align='center'> PATIENT DETAILS</h1><br>
  <form  action="addpatient.php" method="post">
  <b>
    <label for="Pfname">First name: </label> 
    <input type="text" id="Pfname" name="Pfname"><br><br>

    <label for="Plname">Last name: </label>
    <input type="text" id="Plname" name="Plname"><br><br>

  <label for="Patient_id">Patient Id : </label>
    <input type="text" id="Patient_id" name="Patient_id"><br><br>

  Gender: M<input type="radio" id="Gender" name="Gender" value="Male">
          F<input type="radio" id="Gender" name="Gender" value="Female">
          O<input type="radio" id="Gender" name="Gender" value="Others">
  <br><br>
  <label for="Admission_date">Admission Date: </label>
    <input type="date" id="Admission_date" name="Admission_date"><br><br>

  <label for="Admission_id">Admission Id: </label>
    <input type="text" id="Admission_id" name="Admission_id"><br><br> 

  <input type="submit" value="Submit">
  <input type="reset" value="Reset">
  </b>
  </form>
</div>
<div class="container">
<h1 align="center">Patient Details</h1>
      <table class="table table_striped" id="myTable">
        <thead>
          <tr>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">ID</th>
            <th scope="col">Gender</th>
            <th scope="col">Admission Date</th>
            <th scope="col">Admission ID</th>
          </tr>
        </thead>
        <tbody>
        <?php 
          $sql = "SELECT * FROM `patient`";
          $result = mysqli_query($conn,$sql);
          $Sno = 0;
          // fetch
          while($row = mysqli_fetch_assoc($result)){
           
            echo "<tr>
           
            <td>". $row['Pfname'] . "</td>
            <td>". $row['Plname'] . "</td>
            <td>". $row['Patient_id'] . "</td>
            <td>". $row['Gender'] . "</td>
            <td>". $row['Admission_date'] . "</td>
            <td>". $row['Admission_id'] . "</td>
            </tr>";
            
          } 
        ?>
        </tbody>
      </table>
    </div>

</body>
</html>