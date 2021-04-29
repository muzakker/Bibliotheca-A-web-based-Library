<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Borrow Books";
	include('header.php');
?>

<?php include('instructorNav.php')?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php include('instructorSidePanel.php')?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="font-size: 30px;">
            <b>Borrow Books </b>
        </span>
        <hr><br><br><br>

        <form method="POST" action="../controller/borrowbookcheck.php" enctype="multipart/form-data">
            <table align="center">
                <tr>
                    <td>
                        Duration
                    </td>
                    <td>
                        <input type="number" name="duration" value="">
                    </td>
                </tr>

                <tr>
                    <td colspan="3">
                        <hr><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        User Name
                    </td>
                    <td>
                        <input type="text" name="username" value="">
                    </td>
                </tr>
                
                <tr>
                    <td colspan="3">
                        <hr><br>
                    </td>
                </tr>
                
               
                
                <tr>
                    <td colspan="3">
                        <input type="submit" name="submit" value="Add" style="font-size: 20px;">
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
        header('location: ../../Admin/view/signin.php');
    }
?>