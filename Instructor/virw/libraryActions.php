<?php
	$title = "Library Actions";
	include('header.php');
?>

<?php include('instructorNav.php')?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">
    <!-- side panel -->
    <div id="side_panel" style="width: 300px; background-color:#caefff; font-family:Arial;" align="center">
        <h2>Instructor</h2>
        <img src="ishorju.jpg" height="100px;" width="100px" alt="ishorju" style="border-radius:50%">
        <br> <br> <br>

        <!-- Dashboard -->
        <a href="instructorDashboard.php" style="text-decoration: none;">
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
            <b>Main Features</b>
            <hr>
        </span>
        <br><br><br>
        

        <!-- Add Course -->
       <a href="courselist.php" style="text-decoration: none;">
        <span style="font-size: 25px"><b><b><b>1. Course   &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b></b></b></span>
        <br><br>

        <!-- Enrolled Student List -->
       <a href="Studentlist.php" style="text-decoration: none;">
        <span style="font-size: 25px"><b>2.Enrolled Student list   &nbsp;    &nbsp; &nbsp; &nbsp; &nbsp;</b></span>
        <br><br>
		
        <!-- Payment -->
       <a href="payment.php" style="text-decoration: none;">
        <span style="font-size: 25px"><b><b><b>3.Payment  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;   &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   &nbsp; &nbsp; &nbsp;</b></b></b></span>
        <br><br>

       


    </div>
</div>
    
<?php include('footer.html')?>