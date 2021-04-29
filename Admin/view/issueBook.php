<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Issue Book";
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
            <b> Select User to Issue </b>
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
                    <a href="issueSelect.php?username=<?=$usersList[$i]['username']?>"> Select</a>
                </td>
            </tr>
            <?php } ?>
        </table>
        <br>

    </div>
</div>

<?php include('footer.html')?>

<?php
	}else{
        header('location: signin.php');
    }
?>