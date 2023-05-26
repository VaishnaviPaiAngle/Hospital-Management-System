<?php  
$conn=mysqli_connect("localhost","root","","hospital_management");
if(!$conn)
{
    echo "database not connected successfully". mysqli_error($conn);
}

if(isset($_POST['pid'])){
  $pid = $_POST['pid'];
  echo $pid;
  $sql = "DELETE FROM `patient` WHERE `patient`.`Patient_id` = '$pid'";
  if(mysqli_query($conn,$sql)){
      echo "The record was deleted!";
  }else{
      echo "The record was not deleted!".mysqli_error();
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
<title>Update Patient details</title>
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Staff</title>
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
}
body{
background-image:url("hospital.jpg");
background-size:1500px 1000px;
}
h1
{

padding:50px 100px 10px 100px;
font-size: 38px;
background-color:#add8e6;
}
    </style>
</head>

<body>
<a href="patient.html" class="previous">&laquo; Previous</a>
  
    <form action="deletepatient.php" method="post">
        <div>
        <h1 align="center">DELETE PATIENT</h1>
            Patient ID:<input type="text" name="pid" id="pid"><br><br>
            <input type="submit" value="Submit" id="btnsub">
            <input type="reset" value="Reset"><br>
        </div>
    </form>
    
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
<html>