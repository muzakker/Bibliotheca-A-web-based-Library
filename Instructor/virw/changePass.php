<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Change Password";
	include('header.php');
    require_once('model/userModel.php');
    $username = $_COOKIE['username'];
    $row = getUserByName($username);
?>

<?php include('instructorNav.php')?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php include('instructorSidePanel.php')?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="font-size: 30px;">
            <b> Change Password </b>
        </span>
        <hr><br><br><br><br><br><br>

        <form method="POST" action="controller/changePassCheck.php">
            <table align="center">
                <tr>
                    <td style="font-size: 20px;">Current Password &nbsp; &nbsp; &nbsp; &nbsp; :</td>
                    <td><input type="password" name="currentPass" value=""></td>
                </tr>
                <tr>
                    <td style="color:green; font-size: 20px;">New Password &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :</td>
                    <td><input type="password" name="newPass" value=""></td>	
                </tr>
                <tr>
                    <td style="color:red; font-size: 20px;">Retype New Password :</td>
                    <td><input type="password" name="rePass" value=""></td>
                </tr>
                <tr>
                    <td colspan="2">
                    <hr>
                        <input type="submit" name="submit" value="Submit" style="font-size: 20px;">
                        <input type="reset" value="Reset" style="font-size: 20px;">
                    </td>
                </tr>
            </table>
        </form>
    </div>
        
</div>

<?php include('footer.html')?>

<?php
	}else{
        header('location: signin.php');
    }
?>