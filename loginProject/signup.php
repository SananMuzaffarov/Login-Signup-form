<?php 

session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
        $user_id = random_num(20);
        $query = "insert into users (user_id, user_name, password) values('$user_id', '$user_name', '$password')";

        mysqli_query($con,$query);

        header("Location: login.php");
        die;
    }
    else{
        echo "Please Enter Valid Information";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup page</title>
    <style>
.div{
    position: absolute;
    display: flex;
    top: 20%;
    left: 37%;
    background-color: rgba(var(--d87,255,255,255),1);
    border: 1px solid rgba(var(--b6a,219,219,219),1);
    border-radius: 1px;
    width: 350px;
    height: 320px;
}
.logo{
    position: absolute;
    display: flex;
    margin-top: 35px;
    margin-left: 95px;
}
.logo img{
    width: 175px;
    height: 51px;
}
.input{
    position: absolute;
    display: inline-block;
    left: 15%;
    margin-top: 123px;
}
.input input{
    background-color: rgba(var(--b3f,250,250,250),1);
    border: 1px solid rgba(var(--b6a,219,219,219),1);
    width: 258px;
    height: 36px;
    text-align: center;
    font-weight: 300;
    color: rgba(var(--f52,142,142,142),1);
    font-size: 12px;
    height: 36px;
    left: 8px;
    line-height: 36px;
    overflow: hidden;
}
#button{
    margin-top: 30px;
    width: 265px;
    height: 40px;
    cursor: pointer;
    background-color: #9490d4;
    color: #ffffff;
    font-size: 15px;
    font-weight: 500;
    font-family: sans-serif;
    border: 1px solid transparent;
    border-radius: 4px;
}
.hesab{
    position: absolute;
    display: flex;
    top: 65%;
    left: 37%;
    background-color: rgba(var(--d87,255,255,255),1);
    border: 1px solid rgba(var(--b6a,219,219,219),1);
    border-radius: 1px;
    width: 350px;
    height: 53px;
    text-align: center;
    align-items: center;
    justify-content: center;
}
.kayd{
    position: relative;
    display: flex;
}
.kayd p{
    color: rgba(var(--i1d,38,38,38),1);
    font-size: 16px;
    margin: 15px;
    font-family: sans-serif;
    font-weight: 500;
}
.kayd p span a{
    text-decoration: none;
    cursor: pointer;
    color: rgba(var(--d69,0,149,246),1);
    font-size: 16px;
    font-family: sans-serif;
    font-weight: 500;
}
    </style>
</head>
<body>
    <form method="POST">
    <div class="div">
            <div class="logo">
                <img src="instagramLogo.png" alt="">
            </div>
            <div class="input">
                <label for="Email">
                    <input id="text" type="text" name="user_name" placeholder="username">
                </label>
                <label for="Email">
                    <input id="text" type="password" name="password" placeholder="password" style="margin-top: 10px;">
                </label>
                <input id="button" type="submit" value="Sign up"><br><br>
              </div>
        </div>
        <div class="hesab">
            <div class="kayd">
                <p>Don't have an account? <span><a href="login.php">Login</a></span></p>
            </div>
        </div>
    </form>
</body>
</html>