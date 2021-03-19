<?php
	$title = "Upgrade Users";
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
            <b> Upgrade/Downgrade Users </b>
        </span>
        <hr><br>

        <!-- form for type change -->
        <form method="POST" action="../controller/upgradeUserCheck.php">
            <table align="center">
                <tr>
                    <td>
                        User Name
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <hr><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        Current User Type
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <hr><br>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Upgrade/Downgrade Type
                    </td>
                    <td>
                        <select name="usertype" id="usertype">
                            <option value="" selected>not selected</option>
                            <option value="regular">Regular</option>
                            <option value="premium">Premium</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <hr><br>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Update Info" style="font-size: 20px;">
                        <input type="reset" value="Reset" style="font-size: 20px;">
                    </td>
                </tr>
            </table>
	</form>

               
        

    </div>
</div>

<?php include('footer.html')?>