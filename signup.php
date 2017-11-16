<?php
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		if(isset($_POST['submit']))
		{
			if(!empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['repass']))
			{
				$pass=$_POST['pass'];
				$repass=$_POST['repass'];
				if($pass!=$repass)
				{
					$err="please enter same password in both fields";
				}
				else
				{
					$name=$_POST['name'];
				$username=$_POST['username'];
				
				$email=$_POST['email'];
				
				include 'connection.php';
				$sql="INSERT INTO `user`(name,user_name,email_id,password,contact_no) values('$name','$username','$email','$pass','') ";
				$res=mysqli_query($conn,$sql);
				if($res)
					{
							$success="<p>Data Inserted</p>";
					}	
					else
					{
						echo mysqli_error($conn);
					}
				}
				
			}
			else
			{
				echo "empty";
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign-up
	</title>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<script type="text/javascript" src="../js/index.js"></script>
</head>
<body>
	<div id="body">
		<ul>
			<li><a href="../index.php" >HOME</a></li>
			<li><a href="#" >FLIGHTS</a></li>
			<li><a href="login.php" >LOGIN</a></li>
			<li><a href="signup.php" class="active">SINGUP</a></li>
			<li><a href="#">CONTACT US</a></li>
		</ul>
	</div>
	<div id="signup">
		<div id="signupbox">
				<form  method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" onsubmit="return validateForm()">
			<table >
			
					<tr><th>
						Name		
					</th><td>
						<input type="text" id="name" name="name" required>	
					</td></tr>
			

			
				<tr><th>
					Username
				</th><td>
					<input type="text" id="username" name="username" required>		
				</td></tr>
				<tr><th>Email</th><td><input id="email" type="email" name="email" required></td></tr>	

				<tr><th>Password</th><td><input type="password" id="pass" name="pass" required></td></tr>	


				<tr><th>Re-Enter Password</th><td><input type="password" id="repass" name="repass" required></td></tr>	
				
				<tr><td></td><td colspan="2">	<input type="submit" name="submit" value="submit" id="submit_button" required></td></tr>
				<tr><td colspan="2" id="err"></td></tr>
			</table>
			
			
			
		</form>
		</div>
		
	</div>
</body>
</html>
<style type="text/css">
		body
	{
		padding: 0;
		margin: 0;
		font-family: arial;
		height: 100vh;
	}
	h1
	{
		margin: 0;
	}
	
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
}

li {
    float: left;
}

li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
    background-color: rgb(13, 72, 168);
    color:white;
}	
#signup
{

	background-color :rgb(13, 72, 168);
}
#signupbox
{

	margin-left: 30vw;
}
input	
{
	padding: 5px;
}
#submit_button
{
	border: none;
	background-color: red;
	color: white;
	width: 50%;
	text-align: center;
	font-weight: bold;
}
#submit_button:hover
{
	background-color: rgb(13, 72, 168);
	color:white;
	cursor: pointer;
}

table
{
	color: white;

}
td
{
	padding: 5px ;
}
th
{
	text-align: left;
}
</style>
