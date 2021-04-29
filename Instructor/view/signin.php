<?php
	$title = "Sign in";
	include('header.php');
?>

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
                <a href="index.php" style="text-decoration: none;">
                    <i title="home" class="fas fa-home" style="font-size:35px; color:black;"></i>
                </a>
               

                &nbsp; &nbsp; &nbsp;
            </span>            
</div>

<!-- sign in form -->
<div  style="background-image: url('library.jpg'); background-size: cover; background-position: center; height: 580px; width: 100%; display:block; text-align: center; align-items:center;">
    <hr>
    
        <form method="post" action="controller/signinCheck.php" style="position: absolute; margin: 20px; max-width: 300px; padding: 16px; background-color: white; display: inline-block; margin-left: -10%; margin-right: -10%; text-align: left;">
            <h1>Login</h1>

            <b>Username</b>
            <input type="text" placeholder="Enter Username" name="username" required style="width: 270px; padding: 15px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b>Password</b>
            <input type="password" placeholder="Enter Password" name="password" required style="width: 270px; padding: 15px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <br>
            <input type="submit" name="submit" value="Sign in" style="background-color: #4CAF50; color: white; padding: 16px 20px; border: none; cursor: pointer; width: 100%; opacity: 0.9;">
             <a href="instructorHome.php.php" style="text-decoration: none;">
            <br>
            &nbsp; &nbsp;<a href="signup.php">Not a User? Signup</a>
            &nbsp; &nbsp; &nbsp;
            <a href="forgotPass.php">Forgot Password?</a>
        </form>
    
</div>

<?php include('footer.html')?>