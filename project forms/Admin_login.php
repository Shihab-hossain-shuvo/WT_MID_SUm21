<?php

	
	$name="";
	$err_name="";
	
	$uname="";
	$err_uname="";
	
	
	$pass="";
	$err_pass="";
	
	$cpass="";
	$err_cpass="";
	
	
	
	$hasError=false;
	
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$hasError=true;
			$err_name="Name Required";
		}
		elseif (strlen($_POST["name"]) <=6){
			$hasError = true;
			$err_name = "Name must be greater than 6 characters";
		}
		else{
			$name = $_POST["name"];
		}
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["uname"])){
			$hasError=true;
			$err_uname="Username Required";
		}
		elseif (strlen($_POST["uname"]) <=6){
			$hasError = true;
			$err_uname = "Name must be greater than 6 characters";
		}
		else{
			$uname = $_POST["uname"];
		}
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["pass"])){
			$hasError = true;
			$err_pass = "Password Required";
		}

		else{
			$pass = $_POST["pass"];
		}
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["cpass"])){
			$hasError = true;
			$err_cpass = "Confirm Password Required";
		}
		elseif ($_POST["cpass"] !== $_POST["pass"]){
			$hasError = true;
			$err_cpass = "Confirm Password Required";
		}
		else{
			$cpass = $_POST["cpass"];
		}
	}
	
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){	
		if(!$hasError){
			echo $_POST["name"]."<br>";
			echo $_POST["uname"]."<br>";
			echo $_POST["pass"]."<br>";
			echo $_POST["cpass"]."<br>";						
			
			
		}
		
	}
	
?>


<html>
	<head>
		<h1 align="middle" style="background-color:DodgerBlue;">WLCOME</h1>
		<h3 style="background-color:DodgerBlue;">ADMIN PANNEL</h3>


	</head>
	<body style="background-color:DodgerBlue;">
		 <a href="http://localhost/mid_sum21/project%20forms/Admin_pannel.php">
       <input type="submit"/>
     </a>
     
		<form action="" method="post">
			<table>
				
				<tr>
					<td align="right">Name</td>
					<td align="center">:<input name="name" value="<?php echo $name;?>" type="text" placeholder="Enter Your Name"> <br>
					<span><?php echo $err_name;?></span></td>
				</tr>
				
				<tr>
					<td align="right">Username</td>
					<td align="center">:<input name="uname" value="<?php echo $uname;?>" type="text" placeholder="Enter Username"> <br>
					<span><?php echo $err_uname;?></span></td>
				</tr>
				
				<tr>
					<td align="right">Password</td>
					<td align="center">:<input name="pass" type="password"><br>
					<span><?php echo $err_pass;?></span></td>
				</tr>
				
				<tr>
					<td align="right">Confirm Password</td>
					<td align="center">:<input name="cpass" type="password"><br>
					<span><?php echo $err_cpass;?></span></td>
				</tr>
				
				
				
				<tr>
					<td></td>
					<td align="center"><input type="submit" value="SIGN IN"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
