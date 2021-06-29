<?php
	
	$username="";
	$err_username="";
	
	$password="";
	$err_password="";

	$Cpassword="";
	$err_Cpassword="";

    $Phone="";
	$err_phone="";

	
    $day="";
	$err_day="";

	$month="";
	$err_month="";

	$year="";
	$err_year="";

	$gender="";
	$err_gender="";

	$email="";
	$err_email="";

	$City="";
	$err_City="";

	$Baccount="";
	$err_Baccount="";

	$Bloodgrp="";
	$err_Bloodgrp="";



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
				$err_password="Password should contain at least 8 characters";
			}

			elseif ((!strpos($_POST["password"],"#"))||(!strpos($_POST["password"],"?")))
				{
				$hasError=true;
				$err_password="Password must contain at least 8 characters and 1 special character!";
				}

				elseif(strpos($_POST["password"]," "))
			{    $hasError=true;
				$err_password="Space is not allowed in password";
			}

			else
			{
				$password=$_POST["password"];
			}

			if (empty($_POST["Cpassword"])) {

				$hasError=true;
				$err_Cpassword="This field is required";

			}

			elseif($_POST["Cpassword"]!=$_POST["password"])
			{
				$hasError=true;
				$err_Cpassword="Password doesn't match";
			}
			else{
				   $Cpassword=$_POST["Cpassword"];
			    }


if(!is_numeric($_POST["Phone"]))
	{
				$hasError=true;
				$err_phone="Phone number should be numeric only!";
		$hasError=true;
				$err_phone="Phone number should be numeric only!";
			}

			elseif (strlen($_POST["Phone"])<11)
			{
				$hasError=true;
				$err_phone="Phone number length must be 11!";
			} 
			else $phone=$_POST["Phone"];


if (!isset($_POST["day"]))
			{
				$hasError=true;
				$err_day="please slect a day";
			}
			else
			{
				$day=$_POST["day"];
			}
			if (!isset($_POST["month"]))
			{
				$hasError=true;
				$err_month="please slect a month";
			}
			else
			{
				$month=$_POST["month"];
			}
			if (!isset($_POST["year"]))
			{
				$hasError=true;
				$err_year="please slect a year";
			}
			else
			{
				$year=$_POST["year"];
			}

			if(!isset($_POST["gender"]))
			{
				$err_gender="Please select your gender!";
			}
			else
			{
				$gender=$_POST["gender"];
			}

if(!strpos($_POST["email"],"@"))
			{if(!strpos($_POST["email"],"."))

				$hasError=true;
				$err_email="your email is not in correct format!";
				}

				else
				{
					$email=$_POST["email"];
				}


if(!isset($_POST["City"]))
			{   $hasError=true;
				$err_City="Please select a city";
			}
			else
			{
				$City=$_POST["City"];
			}

            if (empty($_POST["Baccount"])) {

            	$hasError=true;
            	$err_Baccount="Account Number needed";
            	
            }
			elseif (strlen($_POST["Baccount"])<10)

			{   $hasError=true;
				$err_username="Account number should contain atleast 10 numbers";
			}
			elseif(strpos($_POST["Baccount"]," "))
			{    $hasError=true;
				$err_username="Account number can not have any space";
			}
			else
			{
				$Baccount=$_POST["Baccount"];
			}


			if(!isset($_POST["Bloodgrp"]))
			{   $hasError=true;
				$err_Bloodgrp="Please select your Blood_Group";
			}
			else
			{
				$Bloodgrp=$_POST["Bloodgrp"];
			}




echo "Username: ".htmlspecialchars($_POST["username"])."<br>";
echo "Password: ".htmlspecialchars($_POST["password"])."<br>";
echo "Cpassword: ".htmlspecialchars($_POST["Cpassword"])."<br>";
echo "Phone: ".htmlspecialchars($_POST["Phone"])."<br>";
echo "email: ".htmlspecialchars($_POST["email"])."<br>";
echo "Baccount: ".htmlspecialchars($_POST["Baccount"])."<br>";



}


	?>

	<html>
	<head></head>
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
					<td><span>Confirm_Password:</span></td>
					<td></td>
					<td><input type="password" name="Cpassword" value="<?php echo $Cpassword;?>"> </td><td><span><?php echo $err_Cpassword;?></span></td>
				</tr>

				<tr>
					<td><span>Phone_Number:</span></td>
					<td></td>
					<td><input type="text" name="Phone" value="<?php echo $Phone;?>"> </td><td><span><?php echo $err_phone;?></span></td>
		
				</tr>


<tr>
				<td><span>Birth Date:</span></td>
				<td></td>
				<td>
				<select name="day">
					<option disabled selected>day</option>
					<?php
						for($i=1;$i<=31;$i++)
						{
							echo "<option>$i</option>";
						}
					?>
					</select>
					<select name="month">
					<option disabled selected>month</option>
					<?php
						$month= array("January","February","March","April","May","June","July","August","September","October","November","December");
						for($j=0;$j<count($month);$j++)
						{
							echo "<option>$month[$j]</option>";
						}
					?>
				</select>
				<select name="year">
					<option disabled selected>year</option>
					<?php
						for($k=1900;$k<=2021;$k++)
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
				<input type="radio" name="gender" value="Female"><span>Female</span>
			    </td><td><span> <?php echo $err_gender;?></span></td><br>
				</tr>


                |<tr>
                	
                	<td><span>Email:</span></td>
					<td></td>
					<td><input type="text" name="email" placeholder = "Enter your official email" value="<?php echo $email;?>"> </td><td><span><?php echo $err_email;?></span></td>
                </tr>

                <tr>
                <td>
                	<span>Choose City</span>
                </td>

                <td>
                <select name="City">
					<option disabled selected>City</option>
					<?php
						$city= array("Dhaka","Chittagong","Khulna","Rajshahi");
						for($k=0;$k<count($city);$k++)
						{
							echo "<option>$city[$k]</option>";
						}
					?>

				</select>
			    </td>
			    <td><span> <?php echo $err_City;?> </span></td>
			    </tr>
 					
 				<tr>
					<td><span >BankaccountNo:</span></td>
					<td></td>
					<td><input type="text" name="Baccount" value="<?php echo $Baccount;?>"> </td><td><span><?php echo $err_Baccount;?></span></td>
				</tr>



				
                 <tr>
                <td>
                	<span>Blood_group</span>
                </td>

                <td>
                <select name="Bloodgrp">
					<option disabled selected>Bloodgrp</option>
					<?php
						$Bloodgrp= array("A+","A-","B+","B-","o+","o-");
						for($m=0;$m<count($Bloodgrp);$m++)
						{
							echo "<option>$Bloodgrp[$Bloodgrp]</option>";
						}
					?>

				</select>
			    </td>
			    <td><span> <?php echo $err_Bloodgrp;?> </span></td>
			    </tr>

			    <tr>
				<td colspan="3" align="center">
				<input type="Submit" name="submit" value="Register">

				</td>
				</tr>


				</table>
	</fieldset>
		</form>
		</center>
	</body>
</html>
				
				