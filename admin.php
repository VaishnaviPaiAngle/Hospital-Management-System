<?php
$conn=mysqli_connect("localhost","root","","hospital_management");
if(!$conn)
{
    echo "database not connected successfully";
}

    
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $username=$_POST["username"];
    $userid=$_POST["userid"];
    $sql="INSERT INTO `admin` (`Username`, `User_id`) VALUES ('$username', '$userid')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        $insert=true;
    }else{
        echo "The record was not been inserted! ". mysql_error($conn);
    }
}
?>
<DOCTYPE! html>
    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">        
            <title>HOSPITAL MANAGEMENT SYSTEM</title> 
            <link rel="stylesheet" href="admincss.css">
            <style>
                a{
                text-decoration: none;
                color: black;
            }
            a:hover{
                color: orangered;
            }
            .btn{
               
               background-image: url(blue.jpg);
                padding: 20px;
                font-size: 30px;
                border-radius: 4px;
            }
                </style>
        </head>
        <body>
        
            <form action="admin.php" method="post">
                <div>
            <h1>ADMIN</h1>
            Username:<input type="text" name="username" id="username"><br><br>
            User ID:<input type="text" name="userid" id="userid" ><br><br>
            <input type="submit" value="Submit" id="btnsub" onclick="openPage2()">
            <input type="reset" value="Reset"><br>
                </div>
            </form>
         
        </body>
        <script>
            function openPage2(){
                window.open("page2.html","_blank");
            }
        </script>
    </html>