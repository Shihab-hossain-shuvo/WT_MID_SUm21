<?php

	
	$name="";
	$err_name="";
	
	$uname="";
	$err_uname="";
	
	$email="";
	$err_email="";
	
	$pass="";
	$err_pass="";
	
   

	$gender="";
	$err_gender="";	
		
	$address="";
	$err_address="";

	$city="";
	$err_city="";

	$phone="";
	$err_phone="";


	$state="";
	$err_state="";


	$postcode="";
	$err_postcode="";

	$Day="";
	$err_Day="";


	$Month="";
	$err_Month="";

	$Year="";
	$err_Year="";

	$bio="";
    $err_bio="";
	
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
		
		if(empty($_POST["address"])){
			$hasError=true;
			$err_address="Address Required";
		}
		
		else{
			$address = $_POST["address"];
		}
	}


	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["phone"])){
			$hasError=true;
			$err_phone="contact number Required";
		}
		
		else{
			$phone = $_POST["phone"];
		}
	}

		
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender = "Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
	}
		
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["bio"])){
			$hasError = true;
			$err_bio = "Bio Required";
		}
		else{
			$bio = $_POST["bio"];
		}
	}	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){	
		if(!$hasError){
			echo $_POST["name"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["address"]."<br>";
			echo $_POST["phone"]."<br>";				
			echo $_POST["bio"]."<br>";
			
		}
		
	}
	
?>


<html>
	<head>
		<h1> Club Member Registration </h1>
	</head>
	<body>
		<form action="" method="post">
			<table>
				
				<tr>
					<td align="right">Name</td>
					<td>:<input name="name" value="<?php echo $name;?>" type="text"><br>
					<span><?php echo $err_name;?></span></td>
				</tr>
				
				<tr>
					<td align="right">Username</td>
					<td>:<input name="uname" value="<?php echo $uname;?>" type="text" placeholder="Enter Username"> <br>
					<span><?php echo $err_uname;?></span></td>
				</tr>
				
				<tr>
					<td align="right">Password</td>
					<td>:<input name="password" type="password"></td>
					<td><span></span></td>
				</tr>
				
				<tr>
					<td align="right">Confirm Password</td>
					<td>:<input name="password" type="password"></td>
					<td><span></span></td>
				</tr>
				
				<tr>
					<td align="right">Email</td>
					<td>:<input name="email" type="text"></td>
					<td><span></span></td>
				</tr>
				

<tr>
					<td align="right">Address</td>
					<td>:<input name="address" value="<?php echo $address;?>" type="text" placeholder="street Address"> <br>
					<span><?php echo $err_address;?></span></td>
				</tr>


<tr>
					<td align="right"></td>
					<td><input name="city" type="text" placeholder="city"></td>
					<td><span></span></td>

					<td align="right"></td>
					<td>-<input name="state" type="text" placeholder="state"></td>
					<td><span></span></td>

				</tr>


				<tr>
					<td align="right"></td>
					<td><input name="postcode" type="text" placeholder="postal/Zipcode"></td>
					<td><span></span></td>

				</tr>


				<tr>
					<td align="right">Phone</td>
					<td>:<input name="Phone" value="<?php echo $phone;?>" type="text" placeholder="Enter Your contact number"> <br>
					<span><?php echo $err_phone;?></span></td>
				</tr>


 <tr>
				<td align = "center" colspan="2">Birth Date</td>
				<td align="left" ><select>
					<option>Day</option>
					<option>Saturday</option>
					<option>Sunday</option>
					<option>Monday</option>
					<option>Tuesday</option>
					<option>wednesday</option>
					<option>Friday</option>


				</select>
				<td align="left">
					<select>
						<option>Month</option>
						<option>january</option>
					<option>february</option>
					<option>March</option>
					<option>April</option>
					<option>May</option>
					<option>June</option>
					<option>July</option>
					<option>Augest</option>
					<option>September</option>
					<option>october</option>
					<option>november</option>
					<option>december</option>
					</select>
					
				</td>

					<td>
					<select>
						<option>Year</option>
					<option>1995-2005</option>
					<option>2005-2010</option>
					<option>2010-2015</option>
					
					
					</select>
					
				</td>
				</tr>
					

				



			  </tr>

				<tr>
					<td align="right">Gender</td>
					<td>:<input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input type="radio" <?php if($gender == "Female") echo "checked";?> value="Female" name="gender"> Female <br>
					<span><?php echo $err_gender;?></span></td>
				</tr>
				
				<tr>
					<td align="right">What did you think <br> about us? </td>
					<td>:
						<input type="checkbox" > A friend or colleague <br> 
						<input type="checkbox" >  Google <br> 
						<input type="checkbox" >  Blog Post <br> 
						<input type="checkbox" >  News Article
					</td>
				</tr>
				
				
				<tr>
					<td align="right">Bio</td>
					<td>: <textarea name="bio"><?php echo $bio;?></textarea>
						<br><span><?php echo $err_bio;?></span>
					</td>
					
				</tr>
				
				<tr>
					<td></td>
					<td align="left"><input type="submit" value="Register"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
