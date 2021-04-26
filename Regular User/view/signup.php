<!DOCTYPE html>
<html>

<head>
    <title>Signup</title>
    <script src="https://kit.fontawesome.com/d4036902fd.js" crossorigin="anonymous"></script>
</head>

<body>
<!-- nav bar -->
<div id="nav_bar" style="background-color:#caefff; height: 100px; width: 100%; font-family: arial; display: flex; align-items: center; text-align: center;">
            
            &nbsp; &nbsp; &nbsp; &nbsp;
            <i title="Bibliotheca Library" class="fas fa-book-reader" style="font-size:50px; color:black;"></i>

            <span style="margin-left:auto; margin-right:0; font-size: 18px;">
                <b style="font-size: 40px;">Bibliotheca</b>
                <br>
                e-Library with Integrated e-Learning Facilities
            </span>

            
            <span style="margin-left:auto; margin-right:0;">
                
                <!-- home -->
                <a href="../index.php" style="text-decoration: none;">
                    <i title="home" class="fas fa-home" style="font-size:35px; color:black;"></i>
                </a>

                 <!-- sign in -->
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="signin.php" style="text-decoration: none;">
                    <i title="sign in" class="fas fa-sign-in-alt" style="font-size:35px; color:black;"></i>
                </a>

                &nbsp; &nbsp; &nbsp;
            </span>           
</div>

<!-- sign up form -->
<div  style="background-image: url('../assets/library.jpg'); background-size: cover; background-position: center; height: 980px; width: 100%; display:block; text-align: center; align-items:center;">
    <hr>
    
        <form id="signupForm" name="signupForm" method="post" action="../controller/signupCheck.php" enctype="multipart/form-data" style="position: absolute; margin: 20px; max-width: 300px; padding: 16px; background-color: white; display: inline-block; margin-left: -10%; margin-right: -10%; text-align: left;">
            <h1 id="signup">Signup</h1>

            <b id="Uname" >Username</b>
            <input type="text" name="username" id="Username" onblur="getName()" placeholder="Enter Username"  required style="width: 270px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b id="Fname">Full Name</b>
            <input type="text" name="name" id="FullName" onblur="getFullName()"  placeholder="Enter Your Full Name"  required style="width: 270px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b id="e">Email</b>
            <input type="text" name="email" id="email" onblur="ValidateEmail()" placeholder="hint: xyz@gmail.com" required style="width: 270px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b>Select Gender</b><br>
            <input type="radio" name="gender" value="male" style="width: 30px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;"> Male
            <input type="radio" name="gender" value="female" style="width: 30px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;"> Female
            <input type="radio" name="gender" value="other"  style="width: 30px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;"> Other <br>

            <b>Date of Birth</b><br>
            <input id="DOB" type="number" name="dd" value="" required style="width: 30px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;"> / <input type="number" name="mm" required style="width: 30px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;" value="">	/ <input type="number" name="yyyy" required style="width: 50px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;" value=""> <i>(dd/mm/yyyy)</i>
            

            <b>Select User Type</b>
            <select name="user_type" required style="width: 270px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">
				<option value="regular_user" selected>Regular User</option>
				<option value="instructor">Instructor</option>
			</select>

            <b>Choose a Picture</b>
            <input type="file" name="picture" required style="width: 270px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b id="p">Password</b>
            <input type="password" name="password" id="pass" onblur="Validatepasswoed()" placeholder="Enter Password" required style="width: 270px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b>Confirm Password</b>
            <input type="password" name="confirmPassword" id="cpass" placeholder="Enter Password" required style="width: 270px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <br>
            <input id="submit" type="submit" name="submit" value="Submit" style="background-color: #4CAF50; color: white; padding: 16px 20px; border: none; cursor: pointer; width: 100%; opacity: 0.9;">
        </form>
</div>
    <script type="text/javascript" src="../assets/js/signupCheck.js"></script>
</body>
<?php include('footer.html') ?>