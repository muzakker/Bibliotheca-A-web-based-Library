<?php
    if(isset($_COOKIE['status'])){
?>

<?php
	$title = "edit_profile";
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
            <b>User Edit Profile </b>
            <hr>
        </span>
        <br><br><br>

Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:<input type="text" name="username" value=""><hr>
Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:<input type="mail" name="mail" value=""><hr>
Gender &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:<input type="radio" name="Gender" value="male">Male
<input type="radio" name="Gender" value="Female">Female
<input type="radio" name="Gender" value="other">Other
<hr>
Date Of Birth:<input type="text" name="DOF" value=""><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<i>(dd/mm/yyyy)</i>

<hr>
<input type="submit" name="submit" value="submit">


    </div>
</div>
    
<?php include('footer.html')?>

<?php       
    }else{
        header('location: signin.php');
    }
?>