<?php
 $conn=mysqli_connect("localhost","root","","hospital_management");
 if(!$conn)
 {
  echo "database not connected successfully";
 }

 if(isset($_POST['pid'])){
    $pid = $_POST['pid'];
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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Patient Report</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <style>
    div {
      text-align: center;
      margin: 20px 350px 40px 350px;
      font-size: 28px;
      background-color: #add8e6;
      box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    border: 10px ridge darkblue;
    }

    body {
      background-image: url("hospital.jpg");
      background-size: 1500px 1000px;
    }
  </style>
</head>

<body>
  <a href="patient.html" class="previous">&laquo; Previous</a>
  <form action="viewpatientreport.php" method="post">
    <div>
      <h1 align="center">Patient Report</h1>
    </div>
  </form>

  <div class="container">
    <table class="table table_striped" id="myTable">
      <thead>
        <!-- <tr>
            <th scope="col">First name</th>
            <td></td>
          </tr>
          <tr>
            <th scope="col">Last name</th>
            <td></td>
          </tr>
          <tr>
            <th scope="col">ID</th>
            <td></td>
          </tr>
          <tr>
            <th scope="col">Gender</th>
            <td></td>
          </tr>
          <tr>
            <th scope="col">Doctor name</th>
            <td></td>
          </tr>
          <tr>
            <th scope="col">Doctor ID</th>
            <td></td>
          </tr>
          <tr>
            <th scope="col">Diagnosis</th>
            <td></td>
          </tr>
          <tr>
            <th scope="col">Disease</th>
            <td></td>
          </tr> -->
      </thead>
      <tbody>
        <?php 
        
          $sql = "SELECT * FROM `patient_report`";
          $result = mysqli_query($conn,$sql);
          
          while($row = mysqli_fetch_assoc($result)){
           if($pid == $row['Patient_id']){

              echo "<tr>
              <th scope='col'>First name</th>
              <td>". $row['Pfname'] . "</td>
            </tr>
            <tr>
              <th scope='col'>Last name</th>
              <td>". $row['Plname'] . "</td>
            </tr>
            <tr>
              <th scope='col'>ID</th>
              <td>". $row['Patient_id'] . "</td>
            </tr>
            <tr>
              <th scope='col'>Gender</th>
              <td>". $row['Gender'] . "</td>
            </tr>
            <tr>
              <th scope='col'>Doctor name</th>
              <td>". $row['Doctor_name'] . "</td>
            </tr>
            <tr>
              <th scope='col'>Doctor ID</th>
              <td>". $row['Doctor_id'] . "</td>
            </tr>
            <tr>
              <th scope='col'>Diagnosis</th>
              <td>". $row['Diagnosis'] . "</td>
            </tr>
            <tr>
              <th scope='col'>Disease</th>
              <td>". $row['Disease'] . "</td>
            </tr>";
           }
            
          } 
        ?>


      </tbody>
    </table>
  </div>
</body>
<html>