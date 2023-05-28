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

<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>FLIGHNE.GG</title>
      <link rel="icon" href="Home.png"/>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
   </head>
   <body>
      <div class="wrapper">
         <nav>
            <input type="radio" name="tab" id="home" checked>
            <input type="radio" name="tab" id="inbox">
            <input type="radio" name="tab" id="contact">
            <input type="radio" name="tab" id="heart">
            <input type="radio" name="tab" id="about">
            <label for="home" class="home"><a href="#"><i class="fas fa-home"></i><a>Home</a></label>
            <label for="contact" class="contact"><a href="Downloads.php"><i class="fa-solid fa-download"></i>Downloads</a></label>
            <label for="about" class="about"><a href="Aboutme.php"><i class="far fa-user"></i>About</a></label>
            <div class="tab"></div>
         </nav>
        </div>
        <div class="dbuser1">
   <?php if (isset($user)): ?>
<div class="phpcol">
        <p class="dbname">Hello Welcome</p><br><p class="dbusername"><?= htmlspecialchars($user["username"]) ?></p>
        <br>
        <div class="logotdb">
          <p><a href="logout.php">Log out</a></p>
   </div>
   </div>
    <?php endif; ?>
    <br>
    <hr>
    <br>
        <div class="vertical-line">
          <div class="left-text"><a href="https://docs.google.com/document/d/1t3noGsqxinjklG5OKFA13HxUKsitAZMVKWyqFJ_7vJ4/edit?usp=sharing" target="_blank">Privacy</a></div>
          <div class="vline"></div>
          <div class="right-text"><a href="https://bawaltntsmp.github.io/FeedBack%20Forms.html">FeedBack</a></div>
        </div>
        <div class="intro">
          <h1>- Not Yet Final, Done -</h1>
          <h2>Hi Im FLIGHNE</h2>
     
     <div class="wrapper2">
        <div class="static-txt">I'm a</div>
        <ul class="dynamic-txts">
          <li><span>Streamer</span></li>
          <li><span>Youtuber</span></li>
          <li><span>Developer</span></li>
          <li><span>Video Editor</span></li>
          <li><span>Student</span></li>
        </ul>
      </div>
        <h2>Feel Free To Discover New Things In This Website</h2>


      </div>
   </body>
</html>
<style>
  html a{
    color: #fff;
    text-decoration: underline;
  }
  .phpcol{
    margin-top: -20%; 
    display: flex;
    flex-direction: column;
  }
  .dbusername{
    color: #FEE201;
  }
  .dbname{
    margin-top: 50px;
    margin-bottom: 0;
    color: #fff;
  }
  .vertical-line .vline{
    content: "";
    border-left: 1px solid rgb(255, 255, 255); /* Adjust the color and thickness as needed */
    height: 50px; /* Adjust the height of the line */
    margin-right: 10px; /* Adjust the spacing between the line and text */
    margin-left: 10px;
  }
   .vertical-line {
    color: #fff;
   justify-content: center;
    display: flex;
    align-items: center;
  }
  .vertical-line a{
    color: aquamarine;
    text-decoration: none;
  }

  .vertical-line::before {
    content: "";
    height: 100px; /* Adjust the height of the line */
    margin: 0 50px; /* Adjust the spacing between the line and text */
  }

  .left-text,
  .right-text {
    white-space: nowrap; /* Prevent text from wrapping */
  }
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  display: grid;
  height: 100%;
  text-align: center;
  background: #3f3f3f;
}
.intro{
  margin-left: auto;
  margin-right: auto;
  background: #c2c2c2;
  width: fit-content;
  height: 250px;
  padding: 15px;
  border-radius: 20px;
  display: flex;
  flex-direction: column;
}
.wrapper{
   margin-top: 20px;
   margin-left: auto;
   margin-right: auto;
  height: 60px;
  width: 55vw;
  background: #fff;
  line-height: 60px;
  border-radius: 50px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.25);
}
.wrapper nav{
  position: relative;
  display: flex;
}
.wrapper nav label{
  flex: 1;
  width: 100%;
  z-index: 1;
  cursor: pointer;
}
.wrapper nav label a{
  position: relative;
  z-index: /*-1;*/;
  color: #1d1f20;
  font-size: 20px;
  font-weight: 500;
  text-decoration: none;
  transition: color 0.6s ease;
}
.wrapper nav #home:checked ~ label.home a,
.wrapper nav #inbox:checked ~ label.inbox a,
.wrapper nav #contact:checked ~ label.contact a,
.wrapper nav #heart:checked ~ label.heart a,
.wrapper nav #about:checked ~ label.about a{
  color: #fff;
}
.wrapper nav label a i{
  font-size: 25px;
  margin: 0 7px;
}
.wrapper nav .tab{
  position: absolute;
  height: 100%;
  width: 20%;
  left: 0;
  bottom: 0;
  z-index: 0;
  border-radius: 50px;
  background: linear-gradient(45deg, #e0a505 0%,#00d9ff 100%);
  transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper nav #home:checked ~ .tab{
  left: 7.5%;
}
.wrapper nav #contact:checked ~ .tab{
  left: 40.9%;
}
.wrapper nav #heart:checked ~ .tab{
  left: 60%;
}
.wrapper nav #about:checked ~ .tab{
  left: 75%;
}
.wrapper nav input{
  display: none;
}

/* IM */
.wrapper2{
    margin-right: auto;
    margin-left: auto;
  display: flex;
  
  
}
.wrapper2 .static-txt{
  color: #000000;
  font-size: 60px;
  font-weight: 400;
}
.wrapper2 .dynamic-txts{
  margin-left: 15px;
  height: 90px;
  line-height: 80px;
  overflow: hidden;
}
.dynamic-txts li{
  list-style: none;
  color: #FC6D6D;
  font-size: 60px;
  font-weight: 500;
  position: relative;
  top: 0;
  animation: slide 10s steps(5) infinite;
}
@keyframes slide {
  100%{
    top: -450px;
  }
}
.dynamic-txts li span{
  position: relative;
  margin: 5px 0;
  line-height: 90px;
}
.dynamic-txts li span::after{
  content: "";
  position: absolute;
  left: 0;
  height: 100%;
  width: 100%;
  background: #c2c2c2;
  border-left: 2px solid #FC6D6D;
  animation: typing 2s steps(10) infinite;
}
@keyframes typing {
  40%, 60%{
    left: calc(100% + 30px);
  }
  100%{
    left: 0;
  }
}
</style>