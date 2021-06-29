<?php
	$name="";
	$err_name="";
	
	$username="";
	$err_username="";
	
	$password="";
	$err_password="";
	
	$confirmpassword="";
	$err_confirmpassword="";
	
	$email="";
	$err_email="";
	
	$isdcode="";
	$err_isdcode="";
	
	$phone="";
	$err_phone="";
	
	$gender="";
	$err_gender="";
	
	$day="";
	$err_day="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";
	
	$wdyhau="";
	$err_wdyhau="";
	
	$bio="";
	$err_bio="";
	
	// Validation Part //
	
		if	($_SERVER["REQUEST_METHOD"]=="POST")
		{
			if (empty($_POST["name"]))
			{
				$err_name="A name required";
			}
			else
			{
				$name=$_POST["name"];
			}
			
			if (strlen($_POST["username"])<6)
			{
				$err_username="Username length must contain 6 characters!";
			}
			elseif(strpos($_POST["username"]," "))
			{
				$err_username="Space is not allowed!";
			}
			else
			{
				$username=$_POST["username"];
			}
			if(strlen($_POST["password"])>8)
			{
				$pass=$_POST["password"];
			if ((!strpos($_POST["password"],"#"))||(!strpos($_POST["password"],"?")))
				{
				$err_password="Password must contain at least 8 characters and 1 special character!";
				}
				for ($i=0;$l<strlen($_POST["password"]);$i++)
				{
					if (ctype_lower($_POST["password"][$i]))
					{
						break;
					}
					else
					{
						$err_password="Password must contain minimum 1 lowercase alphabet!";
					}
				}
				for ($j=0;$m<strlen($_POST["password"]);$j++)
				{
					if (ctype_upper($_POST["password"][$j]))
					{
						break;
					}
					else
					{
						$err_pass="Password must contain minimum 1 uppercase alphabet!";
					}
				}
				for($k=0;$n<strlen($_POST["password"]);$k++)
				{
					if(is_numeric($_POST["password"][$k]))
					{
						break;
					}
					else
					{
						$err_password="Password must contain minimum 1 numeric character!";
					}
				}
			}
			else	
			$err_password="Password length must be 8 or longer!";
			
			if($_POST["confirmpassword"]!=$_POST["password"])
			{
				$err_confirmpassword="Password didn't matched with the upperone!";
			}
			else{$confirmpassword=$_POST["confirmpassword"];}
			
			if(strpos($_POST["email"],"@"))
			{if(strpos($_POST["email"],"."))
			$email=$_POST["email"];
			}
			else $err_email="Email must contain '@' and '.'!";
			
			if(!is_numeric($_POST["isdcode"]))
			{
				$err_isdcode="ISD code should be numeric only!";
			}
			else $phone=$_POST["phone"];
			
			if(!is_numeric($_POST["phone"]))
			{
				$err_phone=" Phone number should be numeric only!";
			}
			else $phone=$_POST["phone"];
			
			
			if (!isset($_POST["day"]))
			{
				$err_day="Day must be selected!";
			}
			else
			{
				$day=$_POST["day"];
			}
			if (!isset($_POST["month"]))
			{
				$err_month="Month must be selected!";
			}
			else
			{
				$month=$_POST["month"];
			}
			if (!isset($_POST["year"]))
			{
				$err_year="Year must be selected!";
			}
			else
			{
				$year=$_POST["year"];
			}
			
			if(!isset($_POST["wdyhau"]))
			{
				$err_wdyhau="Atleast one source need to be selected!";
			}
			else
			{
				$wdyhau=$_POST["wdyhau"];
			}
			
			if (empty($_POST["bio"]))
			{
				$err_bio="Bio must contain something!";
			}
			else
			{
				$bio=$_POST["bio"];
			}
			
			
			
			if(!isset($_POST["gender"]))
			{
				$err_gender="Please select your gender!";
			}
			else
			{
				$gender=$_POST["gender"];
			}
			
		echo "Name: ".htmlspecialchars($_POST["name"])."<br>";
		echo "Username: ".htmlspecialchars($_POST["username"])."<br>";
		echo "Password: ".htmlspecialchars($_POST["password"])."<br>";
		echo "Email: ".htmlspecialchars($_POST["email"])."<br>";
		echo "ISD: ".htmlspecialchars($_POST["isdcode"])."<br>";
		echo "Phone: ".htmlspecialchars($_POST["phone"])."<br>";
		echo "Bio: ".htmlspecialchars($_POST["bio"])."<br>";
		
		}
?>



    <! HTML Part >
	
<html>
	<head></head>
	<body>
		<center>
		<form action="" method="post">
		<fieldset>
		<legend align="center"><h1><b>Club Member Registration</b></h1></legend>
			<table>
				<tr>
					<td><span >Name:</span></td>
					<td></td>
					<td><input type="text" name="name" value="<?php echo $name;?>"><td><span><?php echo $err_name;?></span></td>
				</tr>
				
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
					<td><span>Confirm Password:</span></td>
					<td></td>
					<td><input type="password" name="confirmpassword" value="<?php echo $confirmpassword;?>"> </td><td><span><?php echo $err_confirmpassword;?></span></td>
				</tr>
				<tr>
					<td><span>Email:</span></td>
					<td></td>
					<td><input type="text" name="email" value="<?php echo $email;?>"> </td><td><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span>Phone:</span></td>
					<td></td>
					<td><input type="text" name="isdcode" value="<?php echo $isdcode;?>" placeholder="code" size="4"><b>-</b><input type="text" name="phone" value="<?php echo $phone;?>" placeholder = "Number" size="9"> </td><td><span><?php echo $err_isdcode;?></span><span><?php echo $err_phone;?></span></td>
				</tr>
				<tr>
					<td><span>Address:</span></td>
					<td></td>
					<td><input type="text" name="streetaddress" placeholder="Street Address"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="text" name="city" placeholder = "City" size="6"><b>-</b><input type="text" name="state" placeholder = "State" size="7"></td>
				</tr>
				<tr>
					<td></td>
					<td><td>
					<input type="text" name="Pocode" placeholder = "Postal/Zip Code">
				</tr>
				
				<tr>
				<td><span>Birth Date:</span></td>
				<td></td>
				<td>
				<select name="day">
					<option disabled selected>Day</option>
					<?php
						for($i=1;$i<=31;$i++)
						{
							echo "<option>$i</option>";
						}
					?>
					</select>
					<select name="month">
					<option disabled selected>Month</option>
					<?php
						$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
						for($j=0;$j<count($mon);$j++)
						{
							echo "<option>$mon[$j]</option>";
						}
					?>
				</select>
				<select name="year">
					<option disabled selected>Year</option>
					<?php
						for($k=1971;$k<=2040;$k++)
						{
							echo "<option>$k</option>";
						}
					?>
				</select>
				</td>
				<td><?php echo "$err_day"."  "."$err_month"."  "."$err_year"?></td>
				</tr>
				<tr>
				<td><span>Gender:</span></td>
				<td></td>
				<td><input type="radio" name="gender" value="Male"><span>Male</span>
				<input type="radio" name="gender" value="Female"><span>Female</span> </td><td><span> <?php echo $err_gender;?></span></td><br>
				</tr>
				<tr>
				<td><span>Where did you hear<br> about us?</span></td>
				<td></td>
					<td><input type="checkbox" value="friend" name ="wdyhau[]">A Friend or Colleague<br>
					<input type="checkbox"value="google" name ="wdyhau[]">Google<br>
					<input type="checkbox"value="blog" name ="wdyhau[]">Blog Post<br>
					<input type="checkbox"value="news" name ="wdyhau[]">News Article</td><td> <span><?php echo $err_wdyhau;?></span></td></br>
				</tr>			
				<tr>
				<td><span>Bio:</span></td>
				<td></td>
				<td><textarea name="bio" ></textarea></td>
				<td><span><?php echo $err_bio;?></span></td>
				</tr>
				<tr>
				<td><br></td>
				</tr>
				<tr>
				<td colspan="3" align="center">
				<input type="Submit" name="submit" value="register">
				</td>
				</tr>
			</table>
	</fieldset>
		</form>
		</center>
	</body>
</html>