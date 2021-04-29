<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "User Penalization";
	include('header.php');
    require_once('../../model/issuedModel.php');
    $issueList = getAllIssue();
?>

<?php include('adminNav.php')?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php include('adminSidePanel.php')?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="font-size: 30px;">
            <b> Fill Up Penalize Form </b>
        </span>
        <hr><br>

        <!-- search box -->
        <input type="text" placeholder="Search users..." style="font-size: 20px;">
        
        <button type="submit"><i class="fa fa-search" style="font-size: 20px;"></i></button>
        <hr><br><br>

        <?php 
            $issueID=$_GET['issueID'];
            $row = getIssueByID($issueID);
        ?>
        <form method="post" action="../controller/penalizeCheck.php?issueID=<?=$row['issueID']?>">
            <table align="center">
                <tr>
                    <td>
                        Issue ID
                    </td>
                    <td>
                        <?=$row['issueID']?>
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
                
                <tr>
                    <td>
                        Book Name
                    </td>
                    <td>
                       <?=$row['bookname']?>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Issued Date
                    </td>
                    <td>
                        <?=$row['issuedDate']?>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>

                <tr>
                    <td>
                        Returned Date
                    </td>
                    <td>
                        <?=$row['returnedDate']?>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>

                <tr>
                    <td>
                        Penalty Amount
                    </td>
                    <td>
                        <input type="int" name="penalty" value="">
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