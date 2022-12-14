<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <title>Forsit Management System</title>
  <link rel="stylesheet" href="css/style.css" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&family=Orbitron:wght@400;800&display=swap');

  body{
    font-family: 'Lobster Two', cursive;
    font-family: 'Orbitron', sans-serif;
    background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);

  }
  h1{
    font-family: 'Lobster Two', cursive;
    font-family: 'Orbitron', sans-serif;
    background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);
  }
  h2{
    font-family: 'Lobster Two', cursive;
    font-family: 'Orbitron', sans-serif;
    
  }

  </style>
</head>
<body>
 <div class="top-container">
   <nav>
     <ul class="menu">
       <li><a href="index.php" class="active">Home</a></li>
       <li><a href="adminLogin.php">Admin</a></li>
       <li><a href="UserLogin.php">User LogIn</a></li>
       <li><a href="lawyerLogin.php">Lawyer LogIn</a></li>
     </ul>
   </nav>
   <img class="top-cloud" src="asset/cloud.png" alt="cloud">
   <h1>Welcome TO Forseti Management System
   </h1>
   <p>
   <h2><span>A simple and secure platform for Lawyer And Client negotiation</span></h2>
   </p>
   <img class="bottom-cloud" src="asset/cloud.png" alt="cloud">
   <img src="asset/lawyerlogo.png" alt="logo">
 </div>
 <div class="middle-container">
   <div class="profile">
     <img class="aditto" src="asset/lawjustice.jpg" alt="">
     <h2>Hello.</h2>
     <p class="intro">My name is Saify </p>
   </div>
   <hr>
   <div class="skills">
     <h2>Registration Section</h2>
     <div class="skill-row">
       <img class="skill1" src="asset/computer.png" alt="driving">
       <h3 class="header-skill"><a href="lawyerRegistration.php">Lawyer Registration</a></h3>
       <p class="skill-desc">Loawyers with credible LLB degree and fulfillment of all requirement can register here</p>
     </div>
     <div class="skill-row">
       <img class="skill2" src="asset/chillies.png" alt="chillies">
       <h3 class="header-skill"><a href="UserRegistration.php">User Registration</a></h3>
       <p class="skill-desc"> All new Users,Register Here.This website will give you the ease of access and the facility to customise your own services in custom made dashboards</p>
     </div>
   </div>
   <hr>
   <div class="contact-me">
     <h2>Get In Touch</h2>
     <h3>During any convenience , we are with you</h3>
     <p class="contact-msg">Do not fear  because Saify is Here.</p>
     <a class="btn" href="mailto:name@email.com">CONTACT US</a>
   </div>
 </div>


 <div class="bottom-container">
   <a class="footer-link" href="https://www.linkedin.com/">LinkedIn</a>
   <a class="footer-link" href="https://twitter.com/">Twitter</a>
   <a class="footer-link" href="">Newsletter</a>
   <p class="copyright">??2022 lokosavik.</p>
 </div>

</body>

</html>
