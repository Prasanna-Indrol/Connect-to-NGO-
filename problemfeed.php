<div class="about-section">
    <link rel="stylesheet" href="Problem feed5.css">
    <!doctype html>

<html>
<head>
    <title>ngoregister</title>
    <style>
      textarea{
        resize:none;
        width : 700px;
      }
      
      #filename{

        height: 100%;
        width: 100%;
      }
      h3{

        margin-right: 59%;
       
      }
      
      *{
    
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
    background-color: transparent;
    

  }

h3{
  font-size: 40px;
}
  .row {
    display: flex;
    flex-wrap: wrap;
  }
  .row h1 {
    width: 100%;
    text-align: center;
    font-size: 3.75em;
    margin: 0.6em 0;
    font-weight: 600;
    color: black;
  }
 
  
    /*.card .icon {
    font-size: 2.5em;
    height: 2em;
    width: 2em;
    margin: auto;
    background-color: rgb(255, 255, 255);
    display: grid;
    place-items: center;
    border-radius: 50%;
    color: black;
  }
  .icon:before {
    position: absolute;
    content: "";
    height: 1.8em;
    width: 1.8em;
    border: 0.12em solid  rgb(28, 28, 28) ;
    border-radius: 50%;
    transition: 0.5s;
  }*/
  

  
  .submit-btn{
  		margin-bottom: 12px;
  		margin-top: -100px;
  		width: 20vw;
  		
  }
  .section .row .a .b {
  			margin-right: 0px;
  			
  }
    </style>
      
    
</head>
<body>
    <section>
        <div class="row">
          <!-- Column One -->
              <div class="icon">
                <i class="fa-solid fa-user"></i>
              </div>
              
             <h3>Post Your Problems</h3> 
             <form action="problemfeed.php" method="post">
              <textarea placeholder="write the title of the problem" name="t"></textarea> 
              <textarea placeholder="write your message here" name="d"></textarea>             
              <p>
              <b><center>Upload picture:<input type ="file" id="filename" name="img"></b></center>
              </p>
                <br><br><button type="submit" class="submit-btn" name="s1"> 
                 <b>SUBMIT</b></button>
</form>
            </div>
          </div>
      
   
      </section>
    
</body>
</html>

<?php

include "connecting.php";
session_start();
$user = $_SESSION['username'];
$q="select * from public_data where userid='$user'";
$r=mysqli_query($connect,$q);
$row=mysqli_fetch_assoc($r);
$u=$row['p_id'];

echo $u;
if(isset($_POST['s1']))
{
		echo "hello";
    $title=$_POST['t'];
		$des=$_POST['d'];
		$img=$_POST['img'];
		$query = "INSERT INTO problems VALUES('$u','$title','$des','$img')";
		$result=mysqli_query($connect,$query);
    echo $result;
	
		if($result)
		{
				 echo "record inserted sucessfully<br>";
				 header("location:response.php");
		}
		else 
		{
 				echo "Error : ".$query."<br>" .$connect->error;
		}
}
		

?>
