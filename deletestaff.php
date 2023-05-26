<?php  
$conn=mysqli_connect("localhost","root","","hospital_management");
if(!$conn)
{
    echo "database not connected". mysqli_error($conn);
}

if(isset($_POST['sid'])){
  $sid = $_POST['sid'];
  $sql = "DELETE FROM `staff` WHERE `staff`.`staff_id` = '$sid'";
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
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Delete Staff</title>
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
h1{
text-align:center;
}
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
</style>
</head>

<body>
<a href="staff.php" class="previous">&laquo; Previous</a>
<h1 align='center'>DELETE STAFF DETAILS</h1><br>
<div>
    <form action="deletestaff.php" method="post">
        
            Staff ID:<input type="text" name="sid" id="sid"><br><br>
            <input type="submit" value="Submit" id="btnsub">
            <input type="reset" value="Reset"><br>
        </div>
    </form>
    <div class="container ">
      <table class="table table_striped" id="myTable">
        <thead>
          <tr>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">Staff ID</th>
            <th scope="col">Designation</th>
          </tr>
        </thead>
        <tbody>
        <?php 
          $sql = "SELECT * FROM `staff`";
          $result = mysqli_query($conn,$sql);
          $Sno = 0;
          // fetch
          while($row = mysqli_fetch_assoc($result)){
           
            echo "<tr>
           
            <td>". $row['first_name'] . "</td>
            <td>". $row['last_name'] . "</td>
            <td>". $row['staff_id'] . "</td>
            <td>". $row['designation'] . "</td>
            </tr>";
            
          } 
        ?>
        </tbody>
      </table>
    </div>
</body>
<html>