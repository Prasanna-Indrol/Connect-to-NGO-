<html>
<head></head>
<body>
<form method="POST" action ="admin_login_next.php">
<input type="text"  placeholder=" id " name="id" >
    <input type="text" placeholder=" Name " name="n1" >
    <input type="text"  placeholder=" Email address " name="e1" >
    <input type="text" placeholder=" Contact number " name="c1" >
    <input type="text"  placeholder=" Create User id " name="u1" >
    <input type="password"  placeholder=" Create Password " name="p1" ><br>
    
   <button name = "edit">Edit the data into public data </button>
<button name ="add">Insert the data for the Public</button>
<br><br>
<input type="text"  placeholder=" id " name="id" >
<button name ="delete">Delete the data by ID for the Public data</button>
<br>
<button name ="show">Show the database for the public id's</button>
    </form>

</body>
</html>
<?php
include "connecting.php";
if (isset($_POST['edit']))
{			$id = $_POST['id'];
			$name=$_POST['n1'];
			$email=$_POST['e1'];
			$contact=$_POST['c1'];
			$user=$_POST['u1'];
			$password=$_POST['p1'];	
	
		$result= pg_query_parms($connect,"update users SET  name  =$1 ,email_address=$2 ,phone=$3,userid=$4,password=$5 where p_id=$6",array($name,$email,$phn,$username,$password,$id));
		if(!$result){
			echo"<p>Failed to update the record</p>";
			}
		else{
			echo"<p>recorded updated successfully</p>";
		}
}

// check if the user has submitted the form to add a record 
if(isset($_POST['add'])){
			$name=$_POST['n1'];
			$email=$_POST['e1'];
			$contact=$_POST['c1'];
			$user=$_POST['u1'];
			$password=$_POST['p1'];		



			$query="INSERT INTO public_data(name,email_address,phone,userid,password) VALUES('$name','$email','$contact','$user','$password');"; 
			$result = pg_query($connect,$query);
			
			echo pg_result_error($result);
		if(!$result){
			echo"<p>record insertion failed</p>";
			}
		else{
			echo"<p>recorded inserted successfully</p>";


	}
}
if(isset($_POST['delete']))
{
	$id= $_POST['id'];
	echo $id;
	$resul=pg_query($connect,"DELETE from public_data WHERE p_id=$id");
	
	if(!$result){
			echo"<p>record deletion failed</p>";
			}
		else{
			echo"<p>recorded deleted successfully</p>";


}
}

if(isset($_POST['show']))
{
$result = pg_query($connect, "SELECT * from public_data ORDER by p_id");

if(!$result){
		echo "<p> failed to retrive the data</p>";
		}
else{
	echo"<table>";
	echo"<tr><th>ID</th><th>NAME</th><th>EMAIL</th><th>Phone</th><th>User name</th><th>Password</th></tr>";
	
	while($row = pg_fetch_assoc($result)){
		echo "<tr>" ;
		echo "<td>" . $row['p_id']."</td>";
		echo  "<td>" . $row['name']."</td>";
		echo  "<td>" . $row['email_address']."</td>";
		echo  "<td>" . $row['phone']."</td>";
		echo  "<td>" . $row['userid']."</td>";
		echo  "<td>" . $row['password']."</td>";		
		echo  "<td>" ;
		echo  "<td>" ;
		echo  "</tr>" ;
		}
	echo "</table>";
	}

	
 //free the result set 
 pg_fetch_result($result);

 // close  the database 
 
 pg_close($conn);
 	

}
?>
