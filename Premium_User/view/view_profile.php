<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "User Profile";
	include('header.php');
    require_once('../../model/userModel.php');
    $username = $_COOKIE['username'];
    $row = getUserByName($username);
?>

<?php include('premiumNav.php')?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php include('premiumSidePanel.php')?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="font-size: 30px;">
            <b> My Profile </b>
        </span>
        <hr><br>

        <!-- picture -->
        <img src="../../Admin/assets/images/<?php echo $row['filename'];?>" alt="jobair" height="200px" width="200px" style="border-radius: 50%">
        <br>
        <a href="#">Change</a>

        <br><br>
        <span style="font-size: 20px;"><u>Username</u> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><?php echo $row['username'];?>
        
        <br>
        <span style="font-size: 20px;"><u>Name</u> &nbsp; &nbsp; &nbsp; &nbsp;</span><?php echo $row['fullname'];?>

        <br>
        <span style="font-size: 20px;"><u>User Type</u> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><?php echo $row['type'];?>

        <br>
        <span style="font-size: 20px;"><u>Email</u></span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $row['email'];?>
        
        <br>
        <span style="font-size: 20px;"><u>Gender</u> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><?php echo $row['gender'];?>
        
        <br>
        <span style="font-size: 20px;"><u>Date of Birth</u>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><?php echo $row['dob'];?>
<br><br>
        <a href="edit_profile.php" ><b>Edit Profile</b></a>
                
    </div>
</div>

<?php include('footer.html')?>

<?php
	}else{
        header('location: signin.php');
    }
?>