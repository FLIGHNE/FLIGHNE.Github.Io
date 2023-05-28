<?php


session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="Home.png"/>
    <title>Home | FLIGHNE</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    
    <h1>Welcome!</h1>
    <h2>Welcome To FLIGHNE.Github.io</h2>
    <h2>Please Login or Signin To Enter Our Website!</h2>
    <hr>
    <div class="img1">
    <img  class="img-1" src="https://drive.google.com/uc?id=1uqT7EiZsOH09D7BNL-TuWZ8da1rrmBMv">
    <img class="img-2" src="https://drive.google.com/uc?id=1fkmvvlPgF4Ou4GB0wNiOI21m5JLXwMtY">
</div>
<hr>
    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["username"]) ?></p>
        
        <div class="dbb">
        <p class="lo"><a href="logout.php">Log out</a></p>
    </div>
        <div class="dbb">
        <p class="gt"><a href="main.php">Go To Website</a></p>
    </div>

    <?php else: ?>
        
        <div class="dbb">
        <p class="su"><a href="login.php">Log in</a> or <a href="signup.html">Sign up</a></p>
        <p>--------------------- Find Out More ---------------------</p>
        <p><a class="pr" href="https://docs.google.com/document/d/1t3noGsqxinjklG5OKFA13HxUKsitAZMVKWyqFJ_7vJ4/edit?usp=sharing" target="_blank">Privacy</a> or <a class="fe" href="https://bawaltntsmp.github.io/FeedBack%20Forms.html">FeedBack</a></p>
    </div>
    <?php endif; ?>
    
</body>
</html>
    <style>
        .lo {
            background: #fff;
        }
        .img1 {
            width: fit-content;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            flex-direction: row;

        }
        .img1 .img-1{
            padding-right: 15px;
            height: auto;
            width: 200px;
        }
        .img1 .img-2{
            padding-left: 15px;
            height: auto;
            width: 100px;
        }
body{
    text-align: center;
}
.dbb a{
    margin-left: auto;
    margin-right: auto;
    padding: 10px;
    border-radius: 20px;
    width: fit-content;
    background: #C05959;
}
.dbb .pr,
.dbb .fe{
    margin-left: auto;
    margin-right: auto;
    padding: 10px;
    border-radius: 20px;
    width: fit-content;
    background: #00807C;
}
.dbb a{
    font-weight: bold;
    color: #FFFFFF;
    text-decoration: none;
}

    </style>
    
    
    
    
    
    
    
    
    
    
