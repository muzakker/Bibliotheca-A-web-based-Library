

<?php
	$title = "Add Books";
	include('header.php');
?>

<?php include('premiumNav.php')?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php include('premiumSidePanel.php')?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="font-size: 30px;">
            <b> Add Books </b>
        </span>
        <hr><br><br><br>

        <form method="POST" action="../controller/addBookCheck.php" enctype="multipart/form-data">
            <table align="center">
                <tr>
                    <td>
                        Book ID
                    </td>
                    <td>
                        <input type="number" name="bookID" value="23">
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
                        <input type="text" name="bookname" value="The Intelligent Investor">
                    </td>
                </tr>
                
                <tr>
                    <td colspan="3">
                        <hr><br>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Select Category
                    </td>
                    <td>
                        <select name="category" id="category">
                            <option value="" >not selected</option>
                            <option value="story_book" >Story Book</option>
                            <option value="comics">Comics</option>
                            <option value="novel">Novel</option>
                            <option value="horror_story_book">Horror Story Book</option>
                            <option value="self_help" selected>Self Help</option>
                            
                        </select>
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
                    <td><input type="text" name="author" value="Benjamin Graham"></td>
                </tr>
                
                <tr>
                    <td colspan="3">
                        <hr><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        Published Date
                    </td>
                    <td><input type="number" name="dd" style="width:40px;" value="26"> / <input type="number" name="mm" style="width:40px;" value="12">	/ <input type="number" name="yyyy" style="width:60px;" value="2013"> <i>(dd/mm/yyyy)</i></td>
                </tr>

                <tr>
                    <td colspan="3">
                        <hr><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        Choose a Cover Photo
                    </td>
                    <td><input type="file" name="picture" ></td>
                </tr>

                <tr>
                    <td colspan="3">
                        <hr><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        Price
                    </td>
                    <td><input type="number" name="price" value="110"></td>
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

