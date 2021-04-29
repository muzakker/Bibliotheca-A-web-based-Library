<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Buy Book";
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
            <b> Buy Books</b>
        </span>
        <hr><br><br><br>

        <form method="POST" action="../controller/buybooksCheck.php" enctype="multipart/form-data">
            <table align="center">
			
			<tr>
                    <td>
                        Book ID
                    </td>
                    <td>
                        <input type="number" name="bookID" value="">
                    </td>
                </tr>

                <tr>
                    <td colspan="3">
                        <hr><br>
                    </td>
                </tr>
                <tr>
                    <td>
                       Book Name
                    </td>
                    <td>
                        <input type="text" name="bookname" value="">
                    </td>
                </tr>

                <tr>
                    <td colspan="3">
                        <hr><br>
                    </td>
                </tr>

                <tr>
                    <td>
                     Author Name
                    </td>
                    <td>
                        <input type="text" name="authorname" value="">
                    </td>
                </tr>
                
                <tr>
                    <td colspan="3">
                        <hr><br>
                    </td>
                </tr>
                
                <tr>
                    <td>
                         Date
                    </td>
                    <td><input type="number" name="dd" style="width:40px;" value=""> / <input type="number" name="mm" style="width:40px;" value="">	/ <input type="number" name="yyyy" style="width:60px;" value=""> <i>(dd/mm/yyyy)</i></td>
                </tr>

                <tr>
                    <td colspan="3">
                        <hr><br>
                    </td>
                </tr>
               
 <tr>
                    <td>
                     Description
                    </td>
                    <td>
                        <input type="text" name="description" value="">
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
						  <br>
        <a href="viewbuybooks.php">view </a>
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