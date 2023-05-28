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
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>FLIGHNE.GG</title>
      <link rel="icon" href="Home.png"/>
      <link rel="stylesheet" href="main.css">
      
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
   </head>
<div class="wrapper">
    <nav>
       <input type="radio" name="tab" id="home" >
       <input type="radio" name="tab" id="inbox">
       <input type="radio" name="tab" id="contact">
       <input type="radio" name="tab" id="heart">
       <input type="radio" name="tab" id="about" checked>
       <label for="home" class="home"><a href="main.php"><i class="fas fa-home"></i>Home</a></label>
       <label for="contact" class="contact"><a href="Downloads.php"><i class="fa-solid fa-download"></i>Dowloads</a></label>
       <label for="about" class="about"><a href="#"><i class="far fa-user"></i>About</a></label>
       <div class="tab"></div>
    </nav>

    <div class="dbuser1">
   <?php if (isset($user)): ?>
        <div class="phpcol">
        <p class="dbname">Hello Welcome</p><p class="dbusername"><?= htmlspecialchars($user["username"]) ?></p>
        
        <div class="logotdb">
          <p><a href="logout.php">Log out</a></p>
   </div>
   </div>
    <?php endif; ?>
   </div>
<hr>

<div class="title1">
<img src="Home.png">
<p class="fade-in">About Me | Us</p>
</div>

<div class="fi_content">
    <p class="fade-in2">Who Am I?</p>
    <p class="fade-in2">Im FLIGHNE Who Loves Editing, Coding And Much more</p>

</div>
<div id="container">
    <header>
        <h1 class="fade-in">About Us</h1>
        <br>
            <p class="fade-in3">Hi Im <a target="_blank" href="#">FLIGHNE</a> A Streamer, Editor And a Starter Web Developer Its Just My Hobby To Do This Stuffs, Its just Fun Doing These Things Specially Coding and Editing</p>
    </header>
    
    <main class="fade-in4">
        <p>Edited: 5/21/2023</p>
        <h3>What Games Do I Play?</h3>
        <p>I Play Valorant A First Person Shooter and a 5v5</p>
      <ul>
        <li>Valorant</li>
        <li>Minecraft</li>
        <li>Roblox</li>
        <li>Xbox Game Pass Games</li>
      </ul>  
      <h3>What Editing Software I Use?</h3>
      <ul>
        <li>Davinci Resolve</li>
        <a href="https://www.kittl.com" target="_blank"><li>Kittle</li></a>
        <li>Photoshop</li>
        <a href="https://www.canva.com" target="_blank"><li>Canva</li></a>
      </ul>  
      <h1>- To Be Continued -</h1>
      </main>
    </div>








<style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
    background: linear-gradient(180deg, rgba(255, 203, 203, 0.377) 20%, rgba(255, 0, 0, 0.384) 100%);
  display: grid;
  height: 100%;
  text-align: center;
}
@media screen and (min-width: 1024px) {
  /* CSS styles for PC screens with a minimum width of 1024 pixels */
  /* Place your styles here */
}
@media screen and (max-width: 1920px) {
  /* CSS styles for PC screens with a maximum width of 1920 pixels */
  /* Place your styles here */
}
@media screen and (max-hight: 780px){
  /* CSS styles for PC screens with a maximum width of 1920 pixels */
  /* Place your styles here */
}
html a{
    color: #fff;
    text-decoration: underline;
  }
  .phpcol{
    display: flex;
    flex-direction: column;
  }
  .dbusername{
    margin-top: -30px;
    color: #FEE201;
  }
  .dbname{
    margin-top: 50px;
    margin-bottom: 0;
    color: #fff;
  }
  .logotdb{
    margin-top: -30px;
  }
  .dbuser1{
    text-align: center;
    display: flex;
    flex-direction: row;
    width: fit-content;
    margin-left: auto;
    margin-right: auto;
  }
text{
    overflow: auto;
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
  z-index: /*-1*/;
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

/* Image */
.title1 {
bottom: -10px;
 
  position: relative;
}

.title1 p {
  position: absolute;
  top: 0;
  left: 45.5%;
  z-index: 1;
  color: rgb(255, 255, 255);
  font-weight: bold;
  padding: 10px;
  transition: all .3s ea;
}
.title1 p:hover{
    color: #e0a505;
}
.title1 img.low-brightness {
  filter: brightness(10%);
}
.title1 img {
    
  object-fit: cover;
  height: 50px; /* Adjust the desired height for the cropped image */
  width: 400px; /* Adjust the desired width for the cropped image */
  filter: brightness(20%); /* Adjust the desired brightness value */
  border-radius: 20px;
  transition: brightness .3s ease-out;
}


/* Fade in */
.fade-in {
  opacity: 0;
  animation: fade-in-animation 1s ease-in forwards;
}

@keyframes fade-in-animation {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

.fade-ins {
  opacity: 0;
  transition: opacity 5s ease-in;
}

/* Fade in2 */
.fade-in2 {
  opacity: 0;
  animation: fade-in-animation 4s ease-in forwards;
}

@keyframes fade-in-animation {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}


</style>
<script>
    $(window).scroll(function() {
  $('.fade-ins').each(function() {
    var position = $(this).offset().top;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    
    if (scroll > position - windowHeight + 50) {
      $(this).addClass('visible');
    }
  });
});


window.addEventListener('scroll', function() {
      const container = document.querySelector('.container');
      const header = document.querySelector('h1');

      if (window.scrollY >= 1) {
        header.classList.remove('visible');
      } else {
        header.classList.add('visible');
      }
    });
</script>