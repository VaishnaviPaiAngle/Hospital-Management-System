<!DOCTYPE html>
<html>
    <head>
        <style>
             h1{
                font-size: 40px;
                margin: 30px 150px 50px 150px;
                padding: 50px 150px 40px 150px;
                text-align: center;
                background-size: 1100px 350px;
                background-image: url("background2.webp");
            }
            div{
   
                font-size: 30px;
                font-weight: bold;
                padding: 50px 200px 200px 200px;
                color: rgb(12, 12, 17);
                text-align: center;
            }
            body{
                background-color: black;
                background-size:1300px 900px; ;
                background-image: url(doctor.jpg);
                background-repeat: no-repeat;
                background-attachment: fixed;  
                background-size: cover;
            }
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
    </head>
    <body>
    <a href="page2.html" class="previous">&laquo; Previous</a>
        <h1>STAFF</h1>
        <div class="container" id="cont1">
            <a href="addstaff.php" class="btn">Add Staff Details</a>
                <br><br><br>
                <a href="deletestaff.php" class="btn">Delete Staff Details</a>
                <br><br><br>
                <a href="updatestaff.php" class="btn">Update Staff Details</a>
                <br><br><br>
                <a href="patientreport.php" class="btn">Enter Patient Report</a>
                <br><br><br>
        </div>
    </body>
</html>