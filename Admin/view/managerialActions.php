<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Managerial Actions";
	include('header.php');
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

        <!-- search box -->
        <input type="text" placeholder="Search users..." style="font-size: 20px;">
        <button type="submit"><i class="fa fa-search" style="font-size: 20px;"></i></button>
        <hr><br><br>
        
        <!-- table for user list -->
        <table border="1" align="center">
            <caption style="font-size: 30px;">Registered Users</caption>
            
            <tr>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> # </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Username </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Name </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Email </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Date of Birth </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> User Type </th>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 1 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> abc </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Mr. ABC </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> abc@gmail.com </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 01/01/1997 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Regular </td>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 2 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> xyz </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Mr. XYZ </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> xyz@gmail.com </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 01/02/1998 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Premium </td>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 3 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> saif </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Mr. Saif </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> saif@outlook.com </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 02/02/1990 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Instructor </td>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 4 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> rafid </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Mr. Rafid </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> rafid@yahoo.com </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 03/03/2000 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Regular </td>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 5 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> rasheeq </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Mr. Rasheeq </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> rasheeq@gmail.com </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 05/05/2001 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Premium </td>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 6 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> ashiq </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Mr. Ashiq </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> ashiq@outlook.com </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 10/01/1998 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Regular </td>
            </tr>

        </table>
        <br>

        <!-- upgrade user -->
        <a href="upgradeUsers.php" style="text-decoration: none;">
            <span style="font-size: 20px; background-color: #caefff; border: none; color: black; padding: 10px 10px; border-radius: 10px;"><b> Upgrade/Downgrade </b></span>
        </a>

        &nbsp;
        <!-- block/unblock user -->
        <input type="submit" value="Block/Unblock" style="font-size: 20px; background-color: crimson; border: none; color: black; padding: 10px 35px; border-radius: 10px;">

        &nbsp;
        <!-- remove user -->
        <input type="submit" value="Remove" style="font-size: 20px; background-color: red; border: none; color: black; padding: 10px 35px; border-radius: 10px;">

    </div>
</div>

<?php include('footer.html')?>

<?php
	}else{
        header('location: signin.php');
    }
?>