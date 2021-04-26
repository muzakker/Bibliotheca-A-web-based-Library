<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "instructor Home";
	include('header.php');
    require_once('model/userModel.php');
?>
<?php include('instructorNav.php')?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

<?php include('instructorSidePanel.php')?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <span style="color: black; font-size: 40px">
            Welcome to Bibliotheca
            <br>
            <!-- php code-->
            <?php
                $username = $_COOKIE['username'];
                $row = getUserByName($username);
                echo $row['fullname'];
            ?>
        </span>
        <br><br><br>
        <img src="library.jpg" alt="library" height="350px" width="600px">
    </div>
</div>
    
<?php include('footer.html')?>

<?php		
	}else{
		header('location: signin.php');
	}
?>
