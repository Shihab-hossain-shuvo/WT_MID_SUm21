<?php
	
	$username="";
	$err_username="";
	
	$password="";
	$err_password="";
	$hasError=false;
	
if	($_SERVER["REQUEST_METHOD"]=="POST")
{
	if (strlen($_POST["username"])<6)

			{   $hasError=true;
				$err_username="Username length must contain 6 characters!";
			}
			elseif(strpos($_POST["username"]," "))
			{    $hasError=true;
				$err_username="Space is not allowed!";
			}
			else
			{
				$username=$_POST["username"];
			}

         
if(empty($_POST["password"]))
{
			$hasError = true;
			$err_password = "Password Required";
		
}
			elseif (strlen($_POST["password"])<8)
			{
				$hasError=true;
				$err_password="Password must contain at least 8 characters";
			}

			elseif ((!strpos($_POST["password"],"#"))||(!strpos($_POST["password"],"?")))
				{
				$hasError=true;
				$err_password="Password must contain at least 8 characters and 1 special character!";
				}

				elseif(strpos($_POST["password"]," "))
			{    $hasError=true;
				$err_password="Space is not allowed!";
			}

			else
			{
				$password=$_POST["password"];
			}
echo "Username: ".htmlspecialchars($_POST["username"])."<br>";
echo "Password: ".htmlspecialchars($_POST["password"])."<br>";

}


	?>

	<html>
	<head>
		
	</head>
	<body>
		<center>
		<form action="" method="post">
		<fieldset>
		<legend align="center"><h1 style="background-color:DodgerBlue;"><b>Log in Pannel</b></h1></legend>
			<table>
				
				<tr>
					<td><span >Username:</span></td>
					<td></td>
					<td><input type="text" name="username" value="<?php echo $username;?>"> </td><td><span><?php echo $err_username;?></span></td>
				</tr>
				<tr>
					<td><span>Password:</span></td>
					<td></td>
					<td><input type="password" name="password" value="<?php echo $password;?>"> </td><td><span><?php echo $err_password;?></span></td>
				</tr>

               <tr>
				<td colspan="3" align="center">
				<input type="Submit" name="submit" value="Log_in">
				</td>
				</tr>
				<tr>
					<td><a target="_blank" href="C:\xampp\htdocs\mid_sum21\project forms\Admin_login.php"><b>Admin Login</b></a></td>
				</tr>

				</table>
	</fieldset>
		</form>
		</center>
	</body>
</html>
				
				