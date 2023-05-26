<?php
$conn=mysqli_connect("localhost","root","","hospital_management");
if(!$conn)
{
    echo "database not connected successfully";
}

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $sid=$_POST["sid"];
    $des=$_POST["des"];
    $sql="UPDATE `staff` SET `first_name` = '$fname', `last_name` = '$lname', `designation` = '$des' WHERE `staff`.`staff_id` = '$sid'";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
      echo "The record was not been inserted! ". mysql_error($conn);
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

.next {
  background-color: #04AA6D;
  color: white;
}

.round {
  border-radius: 50%;
}
</style>
<title>STAFF DETAILS</title>
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<style>
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
<html>
<body>
<a href="staff.php" class="previous">&laquo; Previous</a>
<h1 align='center'>STAFF DETAILS</h1><br>
<div>
<form action="updatestaff.php" method="post">
 <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br><br>
 <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br><br>
 <label for="sid">Staff id:</label>
  <input type="text" id="sid" name="sid"><br><br><br> 
 <label for="des">Designation:</label>
  <input type="text" id="des" name="des"><br><br><br> 
<input type="submit" value="Submit">
<input type="reset" value="Reset">
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
</html>