<?php 

session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <style>
        .box{
            margin-top: 200px;
        }
        h1{
            text-align: center;
            align-items: center;
            font-size: 35px;
            font-weight: 600;
            color: #000;
            font-family: 'Anton', sans-serif;
        }
        p{
            text-align: center;
            align-items: center;
            color: gray;
            font-family: 'Anton', sans-serif;
            font-weight: 500;
        }
        #p{
            text-align: center;
            align-items: center;
        }
    </style>
</head> 
<body>
    <div class="box">
    <h1>You are Logged in</h1>
    <br>
    <p>Welcome , <?php echo $user_data['user_name']; ?>. We are very happy to see you in there.</p>
    <br>
    <p id="p"><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>