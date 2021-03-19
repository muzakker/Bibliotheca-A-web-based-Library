<?php
	$title = "Index";
	include('view/header.php');
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
                <a href="#" style="text-decoration: none;">
                    <i title="home" class="fas fa-home" style="font-size:35px; color:black;"></i>
                </a>

                <!-- sign in -->
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="view/signin.php" style="text-decoration: none;">
                    <i title="sign in" class="fas fa-sign-in-alt" style="font-size:35px; color:black;"></i>
                </a>

                <!-- sign up -->
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="view/signup.php" style="text-decoration: none;">
                    <i title="sign up" class="fas fa-pen-square" style="font-size:35px; color:black;"></i>
                </a>

                <!-- about us -->
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="#about_us" style="text-decoration: none;">
                    <i title="about us" class="fas fa-info-circle" style="font-size:35px; color:black;"></i>
                </a>
                &nbsp; &nbsp; &nbsp;
            </span>
            
        </div>

        <!-- image -->
        <div id="image">
            <img src="assets/library.jpg" alt="Library" height="700px" width="100%">
        </div>

        <!-- about us -->
        <div id="about_us" style="background-color: #caefff; height: 300px; width: 100%; font-family: arial; text-align: center;">
            <hr>
            <h1 align="center"><u>About us</u></h1>
            <hr>
            <br>
            <span style="font-size: 25px;">
                This is not your ordinary library. It is integrated with learning facilities that allows you to excel in a particular field of your interest.
                <br>
                You can buy your favorite books or just can borrow them for a certain period.
                <br>
                If you love to write then it is a perfect place to show your creativity and flourish as an aspiring author.
            </span>
        </div>

<?php include('view/footer.html')?>