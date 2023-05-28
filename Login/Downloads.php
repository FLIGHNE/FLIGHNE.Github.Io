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
<title>FLIGHNE.GG | DL</title>
<link rel="icon" href="Home.png"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<script></script>
<body>
    <div class="wrapper">
       <nav>
          <input type="radio" name="tab" id="home">
          <input type="radio" name="tab" id="inbox">
          <input type="radio" name="tab" id="contact" checked>
          <input type="radio" name="tab" id="heart">
          <input type="radio" name="tab" id="about">
          <label for="home" class="home"><a href="main.php"><i class="fas fa-home"></i><a>Home</a></label>
          <label for="contact" class="contact"><a href="#"><i class="fa-solid fa-download"></i>Downloads</a></label>
          <label for="about" class="about"><a href="Aboutme.php"><i class="far fa-user"></i>About</a></label>
          <div class="tab"></div>
       </nav>
   </div>
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

   <div class="wrapper2">
    <div class="icon"><i id="left" class="fa-solid fa-angle-left"></i></div>
    <ul class="tabs-box">
      <li class="tab active" title="Filters"><i class="fa-solid fa-filter"></i></li>
      <a href="#movs" onclick="changeSectionBgColor('movs')"><li class="tab">Download Movies</li></a>
      <a href="#subsS" onclick="changeSectionBgColor('subsS')"><li class="tab">Download Subtitles</li></a>
      <a href="#mdai" onclick="changeSectionBgColor('mdai')"><li class="tab">Movies</li></a>
      <a href="#mdait" onclick="changeSectionBgColor('mdait')"><li class="tab">Trailer</li></a>
      <a href="#fls" onclick="changeSectionBgColor('fls')"><li class="tab">Files</li></a>
      <a href="https://bawaltntsmp.github.io/FeedBack%20Forms.html" target="_blank" onclick="checker()"><li class="tab">FeedBack</li></a>
      <a href="https://docs.google.com/document/d/1t3noGsqxinjklG5OKFA13HxUKsitAZMVKWyqFJ_7vJ4/edit?usp=sharing" target="_blank" onclick="checker2()"><li class="tab">Privacy | Agreement</li></a>
      <li class="tab" onclick="checkerIS()"><i class="fa-solid fa-circle-info"></i></li>
    </ul>
    <div class="icon"><i id="right" class="fa-solid fa-angle-right"></i></div>
  </div>


   <div class="content1">
    
    <section id="subsS" class="section"><h1>| Download<a href="INVERTERS.png"><img src="INVERTERS.png"></a>Subtitles |</h1></section>
    <hr class="wrhr">
    <div class="c1bg">
    <article class="artc"> Download Oblivion | 2023 Subtitle</article>
    <article class="artcat">Don't Redistribute! | Inverters Studios</article>
    <article class="artcat">CC: CJ, ALEX</article>
   </div>

    <div class="container">
      <button class="download-btn-1" data-timer="2">
        <span class="icon material-symbols-rounded2"><i class="fa-solid fa-download"></i></span>
        <span class="text">Oblivion.Srt</span>
      </button>
    </div>
    

    <hr class="wthr">
    
    <div class="c1bg">
    <article class="artc"> Download MCAI | 2023 Subtitle</article>
    <article class="artcat">Don't Redistribute! | Inverters Studios</article>
    <article class="artcat">CC: CJ, ALEX</article>
    </div>
    <div class="container">
      <button class="download-btn-2" data-timer="2">
        <span class="icon material-symbols-rounded2"><i class="fa-solid fa-download"></i></span>
        <span class="text">MCAI (Final).Srt</span>
      </button>
    </div>
    
  <hr class="wrhr">
<section id="movs" class="section"><h1>| Download<a href="INVERTERS.png"><img src="INVERTERS.png"></a>Movies |</h1></section>
<hr class="wrhr">
<div class="c1bg2">
  <article class="artc"> Download MCAI Inverters Studios 2023</article>
  <article class="artcat">Don't Redistribute! | Via: Google Drive</article>
  <article class="artcat">Edited: CJ, ALEX | Director: Andrea</article>
  </div>
  <div class="container">
    <button class="download-btn-3" data-timer="2">
      <span class="icon material-symbols-rounded2"><i class="fa-solid fa-download"></i></span>
      <span class="text">MCAI (Final) Trailer</span>
    </button>
  </div>
  

<hr class="wthr">
<div class="c1bg2">
  <article class="artc"> Download Oblivion Inverters Studios 2023</article>
  <article class="artcat">Don't Redistribute! | Via: Google Drive</article>
  <article class="artcat">Edited: CJ, ALEX | Director: Andrea</article>
  </div>
  <div class="container">
    <button class="download-btn-4" data-timer="2">
      <span class="icon material-symbols-rounded2"><i class="fa-solid fa-download"></i></span>
      <span class="text">Oblivion Movie</span>
    </button>


  </div>
  
<hr class="wrhr">
<h2>| Inverters Studios<a href="INVERTERS.png"><img class="foot" src="INVERTERS.png"><a href="IS Logs.png"><img class="foot2" src="IS Logs.png"></a>&trade; &copy; |</h2>

</div>

                                  <!-- Second Page -->

<div class="content1">
    
  <section id="fls" class="section"><h1>| Download<a href="INVERTERS.png"><img src="INVERTERS.png"></a>Files |</h1></section>
  <hr class="wrhr">
  <div class="c1bg3">
  <article class="artc"> Download Our Logos Use Here | 2023 Logos</article>
  <article class="artcat">Inverters Studios &reg;</article>
  <article class="artcat">CC: CJ, ALEX</article>
 </div>

  <div class="container">
    <button class="download-btn-5" data-timer="2">
      <span class="icon material-symbols-rounded2"><i class="fa-solid fa-download"></i></span>
      <span class="text">IS Logo</span>
    </button>
  </div>

<hr class="wrhr">
<section id="mdai" class="section"><h1>| Watch<a href="INVERTERS.png"><img src="INVERTERS.png"></a>Movies |</h1></section>
<hr class="wrhr">
<div class="c1bg3">
<article class="artc">Watch Oblivion 2023 | Inverters Studios</article>
    <article class="artcat">Full Screen Enable | Via: Youtube</article>
    <article class="artcat">Edited: CJ, ALEX | Director: Andrea</article>
    </div>
    <div class="mdia">
    <iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/flMUKMMLeDI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                          
</div>      
<hr class="wrhr">
<section id="mdait" class="section"><h1>| Watch<a href="INVERTERS.png"><img src="INVERTERS.png"></a>Trailers |</h1></section>
<hr class="wrhr">
<div class="c1bg3">
<article class="artc">Watch MCAI Trailer 2023 | Inverters Studios</article>
    <article class="artcat">Full Screen Enable | Via: Youtube</article>
    <article class="artcat">Edited: CJ, ALEX | Director: Andrea</article>
    </div>
    <div class="mdia">
      <iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/qCBspK4_2bM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                          
</div>   
<hr class="wrhr">   
<h2>| Inverters Studios<a href="INVERTERS.png"><img class="foot" src="INVERTERS.png"><a href="IS Logs.png"><img class="foot2" src="IS Logs.png"></a>&trade; &copy; |</h2>
                              


</body>
<style>
html a{
    color: #fff;
    text-decoration: underline;
  }
  .phpcol{
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
  .logotdb{
    margin-top: -10px;
  }
  .dbuser1{
    text-align: center;
    display: flex;
    flex-direction: row;
    width: fit-content;
    margin-left: auto;
    margin-right: auto;
  }
      .content1 .wrhr {
    border: none; /* Remove the default border */
    height: 5px; /* Set the height of the horizontal rule */
    background: linear-gradient(45deg, #bdbdbd5d 0%,#ff01015b 100%); /* Set the desired color using a hexadecimal code or color name */
    margin: 10px 0; /* Add some margin above and below the horizontal rule */
    border-radius: 50px;
  }
   .content1 .wthr {
    border: none;
    height: 2px;
    background: linear-gradient(45deg, #0000005d 0%,#0000005b 100%);
    margin: 10px 0;
    border-radius: 100px;
}
  html{
    scroll-behavior: smooth;
  }
    body{
        background: #2e2e2e;
    }
    .content1{
      margin-bottom: 30px;
        box-shadow: 0 3px 26px 0 rgba(184, 184, 184, 0.438);
        border-radius: 25px;
        background: linear-gradient(90deg, rgba(255, 203, 203, 0.377) 10%, rgba(255, 1, 1, 0.164) 100%);
        margin-top: 25px;
        text-align: center;
        width: 800px;
        margin-left: auto;
        margin-right: auto;
        padding: 25px
    }
    .content1 h1{
      color: #fff;
      height: fit-content;
      text-align: center;
      justify-content: center;
        padding: 15px;
        padding-bottom: 5px;
        display: flex;
        flex-direction: row;
    }
    .content1 h2{
      font-size: 15px;
      color: #fff;
      height: fit-content;
      text-align: center;
      justify-content: center;
        padding: 15px;
        padding-bottom: 5px;
        display: flex;
        flex-direction: row;
    }
    .content1 .foot{
      padding-left: 5px;
      padding-right: 10px;
      width: 60px;
      height: auto;
}
.content1 .foot2{
      padding-left: 5px;
      padding-right: 10px;
      width: 30px;
      height: auto;

    }
    .content1 img{
      padding-left: 10px;
      padding-right: 10px;
      width: 100px;
      height: auto;

    }
    .content1 article{
      white-space: nowrap;
        padding: 5px;
        padding-top: 10px;
    }
    /* Start Of BG */
    
    .c1bg{
      margin-left: auto;
      margin-right: auto;
      text-align: center;
      background: #ffffff1e;
      border-radius: 20px;
      width: 300px;
      padding-bottom: 10px;
    }
    .c1bg2{
      margin-left: auto;
      margin-right: auto;
      text-align: center;
      background: #ffffff1e;
      border-radius: 20px;
      width: 350px;
      padding-bottom: 10px;
    }
    .c1bg3{
      margin-left: auto;
      margin-right: auto;
      text-align: center;
      background: #ffffff1e;
      border-radius: 20px;
      width: 350px;
      padding-bottom: 10px;
    }
    .mdia{
      margin-left: auto;
      margin-right: auto;
      width: 580px;
      height: 360px;
      margin-top: 10px;
      border: 2px solid #f8f8f871;
    }
 /* End of BG */
    .artc{
      
      color: #fff;
        padding: 15px;
        padding-left: 10px;
        padding-right: 10px;
    }
    .artcat{
      color: #fff;
        padding-bottom: 5px;
    }
    .wrapper{
        text-align: center;
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
                                                        /* Download 1 */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

.download-btn-1 {
  margin-top: 10px;
  outline: none;
  border: none;
  color: #ffffff;
  display: flex;
  cursor: pointer;
  padding: 16px 25px;
  border-radius: 6px;
  margin-right: auto;
  margin-left: auto;
  white-space: nowrap;
  background: url(My\ project-1.png);
  background-repeat: no-repeat;
  background-position: -400px -120px;
  background-size: 900px;
  position: relative;
  transition: all 0.2s ease;
}

.download-btn-1::before {
  color: #fff;
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.2); /* Adjust the color and opacity as needed */
  mix-blend-mode: multiply; /* Blend the overlay with the background image */
  pointer-events: none; /* Make sure the overlay doesn't interfere with the button */
  z-index: -1; /* Push the overlay behind the button content */
  transition: all 0.2s ease;
  opacity: 0; /* Initially hidden */
}

.download-btn-1:hover::before {
  opacity: 1; /* Show the overlay on hover */
}

.download-btn-1:hover {
  border-radius: 6px;
  filter: brightness(70%); /* Adjust the brightness value as desired */
}
.download-btn-1.timer{
color: #000;
background: url(My\ project-1.png);
  background-repeat: no-repeat;
  background-position: -400px -120px;
  background-size: 900px;
transition: none;
font-size: 1.6rem;
pointer-events: none;
}
.download-btn-1.timer b{
color: #e6f563;
padding: 0 8px;
}
.download-btn-1 .icon{
font-size: 2rem;
}
.download-btn-1 .text{
font-size: 1.5rem;
padding-left: 10px;
}
.Salwyrrtxt{
margin-left: auto;
margin-right: auto;
text-align: center;
font-size: 20px;
color: rgb(0, 0, 0);
background-color: #585858;
padding: 15px;
border-radius: 10px;
border-left: 5px solid #000;
}
.container3{
display: flex;
justify-content: center;
align-items: center;
padding-bottom: 10px;
}

                                /* Download 2 */ 

  .download-btn-2 {
    margin-top: 10px;
  outline: none;
  border: none;
  color: #fff;
  display: flex;
  cursor: pointer;
  padding: 16px 25px;
  border-radius: 6px;
  margin-right: auto;
  margin-left: auto;
  white-space: nowrap;
  background: url(image_2023-05-01_220515920.png);
  background-repeat: no-repeat;
  background-position: -10px -200px;;
  background-size: 900px;
  position: relative;
  transition: all 0.2s ease;
}

.download-btn-2::before {
  color: #fff;
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.2); /* Adjust the color and opacity as needed */
  mix-blend-mode: multiply; /* Blend the overlay with the background image */
  pointer-events: none; /* Make sure the overlay doesn't interfere with the button */
  z-index: -1; /* Push the overlay behind the button content */
  transition: all 0.2s ease;
  opacity: 0; /* Initially hidden */
}

.download-btn-2:hover::before {
  opacity: 1; /* Show the overlay on hover */
}

.download-btn-2:hover {
  border-radius: 6px;
  filter: brightness(70%); /* Adjust the brightness value as desired */
}
.download-btn-2.timer{
color: #000;
background: url(image_2023-05-01_220515920.png);
  background-repeat: no-repeat;
  background-position: -10px -200px;;
  background-size: 900px;
transition: none;
font-size: 1.6rem;
pointer-events: none;
}
.download-btn-2.timer b{
color: #e6f563;
padding: 0 8px;
}
.download-btn-2 .icon{
font-size: 2rem;
}
.download-btn-2 .text{
font-size: 1.5rem;
padding-left: 10px;
}
.Salwyrrtxt2{
margin-left: auto;
margin-right: auto;
text-align: center;
font-size: 20px;
color: rgb(0, 0, 0);
background-color: #585858;
padding: 15px;
border-radius: 10px;
border-left: 5px solid #000;
}
.container3{
display: flex;
justify-content: center;
align-items: center;
padding-bottom: 10px;
}

                                  /* download 3 */
.download-btn-3 {
    margin-top: 10px;
  outline: none;
  border: none;
  color: #fff;
  display: flex;
  cursor: pointer;
  padding: 16px 25px;
  border-radius: 6px;
  margin-right: auto;
  margin-left: auto;
  white-space: nowrap;
  background: url(image_2023-05-01_220515920.png);
  background-repeat: no-repeat;
  background-position: -60px -200px;;
  background-size: 900px;
  position: relative;
  transition: all 0.2s ease;
}

.download-btn-3::before {
  color: #fff;
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.2); /* Adjust the color and opacity as needed */
  mix-blend-mode: multiply; /* Blend the overlay with the background image */
  pointer-events: none; /* Make sure the overlay doesn't interfere with the button */
  z-index: -1; /* Push the overlay behind the button content */
  transition: all 0.2s ease;
  opacity: 0; /* Initially hidden */
}

.download-btn-3:hover::before {
  opacity: 1; /* Show the overlay on hover */
}

.download-btn-3:hover {
  border-radius: 6px;
  filter: brightness(70%); /* Adjust the brightness value as desired */
}
.download-btn-3.timer{
color: #000;
background: url(image_2023-05-01_220515920.png);
  background-repeat: no-repeat;
  background-position: -10px -200px;;
  background-size: 900px;
transition: none;
font-size: 1.6rem;
pointer-events: none;
}
.download-btn-3.timer b{
color: #e6f563;
padding: 0 8px;
}
.download-btn-3 .icon{
font-size: 2rem;
}
.download-btn-3 .text{
font-size: 1.5rem;
padding-left: 10px;
}
.Salwyrrtxt2{
margin-left: auto;
margin-right: auto;
text-align: center;
font-size: 20px;
color: rgb(0, 0, 0);
background-color: #585858;
padding: 15px;
border-radius: 10px;
border-left: 5px solid #000;
}
.container3{
display: flex;
justify-content: center;
align-items: center;
padding-bottom: 10px;
}
  /* Download 4 */
  .download-btn-4 {
    margin-top: 10px;
  outline: none;
  border: none;
  color: #fff;
  display: flex;
  cursor: pointer;
  padding: 16px 25px;
  border-radius: 6px;
  margin-right: auto;
  margin-left: auto;
  white-space: nowrap;
  background: url(image_2023-05-01_220515920.png);
  background-repeat: no-repeat;
  background-position: -60px -200px;;
  background-size: 900px;
  position: relative;
  transition: all 0.2s ease;
}

.download-btn-4::before {
  color: #fff;
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.2); /* Adjust the color and opacity as needed */
  mix-blend-mode: multiply; /* Blend the overlay with the background image */
  pointer-events: none; /* Make sure the overlay doesn't interfere with the button */
  z-index: -1; /* Push the overlay behind the button content */
  transition: all 0.2s ease;
  opacity: 0; /* Initially hidden */
}

.download-btn-4:hover::before {
  opacity: 1; /* Show the overlay on hover */
}

.download-btn-4:hover {
  border-radius: 6px;
  filter: brightness(70%); /* Adjust the brightness value as desired */
}
.download-btn-4.timer{
color: #000;
background: url(image_2023-05-01_220515920.png);
  background-repeat: no-repeat;
  background-position: -10px -200px;;
  background-size: 900px;
transition: none;
font-size: 1.6rem;
pointer-events: none;
}
.download-btn-4.timer b{
color: #e6f563;
padding: 0 8px;
}
.download-btn-4 .icon{
font-size: 2rem;
}
.download-btn-4 .text{
font-size: 1.5rem;
padding-left: 10px;
}
.Salwyrrtxt2{
margin-left: auto;
margin-right: auto;
text-align: center;
font-size: 20px;
color: rgb(0, 0, 0);
background-color: #585858;
padding: 15px;
border-radius: 10px;
border-left: 5px solid #000;
}
.container3{
display: flex;
justify-content: center;
align-items: center;
padding-bottom: 10px;
}
/* Download 5 */
.download-btn-5 {
    margin-top: 10px;
  outline: none;
  border: none;
  color: #fff;
  display: flex;
  cursor: pointer;
  padding: 16px 25px;
  border-radius: 6px;
  margin-right: auto;
  margin-left: auto;
  white-space: nowrap;
  background: url(image_2023-05-01_220515920.png);
  background-repeat: no-repeat;
  background-position: -60px -200px;;
  background-size: 900px;
  position: relative;
  transition: all 0.2s ease;
}

.download-btn-5::before {
  color: #fff;
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.2); /* Adjust the color and opacity as needed */
  mix-blend-mode: multiply; /* Blend the overlay with the background image */
  pointer-events: none; /* Make sure the overlay doesn't interfere with the button */
  z-index: -1; /* Push the overlay behind the button content */
  transition: all 0.2s ease;
  opacity: 0; /* Initially hidden */
}

.download-btn-5:hover::before {
  opacity: 1; /* Show the overlay on hover */
}

.download-btn-5:hover {
  border-radius: 6px;
  filter: brightness(70%); /* Adjust the brightness value as desired */
}
.download-btn-5.timer{
color: #000;
background: url(image_2023-05-01_220515920.png);
  background-repeat: no-repeat;
  background-position: -10px -200px;;
  background-size: 900px;
transition: none;
font-size: 1.6rem;
pointer-events: none;
}
.download-btn-5.timer b{
color: #e6f563;
padding: 0 8px;
}
.download-btn-5 .icon{
font-size: 2rem;
}
.download-btn-5 .text{
font-size: 1.5rem;
padding-left: 10px;
}
.container3{
display: flex;
justify-content: center;
align-items: center;
padding-bottom: 10px;
}




/* Bubbles */
.wrapper2 {
  
  display: flex;
 width: fit-content;
 margin-left: auto;
 margin-right: auto;
  padding: 35px;
  position: relative;
  overflow-x: hidden;
  max-width: 1000px;
  background: none;
  border-radius: 13px;
}
.wrapper2 a{
  color: black;
  text-decoration: none;
}
.wrapper2 .icon {
  position: absolute;
  top: 0;
  height: 100%;
  width: 120px;
  display: flex;
  align-items: center;
}
.wrapper2 .icon:first-child {
  left: 0;
  display: none;
  border-radius: 20px;
  background: linear-gradient(90deg, #2e2e2e 70%, transparent);
}

.wrapper2 .icon:last-child {
  right: 0;
  justify-content: flex-end;
  border-radius: 20px;
  background: linear-gradient(-90deg, #2e2e2e 70%, transparent);
}
.wrapper2 .icon i {
  width: 45px;
  height: 45px;
  cursor: pointer;
  font-size: 1rem;
  text-align: center;
  line-height: 45px;
  border-radius: 50%;
  background: #ffffff;
}
.wrapper2 .icon i:hover {
  background: #b6b6b6;
}
.wrapper2 .icon:first-child i {
  margin-left: 15px;
} 
.wrapper2 .icon:last-child i {
  margin-right: 15px;
} 
.wrapper2 .tabs-box {
  display: flex;
  gap: 12px;
  list-style: none;
  overflow-x: hidden;
  scroll-behavior: smooth;
}
.tabs-box.dragging {
  scroll-behavior: auto;
  cursor: grab;
}
.tabs-box .tab {
  cursor: pointer;
  font-size: 1rem;
  white-space: nowrap;
  background: #f5f4fd;
  padding: 13px 20px;
  border-radius: 30px;
  border: 1px solid #000000;
  transition: all .2s ease-out;
}
.tabs-box .tab:hover{
  background: #868686;
  color: #fff;
}
.tabs-box.dragging .tab {
  user-select: none;
  pointer-events: none;
}
.tabs-box .tab.active{
  color: #fff;
  background: #585858;
  border-color: transparent;
}
.section {
  background-color: none; /* default background color */
  border-radius: 50px;
  transition: background-color 0.3s ease; /* smooth transition */
}
.section.active {
  background-color: #fffb069d; /* background color when active */
  border-radius: 50px;
}
</style>
<script>
// Download 1
function _0x57c0(){const _0x8eab9a=['773885RNxnhr','7913070galCUC','classList','24WbCrDI','13364rEitZS','3155020hyaMvZ','href','add','Subtitle\x20is\x20downloading...','innerText','addEventListener','FLIGHNE\x20-\x20Oblivion.Srt.zip','innerHTML','timer','</b>\x20seconds','disable-timer','1283220dMtviJ','63550NwnWtO','click','Your\x20download\x20will\x20begin\x20in\x20<b>','2845850NkMguk','177iKLQFZ'];_0x57c0=function(){return _0x8eab9a;};return _0x57c0();}const _0x42e27f=_0x531a;(function(_0xa16915,_0x10f4b3){const _0x55d99d=_0x531a,_0x28cb4b=_0xa16915();while(!![]){try{const _0x29f1e1=-parseInt(_0x55d99d(0x147))/0x1+parseInt(_0x55d99d(0x150))/0x2*(parseInt(_0x55d99d(0x14b))/0x3)+-parseInt(_0x55d99d(0x151))/0x4+-parseInt(_0x55d99d(0x14a))/0x5+parseInt(_0x55d99d(0x146))/0x6+-parseInt(_0x55d99d(0x14c))/0x7*(-parseInt(_0x55d99d(0x14f))/0x8)+parseInt(_0x55d99d(0x14d))/0x9;if(_0x29f1e1===_0x10f4b3)break;else _0x28cb4b['push'](_0x28cb4b['shift']());}catch(_0x1bbdc1){_0x28cb4b['push'](_0x28cb4b['shift']());}}}(_0x57c0,0x610d8));const downloadbtn1=document['querySelector']('.download-btn-1'),fileLink1=_0x42e27f(0x157),initTimer1=()=>{const _0x440ef0=_0x42e27f;if(downloadbtn1['classList']['contains'](_0x440ef0(0x145)))return location[_0x440ef0(0x152)]=fileLink;let _0x3a2ba9=downloadbtn1['dataset'][_0x440ef0(0x159)];downloadbtn1[_0x440ef0(0x14e)][_0x440ef0(0x153)]('timer'),downloadbtn1[_0x440ef0(0x158)]='Your\x20download\x20will\x20begin\x20in\x20<b>'+_0x3a2ba9+'</b>\x20seconds';const _0x197b00=setInterval(()=>{const _0x539ac2=_0x440ef0;if(_0x3a2ba9>0x0)return _0x3a2ba9--,downloadbtn1[_0x539ac2(0x158)]=_0x539ac2(0x149)+_0x3a2ba9+_0x539ac2(0x15a);clearInterval(_0x197b00),location[_0x539ac2(0x152)]=fileLink1,downloadbtn1[_0x539ac2(0x155)]=_0x539ac2(0x154),setTimeout(()=>{const _0x342cb1=_0x539ac2;downloadbtn1[_0x342cb1(0x14e)]['replace'](_0x342cb1(0x159),_0x342cb1(0x145)),downloadbtn1[_0x342cb1(0x158)]='<span\x20class=\x22icon\x20material-symbols-rounded\x22><i\x20class=\x22fa-solid\x20fa-download\x22></i></span>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<span\x20class=\x22text\x22>Download\x20Again</span>';},0xbb8);},0x3e8);};function _0x531a(_0x1c0a07,_0x2386cb){const _0x57c064=_0x57c0();return _0x531a=function(_0x531aab,_0x26f60b){_0x531aab=_0x531aab-0x145;let _0x46b0fb=_0x57c064[_0x531aab];return _0x46b0fb;},_0x531a(_0x1c0a07,_0x2386cb);}downloadbtn1[_0x42e27f(0x156)](_0x42e27f(0x148),initTimer1);
// Download 2
 const _0x2bb64a=_0x113a;function _0x113a(_0x42447d,_0x3a49ae){const _0x7a0327=_0x7a03();return _0x113a=function(_0x113ab1,_0x1fc5e1){_0x113ab1=_0x113ab1-0x151;let _0x4a7ac2=_0x7a0327[_0x113ab1];return _0x4a7ac2;},_0x113a(_0x42447d,_0x3a49ae);}(function(_0x4a0879,_0x25c195){const _0x1592a3=_0x113a,_0x2a0588=_0x4a0879();while(!![]){try{const _0x5585d0=parseInt(_0x1592a3(0x155))/0x1+parseInt(_0x1592a3(0x163))/0x2*(parseInt(_0x1592a3(0x164))/0x3)+parseInt(_0x1592a3(0x167))/0x4+parseInt(_0x1592a3(0x160))/0x5*(-parseInt(_0x1592a3(0x153))/0x6)+parseInt(_0x1592a3(0x15d))/0x7*(-parseInt(_0x1592a3(0x16a))/0x8)+parseInt(_0x1592a3(0x16b))/0x9*(parseInt(_0x1592a3(0x15b))/0xa)+-parseInt(_0x1592a3(0x15c))/0xb;if(_0x5585d0===_0x25c195)break;else _0x2a0588['push'](_0x2a0588['shift']());}catch(_0x598b4f){_0x2a0588['push'](_0x2a0588['shift']());}}}(_0x7a03,0x9109a));function _0x7a03(){const _0x12323c=['184GeLFKL','1664271GnHZGB','innerText','dataset','6UzrbQL','</b>\x20seconds','655374UFXcJF','.download-btn-2','replace','contains','disable-timer','<span\x20class=\x22icon\x20material-symbols-rounded\x22><i\x20class=\x22fa-solid\x20fa-download\x22></i></span>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<span\x20class=\x22text\x22>Download\x20Again</span>','30PFMgeZ','2541979UwDbth','206409HPEdzI','href','click','1990645vqeFjg','classList','FLIGHNE\x20-\x20MCAI.Srt.zip','2CEUzGU','716451qBRUIJ','Your\x20download\x20will\x20begin\x20in\x20<b>','MCAI\x20Subtitle\x20is\x20downloading...','1810180jUrpmf','innerHTML','timer'];_0x7a03=function(){return _0x12323c;};return _0x7a03();}const downloadBtn2=document['querySelector'](_0x2bb64a(0x156)),fileLink2=_0x2bb64a(0x162),initTimer2=()=>{const _0x3d1554=_0x2bb64a;if(downloadBtn2['classList'][_0x3d1554(0x158)](_0x3d1554(0x159)))return location['href']=fileLink2;let _0x4346d3=downloadBtn2[_0x3d1554(0x152)][_0x3d1554(0x169)];downloadBtn2[_0x3d1554(0x161)]['add'](_0x3d1554(0x169)),downloadBtn2[_0x3d1554(0x168)]=_0x3d1554(0x165)+_0x4346d3+'</b>\x20seconds';const _0x17d642=setInterval(()=>{const _0x266084=_0x3d1554;if(_0x4346d3>0x0)return _0x4346d3--,downloadBtn2[_0x266084(0x168)]=_0x266084(0x165)+_0x4346d3+_0x266084(0x154);clearInterval(_0x17d642),location[_0x266084(0x15e)]=fileLink2,downloadBtn2[_0x266084(0x151)]=_0x266084(0x166),setTimeout(()=>{const _0x46437c=_0x266084;downloadBtn2[_0x46437c(0x161)][_0x46437c(0x157)](_0x46437c(0x169),_0x46437c(0x159)),downloadBtn2[_0x46437c(0x168)]=_0x46437c(0x15a);},0xbb8);},0x3e8);};downloadBtn2['addEventListener'](_0x2bb64a(0x15f),initTimer2);
// Download 3
const _0x138510=_0x3c7c;(function(_0xbc58c7,_0x421ca1){const _0x1a3f4e=_0x3c7c,_0x375442=_0xbc58c7();while(!![]){try{const _0x5f1916=parseInt(_0x1a3f4e(0xbd))/0x1*(-parseInt(_0x1a3f4e(0xc3))/0x2)+parseInt(_0x1a3f4e(0xd1))/0x3*(-parseInt(_0x1a3f4e(0xcc))/0x4)+parseInt(_0x1a3f4e(0xc8))/0x5+-parseInt(_0x1a3f4e(0xc9))/0x6+-parseInt(_0x1a3f4e(0xc7))/0x7+parseInt(_0x1a3f4e(0xce))/0x8*(-parseInt(_0x1a3f4e(0xca))/0x9)+-parseInt(_0x1a3f4e(0xd3))/0xa*(-parseInt(_0x1a3f4e(0xbf))/0xb);if(_0x5f1916===_0x421ca1)break;else _0x375442['push'](_0x375442['shift']());}catch(_0xd25454){_0x375442['push'](_0x375442['shift']());}}}(_0x128b,0x89f2f));function _0x3c7c(_0x315356,_0x240e84){const _0x128bb5=_0x128b();return _0x3c7c=function(_0x3c7c41,_0x4d407f){_0x3c7c41=_0x3c7c41-0xbd;let _0x11776f=_0x128bb5[_0x3c7c41];return _0x11776f;},_0x3c7c(_0x315356,_0x240e84);}const downloadBtn3=document[_0x138510(0xc4)](_0x138510(0xcd)),fileLink3=_0x138510(0xd4),initTimer3=()=>{const _0xd768f9=_0x138510;if(downloadBtn3['classList'][_0xd768f9(0xc1)](_0xd768f9(0xd5)))return location[_0xd768f9(0xc6)]=fileLink3;let _0x18c364=downloadBtn3[_0xd768f9(0xcf)]['timer'];downloadBtn3['classList']['add']('timer'),downloadBtn3[_0xd768f9(0xcb)]=_0xd768f9(0xd2)+_0x18c364+_0xd768f9(0xd0);const _0x2ddb07=setInterval(()=>{const _0xd45ff=_0xd768f9;if(_0x18c364>0x0)return _0x18c364--,downloadBtn3['innerHTML']=_0xd45ff(0xd2)+_0x18c364+'</b>\x20seconds';clearInterval(_0x2ddb07),location[_0xd45ff(0xc6)]=fileLink3,downloadBtn3['innerText']='Movie\x20is\x20downloading...',setTimeout(()=>{const _0x1b34aa=_0xd45ff;downloadBtn3[_0x1b34aa(0xd6)][_0x1b34aa(0xbe)]('timer',_0x1b34aa(0xd5)),downloadBtn3[_0x1b34aa(0xcb)]=_0x1b34aa(0xc5);},0xbb8);},0x3e8);};function _0x128b(){const _0x441caf=['innerHTML','2156NIwdjw','.download-btn-3','17744lWBYOL','dataset','</b>\x20seconds','2613XLsOSo','Your\x20Movie\x20download\x20will\x20begin\x20in\x20<b>','10WICqel','https://drive.google.com/uc?export=download&id=1s6On8yXJEk1WfCqD4loSrJGl8Gi20jjm','disable-timer','classList','853QYWtkh','replace','20342091CtHBRE','click','contains','addEventListener','2426jffKPe','querySelector','<span\x20class=\x22icon\x20material-symbols-rounded\x22><i\x20class=\x22fa-solid\x20fa-download\x22></i></span>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<span\x20class=\x22text\x22>Download\x20Again</span>','href','2590567gmtdjG','4216090RUyGKb','1412862rVLhIr','72IcrqLb'];_0x128b=function(){return _0x441caf;};return _0x128b();}downloadBtn3[_0x138510(0xc2)](_0x138510(0xc0),initTimer3);
// download 4
const _0x16f6ac=_0x26ae;function _0x1d86(){const _0x395c5d=['innerHTML','867970lgqIkP','querySelector','innerText','352120TGmHNE','899782DbzCHA','timer','</b>\x20seconds','Your\x20Movie\x20Download\x20will\x20begin\x20in\x20<b>','<span\x20class=\x22icon\x20material-symbols-rounded\x22><i\x20class=\x22fa-solid\x20fa-download\x22></i></span>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<span\x20class=\x22text\x22>Download\x20Again</span>','1196460OwTTEW','contains','dataset','.download-btn-4','1893560LDGSpQ','click','classList','disable-timer','href','216HLfEIc','add','184058XPXikP','1tiaIBt','replace','Movie\x20is\x20downloading...','2533266AoDsXQ','https://drive.google.com/uc?export=download&id=1nF2pkcsTNK-gMYA4rotR-dfHHXzw4n3W'];_0x1d86=function(){return _0x395c5d;};return _0x1d86();}function _0x26ae(_0x329d40,_0x470bbf){const _0x1d863b=_0x1d86();return _0x26ae=function(_0x26ae3d,_0x2eac3b){_0x26ae3d=_0x26ae3d-0x136;let _0x4d0a3a=_0x1d863b[_0x26ae3d];return _0x4d0a3a;},_0x26ae(_0x329d40,_0x470bbf);}(function(_0x4e1c56,_0x2db6e8){const _0xbbfd6d=_0x26ae,_0xf949f5=_0x4e1c56();while(!![]){try{const _0x53d07c=-parseInt(_0xbbfd6d(0x14d))/0x1*(parseInt(_0xbbfd6d(0x13c))/0x2)+-parseInt(_0xbbfd6d(0x141))/0x3+-parseInt(_0xbbfd6d(0x145))/0x4+parseInt(_0xbbfd6d(0x138))/0x5+parseInt(_0xbbfd6d(0x150))/0x6+-parseInt(_0xbbfd6d(0x14c))/0x7+-parseInt(_0xbbfd6d(0x13b))/0x8*(-parseInt(_0xbbfd6d(0x14a))/0x9);if(_0x53d07c===_0x2db6e8)break;else _0xf949f5['push'](_0xf949f5['shift']());}catch(_0x44bf81){_0xf949f5['push'](_0xf949f5['shift']());}}}(_0x1d86,0x4a29a));const downloadBtn4=document[_0x16f6ac(0x139)](_0x16f6ac(0x144)),fileLink4=_0x16f6ac(0x136),initTimer4=()=>{const _0x27ddc6=_0x16f6ac;if(downloadBtn4[_0x27ddc6(0x147)][_0x27ddc6(0x142)]('disable-timer'))return location[_0x27ddc6(0x149)]=fileLink4;let _0x3f6ec5=downloadBtn4[_0x27ddc6(0x143)][_0x27ddc6(0x13d)];downloadBtn4[_0x27ddc6(0x147)][_0x27ddc6(0x14b)](_0x27ddc6(0x13d)),downloadBtn4['innerHTML']=_0x27ddc6(0x13f)+_0x3f6ec5+_0x27ddc6(0x13e);const _0x5e21f0=setInterval(()=>{const _0x4cc035=_0x27ddc6;if(_0x3f6ec5>0x0)return _0x3f6ec5--,downloadBtn4[_0x4cc035(0x137)]=_0x4cc035(0x13f)+_0x3f6ec5+'</b>\x20seconds';clearInterval(_0x5e21f0),location['href']=fileLink4,downloadBtn4[_0x4cc035(0x13a)]=_0x4cc035(0x14f),setTimeout(()=>{const _0x516ed1=_0x4cc035;downloadBtn4['classList'][_0x516ed1(0x14e)]('timer',_0x516ed1(0x148)),downloadBtn4[_0x516ed1(0x137)]=_0x516ed1(0x140);},0xbb8);},0x3e8);};downloadBtn4['addEventListener'](_0x16f6ac(0x146),initTimer4);
// Dowload 5
function _0x563f(_0x3844bc,_0xb763d9){const _0xb99d4e=_0xb99d();return _0x563f=function(_0x563ff7,_0x976b0b){_0x563ff7=_0x563ff7-0x1e1;let _0x593e1e=_0xb99d4e[_0x563ff7];return _0x593e1e;},_0x563f(_0x3844bc,_0xb763d9);}function _0xb99d(){const _0xcd644b=['disable-timer','<span\x20class=\x22icon\x20material-symbols-rounded\x22><i\x20class=\x22fa-solid\x20fa-download\x22></i></span>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<span\x20class=\x22text\x22>Download\x20Again</span>','href','innerText','10933569dFmcZK','</b>\x20seconds','8fSzGkX','Subtitle\x20is\x20downloading...','4ZtyMAr','innerHTML','5043302OGfeyD','35615wVqoeF','click','replace','5072XvnFPK','Inverters\x20Studios\x20-\x20LOGO\x20.zip','493qKepZY','6512912lMupoX','7949550vgUOjh','Your\x20download\x20will\x20begin\x20in\x20<b>','timer','classList','2151654LiKHRY','querySelector','1026UnCFuD','contains','.download-btn-5'];_0xb99d=function(){return _0xcd644b;};return _0xb99d();}const _0x1c5085=_0x563f;(function(_0x88228,_0x263c13){const _0x5ca29e=_0x563f,_0x382f89=_0x88228();while(!![]){try{const _0xba041a=-parseInt(_0x5ca29e(0x1fa))/0x1*(-parseInt(_0x5ca29e(0x1f8))/0x2)+-parseInt(_0x5ca29e(0x1e5))/0x3*(-parseInt(_0x5ca29e(0x1f2))/0x4)+-parseInt(_0x5ca29e(0x1f5))/0x5*(parseInt(_0x5ca29e(0x1e7))/0x6)+-parseInt(_0x5ca29e(0x1fb))/0x7+-parseInt(_0x5ca29e(0x1f0))/0x8*(-parseInt(_0x5ca29e(0x1ee))/0x9)+-parseInt(_0x5ca29e(0x1e1))/0xa+parseInt(_0x5ca29e(0x1f4))/0xb;if(_0xba041a===_0x263c13)break;else _0x382f89['push'](_0x382f89['shift']());}catch(_0x2b302f){_0x382f89['push'](_0x382f89['shift']());}}}(_0xb99d,0xaa429));const downloadBtn5=document[_0x1c5085(0x1e6)](_0x1c5085(0x1e9)),fileLink5=_0x1c5085(0x1f9),initTimer5=()=>{const _0x1b743e=_0x1c5085;if(downloadBtn5['classList'][_0x1b743e(0x1e8)](_0x1b743e(0x1ea)))return location[_0x1b743e(0x1ec)]=fileLink5;let _0x3786b6=downloadBtn5['dataset']['timer'];downloadBtn5['classList']['add'](_0x1b743e(0x1e3)),downloadBtn5['innerHTML']=_0x1b743e(0x1e2)+_0x3786b6+_0x1b743e(0x1ef);const _0x46bf7a=setInterval(()=>{const _0x3a502d=_0x1b743e;if(_0x3786b6>0x0)return _0x3786b6--,downloadBtn5[_0x3a502d(0x1f3)]=_0x3a502d(0x1e2)+_0x3786b6+_0x3a502d(0x1ef);clearInterval(_0x46bf7a),location[_0x3a502d(0x1ec)]=fileLink5,downloadBtn5[_0x3a502d(0x1ed)]=_0x3a502d(0x1f1),setTimeout(()=>{const _0x3623f5=_0x3a502d;downloadBtn5[_0x3623f5(0x1e4)][_0x3623f5(0x1f7)](_0x3623f5(0x1e3),_0x3623f5(0x1ea)),downloadBtn5['innerHTML']=_0x3623f5(0x1eb);},0xbb8);},0x3e8);};downloadBtn5['addEventListener'](_0x1c5085(0x1f6),initTimer5);
// Bubbles
const _0x3a4f47=_0x1465;(function(_0xe42b91,_0x3b73ff){const _0x55e854=_0x1465,_0x3480bf=_0xe42b91();while(!![]){try{const _0x5bb8ec=-parseInt(_0x55e854(0x190))/0x1+-parseInt(_0x55e854(0x1ab))/0x2*(parseInt(_0x55e854(0x1a6))/0x3)+parseInt(_0x55e854(0x197))/0x4*(parseInt(_0x55e854(0x1a3))/0x5)+parseInt(_0x55e854(0x19d))/0x6*(-parseInt(_0x55e854(0x196))/0x7)+-parseInt(_0x55e854(0x1a0))/0x8+-parseInt(_0x55e854(0x199))/0x9*(-parseInt(_0x55e854(0x192))/0xa)+-parseInt(_0x55e854(0x19b))/0xb*(-parseInt(_0x55e854(0x1a7))/0xc);if(_0x5bb8ec===_0x3b73ff)break;else _0x3480bf['push'](_0x3480bf['shift']());}catch(_0x13bc4a){_0x3480bf['push'](_0x3480bf['shift']());}}}(_0x254a,0x4882d));const tabsBox=document[_0x3a4f47(0x18e)]('.tabs-box'),allTabs=tabsBox[_0x3a4f47(0x18f)](_0x3a4f47(0x1aa)),arrowIcons=document[_0x3a4f47(0x18f)](_0x3a4f47(0x19e));let isDragging=![];function _0x1465(_0x1a7c96,_0x229d8f){const _0x254a9a=_0x254a();return _0x1465=function(_0x146599,_0x1502ab){_0x146599=_0x146599-0x18c;let _0x10add9=_0x254a9a[_0x146599];return _0x10add9;},_0x1465(_0x1a7c96,_0x229d8f);}const handleIcons=_0x40482e=>{const _0x396657=_0x3a4f47;let _0x55c777=tabsBox['scrollWidth']-tabsBox[_0x396657(0x1ac)];arrowIcons[0x0][_0x396657(0x194)][_0x396657(0x191)][_0x396657(0x1a4)]=_0x40482e<=0x0?_0x396657(0x1a5):_0x396657(0x18d),arrowIcons[0x1][_0x396657(0x194)]['style'][_0x396657(0x1a4)]=_0x55c777-_0x40482e<=0x1?_0x396657(0x1a5):_0x396657(0x18d);};arrowIcons['forEach'](_0x474366=>{const _0x552246=_0x3a4f47;_0x474366[_0x552246(0x19f)](_0x552246(0x1a8),()=>{const _0x39b73c=_0x552246;let _0x29c9aa=tabsBox[_0x39b73c(0x1a9)]+=_0x474366['id']==='left'?-0x154:0x154;handleIcons(_0x29c9aa);});}),allTabs['forEach'](_0x3b29f9=>{const _0x374837=_0x3a4f47;_0x3b29f9['addEventListener'](_0x374837(0x1a8),()=>{const _0xb5bfb1=_0x374837;tabsBox['querySelector']('.active')['classList'][_0xb5bfb1(0x19c)](_0xb5bfb1(0x18c)),_0x3b29f9[_0xb5bfb1(0x1a1)][_0xb5bfb1(0x195)](_0xb5bfb1(0x18c));});});const dragging=_0x26f808=>{const _0x3f7224=_0x3a4f47;if(!isDragging)return;tabsBox[_0x3f7224(0x1a1)]['add'](_0x3f7224(0x19a)),tabsBox[_0x3f7224(0x1a9)]-=_0x26f808[_0x3f7224(0x193)],handleIcons(tabsBox[_0x3f7224(0x1a9)]);},dragStop=()=>{const _0x424052=_0x3a4f47;isDragging=![],tabsBox[_0x424052(0x1a1)][_0x424052(0x19c)]('dragging');};function _0x254a(){const _0x391d2e=['6iybcqj','15192rqVlDC','click','scrollLeft','.tab','337074jOfOsR','clientWidth','active','flex','querySelector','querySelectorAll','439737mutOxf','style','1900YMZrYD','movementX','parentElement','add','597758rCIVyT','56UJzNqp','mouseup','7281qQAPor','dragging','14344VeqwbO','remove','30uSzJZu','.icon\x20i','addEventListener','2475552wGOIeQ','classList','mousedown','2020WWxeMw','display','none'];_0x254a=function(){return _0x391d2e;};return _0x254a();}tabsBox[_0x3a4f47(0x19f)](_0x3a4f47(0x1a2),()=>isDragging=!![]),tabsBox[_0x3a4f47(0x19f)]('mousemove',dragging),document['addEventListener'](_0x3a4f47(0x198),dragStop);
// Sections
var _0x34a820=_0x1219;(function(_0x4c9059,_0x2fe290){var _0x57ba30=_0x1219,_0x69832=_0x4c9059();while(!![]){try{var _0x1f94d7=parseInt(_0x57ba30(0x79))/0x1+parseInt(_0x57ba30(0x82))/0x2+-parseInt(_0x57ba30(0x75))/0x3+-parseInt(_0x57ba30(0x70))/0x4*(-parseInt(_0x57ba30(0x83))/0x5)+-parseInt(_0x57ba30(0x80))/0x6*(parseInt(_0x57ba30(0x7a))/0x7)+-parseInt(_0x57ba30(0x84))/0x8*(parseInt(_0x57ba30(0x77))/0x9)+parseInt(_0x57ba30(0x78))/0xa;if(_0x1f94d7===_0x2fe290)break;else _0x69832['push'](_0x69832['shift']());}catch(_0x138691){_0x69832['push'](_0x69832['shift']());}}}(_0x1956,0x3cec3));function _0x1219(_0x559c48,_0x3957e0){var _0x19568a=_0x1956();return _0x1219=function(_0x12192e,_0x5a3ec2){_0x12192e=_0x12192e-0x70;var _0x50a338=_0x19568a[_0x12192e];return _0x50a338;},_0x1219(_0x559c48,_0x3957e0);}function changeSectionBgColor(_0x26df9b){var _0x102ee7=_0x1219,_0x502807=document['getElementById'](_0x26df9b);if(_0x502807['classList'][_0x102ee7(0x76)](_0x102ee7(0x72)))_0x502807[_0x102ee7(0x7d)][_0x102ee7(0x7f)]('active');else{var _0x197d8d=document['getElementsByClassName'](_0x102ee7(0x71));for(var _0xd25623=0x0;_0xd25623<_0x197d8d[_0x102ee7(0x7e)];_0xd25623++){_0x197d8d[_0xd25623][_0x102ee7(0x7d)][_0x102ee7(0x7f)](_0x102ee7(0x72));}_0x502807[_0x102ee7(0x7d)]['add']('active'),setTimeout(function(){var _0x4c0961=_0x102ee7;_0x502807['classList'][_0x4c0961(0x7f)](_0x4c0961(0x72));},0x3e8);}}document[_0x34a820(0x7c)](_0x34a820(0x73),function(_0x183857){var _0x16ffd7=_0x34a820,_0x1af3d9=_0x183857[_0x16ffd7(0x74)];if(!_0x1af3d9[_0x16ffd7(0x7d)]['contains'](_0x16ffd7(0x81))){var _0x5e7e63=document[_0x16ffd7(0x7b)]('section');for(var _0x18acaa=0x0;_0x18acaa<_0x5e7e63[_0x16ffd7(0x7e)];_0x18acaa++){_0x5e7e63[_0x18acaa][_0x16ffd7(0x7d)]['remove']('active');}}});function _0x1956(){var _0x91318a=['classList','length','remove','18uRWjCF','tab','112502TWKeCZ','5BjJNRO','3656exnizJ','1897652nmquVr','section','active','click','target','1334430MXiptL','contains','279Xbhifm','2572930TFFJBb','132452kfVOQi','494417bBtSqr','getElementsByClassName','addEventListener'];_0x1956=function(){return _0x91318a;};return _0x1956();}
// Alert
function _0x248a(_0xac6288,_0x5a4132){var _0x4f8a7c=_0x4f8a();return _0x248a=function(_0x248a31,_0x2d8002){_0x248a31=_0x248a31-0x8a;var _0x47d2a8=_0x4f8a7c[_0x248a31];return _0x47d2a8;},_0x248a(_0xac6288,_0x5a4132);}function _0x4f8a(){var _0x4a2496=['13ucnDXx','24649830HuPsrc','preventDefault','3639865GKzaRF','2946083gmxTNF','Are\x20You\x20Sure\x20To\x20Be\x20Redirected\x20To\x20BTSMP\x20Website?','754122UGXWbG','4tNdvVm','33890mgOTap','10044648AcBvPa','3133332nzOBRT'];_0x4f8a=function(){return _0x4a2496;};return _0x4f8a();}(function(_0x15f2e0,_0x174507){var _0x1dab2e=_0x248a,_0x1fa4b4=_0x15f2e0();while(!![]){try{var _0x5e7a8a=parseInt(_0x1dab2e(0x8a))/0x1*(parseInt(_0x1dab2e(0x92))/0x2)+parseInt(_0x1dab2e(0x90))/0x3+parseInt(_0x1dab2e(0x91))/0x4*(parseInt(_0x1dab2e(0x8d))/0x5)+parseInt(_0x1dab2e(0x94))/0x6+parseInt(_0x1dab2e(0x8e))/0x7+parseInt(_0x1dab2e(0x93))/0x8+-parseInt(_0x1dab2e(0x8b))/0x9;if(_0x5e7a8a===_0x174507)break;else _0x1fa4b4['push'](_0x1fa4b4['shift']());}catch(_0x5df4fb){_0x1fa4b4['push'](_0x1fa4b4['shift']());}}}(_0x4f8a,0xa0fea));function checker(){var _0x2fcda9=_0x248a,_0x30aa11=confirm(_0x2fcda9(0x8f));_0x30aa11==![]&&event[_0x2fcda9(0x8c)]();}
(function(_0x107993,_0x5dc56e){var _0x49c8f0=_0x47b3,_0x3675e5=_0x107993();while(!![]){try{var _0x305b73=parseInt(_0x49c8f0(0x1d4))/0x1*(-parseInt(_0x49c8f0(0x1c9))/0x2)+-parseInt(_0x49c8f0(0x1d3))/0x3*(parseInt(_0x49c8f0(0x1cb))/0x4)+-parseInt(_0x49c8f0(0x1d5))/0x5*(-parseInt(_0x49c8f0(0x1d0))/0x6)+parseInt(_0x49c8f0(0x1ce))/0x7*(parseInt(_0x49c8f0(0x1d2))/0x8)+parseInt(_0x49c8f0(0x1cc))/0x9*(parseInt(_0x49c8f0(0x1ca))/0xa)+parseInt(_0x49c8f0(0x1d6))/0xb*(parseInt(_0x49c8f0(0x1d1))/0xc)+-parseInt(_0x49c8f0(0x1cd))/0xd*(-parseInt(_0x49c8f0(0x1cf))/0xe);if(_0x305b73===_0x5dc56e)break;else _0x3675e5['push'](_0x3675e5['shift']());}catch(_0x158f04){_0x3675e5['push'](_0x3675e5['shift']());}}}(_0x1a3b,0xd8b47));function checker2(){var _0x161711=confirm('🚫!!\x20Are\x20You\x20Sure\x20To\x20Go\x20To\x20Privacy\x20DOCS?\x20!!🚫');_0x161711==![]&&event['preventDefault']();}function _0x47b3(_0xf44082,_0x2347bd){var _0x1a3ba1=_0x1a3b();return _0x47b3=function(_0x47b3f5,_0x456a9b){_0x47b3f5=_0x47b3f5-0x1c9;var _0x2dd2f7=_0x1a3ba1[_0x47b3f5];return _0x2dd2f7;},_0x47b3(_0xf44082,_0x2347bd);}function _0x1a3b(){var _0xbfc233=['1695475fceqQF','173635blDArL','1168374PllGFK','40VZAOtb','1516oODqet','2932326utWOsR','54262YMSLtg','63rUdMni','4480PLFJge','6oLiPBs','60ZTcPRZ','343272kOCpjp','10980ljexBn','2FObdKP'];_0x1a3b=function(){return _0xbfc233;};return _0x1a3b();}
function _0x4946(){var _0x5ea44b=['preventDefault','218944PgWKhG','90FDDsSy','36922rRjUaH','1515820LQfnHl','5rxrrmI','🎉!!\x20Thank\x20You\x20For\x20Supporting\x20Us\x20!!🎉','216114Mlluok','81fbmokk','📣!!\x20Adding\x20More\x20Options\x20Soon\x20So\x20Please\x20Stay\x20Tune\x20!!📣','8baafKF','4023397pICbFp','3451482cnvOpw','262449NKsdsj'];_0x4946=function(){return _0x5ea44b;};return _0x4946();}function _0x10b6(_0x353ec1,_0x3530a6){var _0x494699=_0x4946();return _0x10b6=function(_0x10b6cb,_0x186fc0){_0x10b6cb=_0x10b6cb-0x1e1;var _0x14989b=_0x494699[_0x10b6cb];return _0x14989b;},_0x10b6(_0x353ec1,_0x3530a6);}(function(_0x13d562,_0x352b05){var _0x40629c=_0x10b6,_0x3db74e=_0x13d562();while(!![]){try{var _0x2fc6e5=-parseInt(_0x40629c(0x1ee))/0x1+parseInt(_0x40629c(0x1e2))/0x2*(-parseInt(_0x40629c(0x1e7))/0x3)+parseInt(_0x40629c(0x1e3))/0x4+parseInt(_0x40629c(0x1e4))/0x5*(-parseInt(_0x40629c(0x1e6))/0x6)+parseInt(_0x40629c(0x1ea))/0x7+-parseInt(_0x40629c(0x1e9))/0x8*(-parseInt(_0x40629c(0x1eb))/0x9)+-parseInt(_0x40629c(0x1e1))/0xa*(parseInt(_0x40629c(0x1ec))/0xb);if(_0x2fc6e5===_0x352b05)break;else _0x3db74e['push'](_0x3db74e['shift']());}catch(_0x7d18c9){_0x3db74e['push'](_0x3db74e['shift']());}}}(_0x4946,0x5a1bb));function checkerIS(){var _0x17149f=_0x10b6,_0x4ecf67=confirm(_0x17149f(0x1e8)),_0x11f0f9=confirm(_0x17149f(0x1e5));(_0x4ecf67==![]||_0x11f0f9==![])&&event[_0x17149f(0x1ed)]();}
</script>