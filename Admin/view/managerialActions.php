<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Managerial Actions";
	include('header.php');
    require_once('../../model/userModel.php');
    $usersList = getAllUser();
?>

<?php include('adminNav.php')?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php include('adminSidePanel.php')?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="font-size: 30px;">
            <b> Manage Users </b>
        </span>
        <hr><br>

        <script type="text/javascript" src="../assets/js/searchUser.js"></script>
        <!-- search box -->
        <input type="text" id="searchUser" onkeyup="searchUser()" placeholder="Search users..." style="font-size: 20px;">
        
        <button type="button" onclick="searchUser()"><i class="fa fa-search" style="font-size: 20px;"></i></button>
        <p id="result" align="center"></p>
        <hr><br><br>
        
        <!-- table for user list -->
        <table border="1" align="center">
            <caption style="font-size: 30px;">Registered Users</caption>
            
            <tr>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> # </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Username </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Full Name </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Gender </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Email </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Date of Birth </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> User Type </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Actions </th>
            </tr>

            <?php for($i = 0; $i < count($usersList); $i++){ ?>
            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$usersList[$i]['id']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$usersList[$i]['username']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$usersList[$i]['fullname']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$usersList[$i]['gender']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$usersList[$i]['email']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$usersList[$i]['dob']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$usersList[$i]['type']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;">
                    <a href="editUser.php?username=<?=$usersList[$i]['username']?>"> Edit</a> | 
				    <a href="../controller/removeUser.php?username=<?=$usersList[$i]['username']?>"> Remove </a>
                </td>
            </tr>
            <?php } ?>
        </table>
        <hr><br>

        <!-- upgrade request -->
        <a href="upgradeRequest.php" style="text-decoration: none;">
            <span style="font-size: 20px; background-color: #caefff; border: none; color: black; padding: 10px 10px; border-radius: 10px;"><b> Upgrade Requests </b></span>
        </a>

        <!-- &nbsp; -->
        <!-- block/unblock user -->
        <!-- <input type="submit" value="Block/Unblock" style="font-size: 20px; background-color: crimson; border: none; color: black; padding: 10px 35px; border-radius: 10px;"> -->

        <!-- &nbsp; -->
        <!-- remove user -->
        <!-- <input type="submit" value="Remove" style="font-size: 20px; background-color: red; border: none; color: black; padding: 10px 35px; border-radius: 10px;"> -->

    </div>
</div>

<?php include('footer.html')?>

<?php
	}else{
        header('location: signin.php');
    }
?>