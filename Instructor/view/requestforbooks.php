

<?php
	$title = "Request For Books";
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
            <b> Request For Books </b>
        </span>
        <hr><br><br>

        
            <form method="post" action="../controller/requestforbooksCheck.php" enctype="multipart/form-data">
                <table align="center">
                    <tr>
                        <td>
                            1.
                        </td>
                        <td>
                            <input type="text" name="name" value=""> &nbsp; &nbsp;
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
					      <tr>
                        <td>
                            2.
                        </td>
                        <td>
                            <input type="text" name="name" value=""> &nbsp; &nbsp;
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    
                    
                            
                    
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Submit" style="font-size: 20px;">
                            <input type="reset" value="Reset" style="font-size: 20px;">
                        </td>
                    </tr>
                </table>
            </form>

    </div>
</div>

<?php include('footer.html')?>
