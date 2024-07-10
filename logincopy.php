<html>
<head>
    <title>Login And Registration</title>
 
    
    
    <style> 
    
    *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
.hero{
    height: 100%;
    width: 100%;
    background: linear-gradient(rgba(0,0,0,0.5),rgb(197, 229, 235)), url("IMG.jpg"); 
    background-position: center;
    background-size: cover;
    position: absolute;
    }
.form-box{
    width: 380px;
    height: 480px;
    position: relative;
    margin: 6% auto;
    background: #fff;
    padding: 5px;
    overflow: hidden;
}
.button-box{
    width: 150px;
    height: 20px;
    margin: 35px auto;
    position: relative;
    border-radius: 30px;
    text-align: center;
}
.social-icons{
    margin: 30px auto;
    text-align: center;
}
.social-admin{
    margin: 30px auto;
    text-align: center;
    margin-top: -155;
}
.social-icons img{
    width: 200px;
    height: 100px;
    margin: -20px;
    cursor: pointer;
    border-radius: 50%;
}
.input-group{
    top: 160px;
    position: absolute;
    width: 280px;
    transition: .5s;
}
.input-field{
    width: 100%;
    padding: 10px 0;
    margin: 5px 0;
    border-left: 0;
    border-top: 0;
    border-right: 0;
    border-bottom: 1px solid #999;
    outline: none;
    background: transparent;
}
.submit-btn{
    width: 85%;
    padding: 10px 30px;
    cursor: pointer;
    display: block;
    margin: auto;
    background: linear-gradient(rgb(197, 233, 233), rgb(222, 199, 236));
    border: 0;
    outline: none;
    border-radius: 30px;
}
.submit-bt{
    width: 85%;
    padding: 10px 30px;
    cursor: pointer;
    display: block;
    margin: auto;
    background: linear-gradient(rgb(197, 233, 233), rgb(222, 199, 236));
    border: 0;
    outline: none;
    border-radius: 30px;
    margin-top: 4;
}
.chech-box{
    margin: 30px 10px 30px 0;
}
span{
    color: #777;
    font-size: 12px;
    bottom: 68px;
  /* position: absolute;*/
}
#login{
    left: 50px;
}
.error{
	color:red;
}

	 </style>
</head>
<body>
    <div class="hero">
    <div class="form-box">
    <div class="button-box">
</div> 
<div class="social-icons">
    <img src="IG.jpg " height="40" width="100">
        
</div>
<div class="social-admin">
 <img src="admin.jpg " height="70" width="100">
 </div>
<form id="login" class="input-group" action="logincopy.php" method="POST">
    <input type="text" class="input-field" placeholder=" User id " name = "user" required>
    <input type="password" class="input-field" placeholder=" Enter Password " name = "pass" required>
    <b><input type="checkbox" class="chech-box"><span>Remember Password</span></b>
<button type="submit" class="submit-btn" name="s1"><b>Log In</b></button>
<?php 
include "connecting.php";
session_start();
if(isset($_POST['s1']))
		
		{		
				$user=$_POST['user'];
				$password =$_POST['pass'];
				$sql="select * from public_data where userid='$user' and password='$password';";
				
                $result = mysqli_query($connect, $sql);
                // if (!$result) {
                //     die("Error: " . mysqli_error($connect));
                // } else {
                //     $num_rows = mysqli_num_rows($result);
                //     echo "Number of rows: " . $num_rows;
                // }

                // // Check if user exists and store user data in session
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['user_id'] = $row['p_id'];
                    $_SESSION['username'] = $row['userid'];
                    header("Location: feed.php");
                } else {
                    echo "Invalid username or password";
                }
            
                mysqli_close($conn);
				
				
			}
			
?>
<button type="submit" class="submit-bt" name="s2"><b>Log In for NGO</b></button>
<?php 
include "connecting.php";
if(isset($_POST['s2']))
		
			{	
				//echo " HELO";
				$user =$_POST['user'];
				$password =$_POST['pass'];
				$sql="select * from ngo_data where username='$user' and password='$password';";
				

				$result = mysqli_query($connect, $sql);

                    // Check if user exists and store user data in session
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $_SESSION['user_id'] = $row['ngo_id'];
                        $_SESSION['username'] = $row['username'];
                        header("Location: feed.php");
                    } else {
                        echo "Invalid username or password";
                    }

                    mysqli_close($conn);

               

				
				
				
			}

?>
    </form>
</div>

</div>

<!<script>
   var x = document.getElementById("login");
    var y = document.getElementById("register") ;
    var z = document.getElementById("btn");

function register(){
    x.style.left="-400px";
    y.style.left="50px";
   z.style.left ="110px";
}
function login(){
    x.style.left="50px";
    y.style.left="450px";
    z.style.left ="0";
}
</script>!> 

</body>
</html>
<?php

include "connecting.php";



?>






