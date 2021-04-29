<?php
    if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Premium_User Dashboard";
	include('header.php');
?>
<!-- upper navigation bar -->
<?php include('premiumNav.php');?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">
    <!-- side panel -->
    <?php
    include('premiumSidepanel.php');
    ?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="color: black; font-size: 30px">
            <b>Premium_User Dashboard</b>
            <hr>
        </span>
        <br><br><br>

        <!-- My Cart Books List -->
        <i class="fas fa-book" style="font-size:30px; color: black;"></i>
        &nbsp; 
         <a href="myCartBooks.php" >
        <span style="font-size: 25px"><b>My Cart Books List </b></span>
        </a>
        <br><br>

        <!-- Buy Book List -->
        <i class="fas fa-book" style="font-size:30px; color: black;"></i>
        &nbsp; 
        <a href="buyBooksList.php" >
        <span style="font-size: 25px"><b>Buy Book List </b></span>
        </a>

        <br><br>

        <!-- Book Authors List -->
        <i class="fas fa-user" style="font-size:30px; color: black;"></i>
        &nbsp; 
        <a href="#" >
        <span style="font-size: 25px"><b>Listed Book Authors </b></span>
        </a>

        <br><br>

        <!-- View Profile -->
        <i class="fas fa-user" style="font-size:30px; color: black;"></i>
        &nbsp; 
        <a href="view_profile.php" >
        <span style="font-size: 25px"><b>View Profile</b></span>
        </a>

        <br><br>

        <!-- Edit Profile -->
        <i class="fas fa-user" style="font-size:30px; color: black;"></i>
        &nbsp; 
        <a href="edit_profile.php" >
        <span style="font-size: 25px"><b>Edit Profile</b></span>
        </a>

        <br><br>


    </div>
</div>
    
<?php include('footer.html')?>

<?php       
    }else{
        header('location: ../../Admin/view/signin.php');
    }
?>