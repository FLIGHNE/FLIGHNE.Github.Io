<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<link rel="icon" href="Home.png"/>
<html>
<head>
    
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
<div class="logdb">
    <h1>Login | FLIGHNE</h1>
    
    <?php if ($is_invalid): ?>
        <em>Invalid login, or No Data Found</em>
    <?php endif; ?>
    
    <form method="post">
        <label for="email"><i class="fa-regular fa-envelope"></i> Email</label>
        <input type="email" name="email" id="email" placeholder="Email"
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
               
        
        <label for="password"><i class="fa-solid fa-key"></i> Password</label>
        <input type="password" name="password" id="password" placeholder="Password">
        <div class="oth">
        <a href="signup.html"><p class="p1">Sign in</button></p></a>
        <a href="index.php"><p class="p2">Home</button></p></a>
    </div>
        <button>Log in</button>
    </form>
    </div>
    <hr>
    <div class="img1">
    <img  class="img-1" src="https://drive.google.com/uc?id=1uqT7EiZsOH09D7BNL-TuWZ8da1rrmBMv">
    <img class="img-2" src="https://drive.google.com/uc?id=1fkmvvlPgF4Ou4GB0wNiOI21m5JLXwMtY">
</div>
<hr>
</body>
</html>
<style>
    .oth{
        width: fit-content;
        margin-right: auto;
        margin-left: auto;
        display: flex;
        flex-direction: row; 
    }
    .oth .p1{
        margin-right: 10px;
    }
    .oth .p2{
        margin-left: 10px;
    }
    /* OTH */
    .img1 {
        margin-top: 30px;
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
        /* IMG */
    .logdb a{
        color: rgb(255, 255, 255);
        text-decoration: none;
    }
    .logdb p{
        margin-left: auto;
        margin-right: auto;
        width: 50px;
        background: #0c151c;
        padding: 10px;
        border-radius: 10px;
        transition: all .3s ease-out;
    }
    .logdb p:hover{
        background: #000000;
        border-radius: 10px;
    }
    form {
        text-align: ;
        align-items: center ;
    }
    form input{
        color: black;
        background: #FFFAD3;
        margin-left: auto;
        margin-right: auto;
    }
    .logdb{
        margin-top: 20%;
        color: black;
        margin-left: auto;
        margin-right: auto;
        border-radius: 40px;
        width: 300px;
        padding: 15px;
        background: #B2B2B2;
        justify-content: center;
        align-items: center;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }
    .logdb h1{
        color: black;
    }
    .logdb em{
        color: #EF4242;
        margin-bottom: 10px;
    }
    </style>







