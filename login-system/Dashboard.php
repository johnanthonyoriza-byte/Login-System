<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html>
a
  <style>
    body {
      margin: 0;
      background-image:url(background.jpg);
	  background-size: cover;
      font-family: Candara;
	  

    }

     nav {
      background-color: #99CCFF;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 60px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-weight: bold;
      padding: 0 40px;
      box-sizing: border-box;
	  z-index: 1000;

    }
	
	.nav-left{
	color: white;
	}
	
	.nav-right a{
	color:white;
	padding: 5px;
	}
	
	.dropdown {
	  display:flex
	  display: grid;
	  shape-outside;
	  position: static;
      position: relative;
      display: inline-block;
	  
    }

    .dropbtn {
	  color: white;
      background-color: transparent;
      border: none;
      cursor: pointer;
      font-weight: bold;
      font-size: 16px;
    }

   
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px rgba(0,0,0,0.6);
      border-radius: 8px;
    }

    .dropdown-content a {
      color: black;
      padding: 20px 16px;
      text-decoration: none;
      display: block;
	  background-color: white;
    }

    .dropdown-content a:hover {
      background-color: #FFCCCC;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }




    .image-section {

	  display: center;
	  width: 86.05;
      text-align: center;
	  gap: 40px;
      padding: 100px; 
      margin-top: -20px; 
	  margin-bottom: 5px;
	  background-size: cover;
    }

    .image-section img {
	  height: 400px;
      width: 700px;
      max-width: 90%;
      border-radius: 20px;
	  center: 1;
    }
	


	figcaption{
	font-family: Candara;
	color: #FF9999;
	font-weight: bold;
	font-size: 30px;
	margin-top: -10px;
	margin-bottom: -135px;
	}
	
	.description{
	color: #9999CC;
	font-family: georgia;
	text-align: center;
	font-size: 30px;
	}
	
	.paragraph{
	max-width: 600px;
	font-family: rocckwell;
	margin-top: -30px;
	margin-bottom: 20px;
	font-size: 20px;
	}
	
	.boogeraids{
	margin-top: 150px;
	}
	
	
	
	
  </style>
</head>

<body>




  <nav>
    <div class="nav-left">SEVENTEEN</div>
    <div class="nav-right">
      <div class="dropdown">
        <button class="dropbtn">Socials ▾</button>
        <div class="dropdown-content">
          <a href="https://www.instagram.com/saythename_17" target="_blank">Instagram</a>
          <a href="https://x.com/pledis_17" target="_blank">Twitter</a>
          <a href="https://youtube.com/seventeen" target="_blank">YouTube</a>
		  <a href="https://open.spotify.com/artist/7nqOGRxlXj7N2JYbgNEjYH" target="_blank">Spotify</a>
        </div>
      </div>
	  
      <a href="webpage4.html">Info</a>
      <a href="webdev.html">About us</a>
	  <a href="Webpage5.html">Albums</a>
	  <a href="Documentation.html">Documentation</a>
    </div>
  </nav>
  
  
    <center>
    <div class="image-section">
    
    <div>
      <img src="seventeengroup.jpg">
      <figcaption>Annyeonghaseyo! SEVENTEEN imnida! 𐔌՞꜆. ̫.꜀՞𐦯 </figcaption>
    </div>

  
    </div>
	
	
	<p class="description">Welcome to our world!</p><br>
	<p class="paragraph"> A place you can run to when you’re tired and exhausted. We won’t let go of your hand — we are together always. So stay here with us, we’ll make your day bright and light each other up.
	<br> <br>More  <a href="webpage4.html" target="_blank">Here</a><br> <br>
When you’re with us, life is Aju Nice. 🩷🩵 </p>
	<p class="boogeraids"> ˙⋆✮ Website by Team Loonar .𖥔 ݁ ˖ </p>



</body>
</html>