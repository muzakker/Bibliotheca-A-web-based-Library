<?php
	if(isset($_COOKIE['status'])){
?>

<?php
    $title = "User Home";
    include('header.php');
    require_once('../../model/userModel.php');
?>
<!-- upper navigation bar -->
<?php include('userNav.php');?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">
    <!-- side panel -->
    <?php
        include('userSidepanel.php');
    ?>    

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <span style="color: black; font-size: 40px">
            Welcome to Bibliotheca
            <br>
            <?php
                $username = $_COOKIE['username'];
                $row = getUserByName($username);
                echo $row['fullname'];
            ?>
        </span>
        <br><br><br>
        <img src="../assets/library.jpg" alt="library" height=350px" width="600px">
    </div>
</div>
<?php include('footer.html')?>

<?php		
	}else{
		header('location: ../../Admin/view/signin.php');
	}
?>