<?php
	session_start();

	if(isset($_POST['submit'])){

		$username 		= $_POST['username'];
		$name 			= $_POST['name'];
		$email 			= $_POST['email'];
		$password 		= $_POST['password'];
		$confirmPass 	= $_POST['confirmPass'];
		$gender 		= $_POST['gender'];
		$day 			= $_POST['dd'];
		$month 			= $_POST['mm'];
		$year 			= $_POST['yyyy'];

		if($username == "" || $name == "" || $email == "" || $password == ""
			|| $confirmPass == "" || $gender == "" || $day == "" || $month == ""
			|| $year == ""){
			
			echo "invalid information...please try again!";
			
		}else{

			if($password == $confirmPass){

				//store user information
				$user = [
							'name'		=>$name, 
							'username'	=>$username, 
							'email'		=>$email, 
							'password'	=>$password,
							'gender'	=>$gender,
							'day'		=>$day,
							'month'		=>$month,
							'year'		=>$year
						];

				$_SESSION['user'] = $user;

				header('location: login.php');
				
			}else{
				echo "password & confirm password mismatch...";
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Renew Membership Page</title>
</head>
<body>
<table border="1" align="center" width="80%">
 		<tr height="100px">
			<td >
				<img src="logo.png" width="100%" height="100%">
			</td>
			<td colspan="2" align="right">
				<a href="public_home1.html">Home</a> | 
				<a href="login.html">Login</a> |
				<a href="registration.html">Registration</a> &nbsp;
			</td>
			
		</tr>
<tr height="500px">
<td align="center"  colspan="2" >
	<form method="post" action="regCheck.php">
		<fieldset>
			<legend><h2><b>Renew Membership Form</b></h2></legend>
			<table>

				<tr >
					<td>Name</td>
					<td>:<input type="text" name="name"></td>
				</tr>

<tr>
			  <td colspan="3">
				<hr>
			  </td>
			</tr>
				<tr>
					<td>Email</td>
					<td>:<input type="email" name="email"></td>
				</tr>

<tr>
			  <td colspan="3">
				<hr>
			  </td>
			</tr>
				<tr>
					<td>Username</td>
					<td>:<input type="text" name="username"></td>
				</tr>

<tr>
			  <td colspan="3">
				<hr>
			  </td>
			</tr>
				<tr>
					<td>Password</td>
					<td>:<input type="password" name="password"></td>
				</tr>

<tr>
			  <td colspan="3">
				<hr>
			  </td>
			</tr>
				<tr>
					<td>Confirm Password</td>
					<td>:<input type="password" name="confirmpass"></td>
				</tr>

<tr>
			  <td colspan="3">
				<hr>
			  </td>
			</tr>

					<tr>
					  <td colspan="3">
						<fieldset width="400px">
							<legend>Gender</legend>
							<input type="radio" name="gender" value="male"> Male
							<input type="radio" name="gender" value="female"> Female
							<input type="radio" name="gender" value="other"> Other
					  </fieldset>
					</td>
				</tr>
			<tr>
			  <td colspan="3">
				<hr>
			  </td>
			</tr>

		<tr>
			<td colspan="3">
				<fieldset width="400px">
				<legend>Date of Birth</legend>
			<input type="number" name="day" width="20px" value=""> / 
				<input type="number" name="month" width="20px" value="">	/ 
					<input type="number" name="year" width="20px" value="">
			 <i>(dd/mm/yyyy)</i>
		</td>
	</tr>

<tr>
			  <td colspan="3">
				<hr>
			  </td>
			</tr>

			       <tr>
					
					<td>
						<input type="submit" name="submit" value="Submit">
						<input type="reset" value="Reset">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</td>
</tr>
<tr height="50px">
			<td colspan="3" align="center">
				copyright@2017
			</td>
		</tr>
</table>
</body>
</html>