<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Edit Book";
	include('header.php');
    require_once('../../model/bookModel.php');
?>

<?php include('adminNav.php')?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php include('adminSidePanel.php')?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="font-size: 30px;">
            <b> Edit Book Details </b>
        </span>
        <hr><br><br>

            <?php 
                $bookID = $_GET['bookID'];
                $row = getBookByID($bookID);
            ?>

            <script type="text/javascript" src="../assets/js/editBookCheck.js"></script>

            <form id="editBookForm" method="post" onsubmit="return validationEditBook()" action="../controller/editBookCheck.php?bookID=<?=$row['bookID']?>" enctype="multipart/form-data">
            <table align="center">
                <tr>
                    <td>
                        Book Name
                    </td>
                    <td>
                        <input type="text" name="bookname" value="<?=$row['bookname']?>">
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
                            <option value="" selected>not selected</option>
                            <option value="physics">Physics</option>
                            <option value="chemistry">Chemistry</option>
                            <option value="biology">Biology</option>
                            <option value="self_help">Self Help</option>
                            <option value="electrical_engineering">Electrical Engineering</option>
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
                    <td><input type="text" name="author" value="<?=$row['author']?>"></td>
                </tr>
                
                <tr>
                    <td colspan="3">
                        <hr><br>
                    </td>
                </tr>

                <tr>
                    <?php 
                        $str=$row['published'];
                        $dob=explode("-", $str);
                        $day=$dob[2];
                        $month=$dob[1];
                        $year=$dob[0]; 
                    ?>
                    <td>
                        Published Date
                    </td>
                    <td>
                        <input type="number" name="dd" style="width:40px;" value="<?=$day?>"> / <input type="number" name="mm" style="width:40px;" value="<?=$month?>">	/ <input type="number" name="yyyy" style="width:60px;" value="<?=$year?>"> <i>(dd/mm/yyyy)</i>
                    </td>
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
                    <td><input type="file" name="picture" value="<?=$row['filename']?>"></td>
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
                    <td><input type="number" name="price" value="<?=$row['price']?>"></td>
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
        header('location: signin.php');
    }
?>