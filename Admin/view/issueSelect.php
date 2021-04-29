<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Issue Book";
	include('header.php');
    require_once('../../model/userModel.php');
?>

<?php include('adminNav.php')?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php include('adminSidePanel.php')?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="font-size: 30px;">
            <b> Fill up form to Issue Book </b>
        </span>
        <hr><br><br>

            <?php 
                $username=$_GET['username'];
                $row = getUserByName($username);
            ?>

            <script type="text/javascript" src="../assets/js/issueFormCheck.js"></script>

            <form id="issueForm" method="post" onsubmit="return validationIssue()" action="../controller/issueSelectCheck.php?username=<?=$row['username']?>">
                <table align="center">
                    <tr>
                        <td>
                            Issue ID
                        </td>
                        <td>
                            <input type="int" name="issueID" value=""> &nbsp; &nbsp;
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            username
                        </td>
                        <td>
                           <?=$row['username']?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    
                    <!-- Select Option Implementing -->
                    <?php
                        include('../../model/bookModel.php');
                        $row = getAllBook();

                    ?>
                    <tr>
                        <td>
                            Book Name
                        </td>
                        <td>
                            <select name="bookname" id="">
                                <?php for($i = 0; $i < count($row); $i++){?>
                                    <option value="<?=$row[$i]['bookname']?>"><?=$row[$i]['bookname']?></option>
                                <?php }?>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <fieldset>
                            <legend>Issue Date</legend>
                            <input type="number" name="dd1" style="width:40px;" value=""> / <input type="number" name="mm1" style="width:40px;" value="">	/ <input type="number" name="yyyy1" style="width:60px;" value=""> <i>(dd/mm/yyyy)</i>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>

					<tr>
                        <td colspan="2">
                            <fieldset>
                            <legend>Probable Return Date</legend>
                            <input type="number" name="dd2" style="width:40px;" value=""> / <input type="number" name="mm2" style="width:40px;" value="">	/ <input type="number" name="yyyy2" style="width:60px;" value=""> <i>(dd/mm/yyyy)</i>
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

<?php
	}else{
        header('location: signin.php');
    }
?>