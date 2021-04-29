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
    <div style="background-image: url('../assets/library.jpg'); background-size: cover; background-position: center; height: 980px; width: 100%; display:block; text-align: center; align-items:center;">
        <hr>

        <form id="signupForm" name="signupForm" method="post" enctype="multipart/form-data" style="position: absolute; margin: 20px; max-width: 300px; padding: 16px; background-color: white; display: inline-block; margin-left: -10%; margin-right: -10%; text-align: left;">
            <h1>Signup</h1>

            <b>Username</b>
            <input type="text" placeholder="Enter Username" name="username" id="username" style="width: 270px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b>Full Name</b>
            <input type="text" placeholder="Enter Your Full Name" name="name" id="name" style="width: 270px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b>Email</b>
            <input type="email" placeholder="hint: xyz@gmail.com" name="email" id="email" style="width: 270px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b>Select Gender</b><br>
            <input type="radio" name="gender" value="male" style="width: 30px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;"> Male
            <input type="radio" name="gender" value="female" style="width: 30px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;"> Female
            <input type="radio" name="gender" value="other" style="width: 30px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;"> Other <br>

            <b>Date of Birth</b><br>
            <input type="number" name="dd" id="day" value="" style="width: 30px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;"> / <input type="number" name="mm" id="month" style="width: 30px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;" value=""> / <input type="number" name="yyyy" id="year" style="width: 50px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;" value=""> <i>(dd/mm/yyyy)</i>


            <b>Select User Type</b>
            <select name="user_type" style="width: 270px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">
                <option value="premium_user" selected>Premium User</option>
                <option value="regular_user" >Regular User</option>
                
            </select>

            <b>Choose a Picture</b>
            <input type="file" name="picture" id="picture" style="width: 270px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b>Password</b>
            <input type="password" placeholder="Enter Password" name="password" id="password" style="width: 270px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b>Confirm Password</b>
            <input type="password" placeholder="Enter Password" name="confirmPassword" id="confirmPassword" style="width: 270px; padding: 10px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <br>
            <input type="submit" name="submit" value="Submit" style="background-color: #4CAF50; color: white; padding: 16px 20px; border: none; cursor: pointer; width: 100%; opacity: 0.9;">
        </form>

    </div>
    <script type="text/javascript" src="../assets/js/signupCheck.js"></script>
</body>
<?php include('footer.html') ?>