<?php
	$title = "Instructor Home";
	include('header.php');
?>
<!-- upper navigation bar -->
<div id="nav_bar" style="background-color:#caefff; height: 100px; width: 100%; font-family: arial; display: flex; align-items: center; text-align: center;">    
    
    &nbsp; &nbsp; &nbsp; &nbsp;
    <!-- app icon -->
    <i title="Bibliotheca Library" class="fas fa-book-reader" style="font-size:50px; color:black;"></i>

    <!-- app name -->
    <span style="margin-left:auto; margin-right:0; font-size: 18px;">
        <b style="font-size: 40px;">Bibliotheca</b>
    </span>

    <!-- icons alignment -->
    <span style="margin-left:auto; margin-right:0;">
        
        <!-- home -->
        <a href="instructorHome.php" style="text-decoration: none;">
            <i title="home" class="fas fa-home" style="font-size:30px; color: black;"></i>
        </a>
        
        <!-- account setting -->
        &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;
        <a href="#" style="text-decoration: none;">
            <i title="account setting" class="fas fa-user-cog" style="font-size:30px; color: black;"></i>
        </a>
        
        <!-- books -->
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <a href="#" style="text-decoration: none;">
            <i title="books" class="fas fa-book" style="font-size:35px; color:black;"></i>
        </a>

        <!-- user profile -->
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <a href="#" style="text-decoration: none;">
            <i title="user profile" class="fas fa-user-circle" style="font-size:35px; color:black;"></i>
        </a>

        <!-- sign out -->
        &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;
        <a href="#" style="text-decoration: none;">
            <i title="sign out" class="fas fa-sign-out-alt" style="font-size:35px; color:black;"></i>
        </a>
        &nbsp; &nbsp; &nbsp; &nbsp;
    </span>
</div>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">
    <!-- side panel -->
    <div id="side_panel" style="width: 300px; background-color:#caefff; font-family:Arial;" align="center">
        <h2>Instructor</h2>
        <img src="ishorju.jpg" height="100px;" width="100px" alt="ishorju" style="border-radius:50%">
        <br> <br> <br>

        <!-- Dashboard -->
        <a href="adminDashboard.php" style="text-decoration: none;">
            <span style="font-size:25px;">Dashboard</span>
        </a>

        <hr><br>
        <!-- Features -->
        <a href="Features.php" style="text-decoration: none;">
            <span style="font-size:25px">Features</span>
        </a>

       

        <hr><br>
        <!-- Library Actions -->
        <a href="#" style="text-decoration: none;">
            <span style="font-size:25px">Library Actions</span>
        </a>

        

        <hr><br>
        <!-- Blog Creation -->
        <a href="blogCreation.php" style="text-decoration: none;">
            <span style="font-size:25px">Create a Blog</span>
        </a>
    </div>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="color: black; font-size: 30px">
            <b>Instructor Dashboard</b>
            <hr>
        </span>
        <br><br><br>
        <!-- enrolled users -->
        <i class="fas fa-users" style="font-size:30px; color: black;"></i>
        &nbsp; &nbsp;
        <span style="font-size: 25px"><b>Enrolled Users &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp;</b></span>
        <br><br>

        <!-- listed books -->
        <i class="fas fa-book" style="font-size:30px; color: black;"></i>
        &nbsp; &nbsp;
        <span style="font-size: 25px"><b>Listed Books &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b></span>
        <br><br>

        <!-- listed authors -->
        <i class="fas fa-user" style="font-size:30px; color: black;"></i>
        &nbsp; &nbsp;
        <span style="font-size: 25px"><b>Listed Authors &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b></span>
        <br><br>

        <!-- listed categories -->
        <i class="fas fa-user" style="font-size:30px; color: black;"></i>
        &nbsp; &nbsp;
        <span style="font-size: 25px"><b>Listed Categories &nbsp; &nbsp; &nbsp;</b></span>
        <br><br>

        <!-- book issued -->
        <i class="fas fa-bars" style="font-size:30px; color: black;"></i>
        &nbsp; &nbsp;
        <span style="font-size: 25px"><b>Times Book Issued &nbsp; &nbsp;</b></span>
        <br><br>

        <!-- book returned -->
        <i class="fas fa-recycle" style="font-size:30px; color: black;"></i>
        &nbsp; &nbsp;
        <span style="font-size: 25px"><b>Times Book Returned </b></span>
        <br><br>


    </div>
</div>
    
<?php include('footer.html')?>