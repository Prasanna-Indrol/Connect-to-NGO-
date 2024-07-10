<!DOCTYPE html>
<html>
  <head>
    <title>Feed Type Page</title>
    
<style>
body {
  font-family: Arial, sans-serif;
  background: linear-gradient(rgb(187, 222, 227),rgb(255, 255, 255));
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

h1 {
  text-align: center;
}

.post {
  background-color: #f5f5f5;
  border: 1px solid #ddd;
  margin-bottom: 20px;
  padding: 20px;
}

.post h2 {
  margin-top: 0;
}

.post p {
  margin-bottom: 0;
}

#sideNavname{

  padding-top: 35%;
  margin-left: -15%;

}
#sideNav{
  width: 150px;
  height: 100vh;
  position: fixed;
  right: -250px;
  top: 0;
  background:linear-gradient(rgb(187, 222, 227),rgb(255, 255, 255));
  z-index: 2;
  transition: 0.5s;
}
nav ul li {
  list-style: none;
  margin: 50px 20px;
}
nav ul li a{
  text-decoration: none;
  color: black;
}
#menuBtn{
width: 40px;
height: 40px;
background: transparent;
text-align: center;
position: fixed;
right: 20px;
top: 20px;
border-radius: 3px;
z-index: 3;
cursor: pointer;
}
#menuBtn img{
width: 28px;
margin-top: 23px;
mix-blend-mode:screen;

}
#plusbtn{

  color: transparent;
  width: -50%;
  height: -50%;
}
#plusbtn img{
  width:20px;
  margin-bottom: 23px;
  mix-blend-mode:screen;
}

</style>
  </head>
  <body>
<form method="post" action ="feed.php">
    <div class="container">
      <b><h1>Posted Problems</h1></b><br>
      
       <?php
        include "connecting.php";
       session_start();
       $user;
       $user=$_SESSION['username'];
       echo $user;
       $query="SELECT * FROM problems LIMIT 100 OFFSET 1;";
       $result=mysqli_query($connect,$query);
       echo "<br>".$query;
            while($row=mysqli_fetch_assoc($result));
            
            { 
                echo "<div class='post' name='s1'>";
                echo "<h1>".$row['p_title']."</h1>";
                echo "<p>".$row['p_description']."</p>";
                echo "</div>";
            }
      
       ?>
    
      </div><br>
      <div class="post">
        <h2>Water problem near Undri</h2>
        <p>Post Content goes here...</p>
      </div><br>
      <div class="post">
        <h2>Pothholes problem near dhayari</h2>
        <p>Post Content goes here...</p>
      </div><br>
	<div class="post">
        <h2>Deforesting near kothrud</h2>
        <p>Post Content goes here...</p>
      </div><br>
		<div class="post">
        <h2>Child labour Problem near kandiwali</h2>
        <p>Post Content goes here...</p>
      </div><br>
		<div class="post">
        <h2>Litering Problem near bopdev ghaat</h2>
        <p>Post Content goes here...</p>
      </div><br>
		<div class="post">
        <h2>Pothholes problem near hadapsar</h2>
        <p>Post Content goes here...</p>
      </div><br>
		<div class="post">
        <h2>Road Problem near shivaji nagar </h2>
        <p>Post Content goes here...</p>
      </div><br>
		<div class="post">
        <h2>Water Pollution near dandekar</h2>
        <p>Post Content goes here...</p>
      </div><br>
		<div class="post">
        <h2>Pot Holes near karve raod</h2>
        <p>Post Content goes here...</p>
      </div><br>
      <div class="post">
        <h2>Dead Stray Dog near karve raod</h2>
        <p>Post Content goes here...</p>
      </div><br>
      <div class="post">
        <h2>Noise Pollution near Model colony</h2>
        <p>Post Content goes here...</p>
      </div>
    </div>

<div id="sideNav">
      <nav>
        <div id="sideNavname">
      <ul>
         <li>  <a href="main page1.html">HOME</a> </li>
          <li> <a href="Features.html">FEATURES</a> </li>
          <li> <a href="problemfeed.php">POST PROBLEM</a> </li>
          <li> <a href=""></a> CONTACT US</li>
      </ul>
      </nav>
      </div>
  </div>
  <div id="menuBtn">
      <img src="menu1.jpg" id="menu">
  </div>
  
  <script>
      var menuBtn = document.getElementById("menuBtn")
      var sideNav = document.getElementById("sideNav")
      var menu = document.getElementById("menu")
  
      sideNav.style.right = "-250px"; 
  
      menuBtn.onclick = function(){
          if(sideNav.style.right == "-250px"){
              sideNav.style.right = "0";
              menu.src = "cross.jpg";
          }
          else{
              sideNav.style.right = "-250px";
              menu.src = "menu1.jpg";
          }
      }
     </script>
</form>
  </body>
</html>



