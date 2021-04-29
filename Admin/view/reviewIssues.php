<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Review Issues";
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
            <b> Manage Issued Book </b>
        </span>
        <hr>

        <script type="text/javascript" src="../assets/js/searchIssue.js"></script>
        <!-- search box -->
        <input type="text" id="searchIssue" onkeyup="searchIssue()" placeholder="Search by user, book, ..." style="font-size: 20px;">
        <button type="button" onclick="searchIssue()"><i class="fa fa-search" style="font-size: 20px;"></i></button>
        <p id="result" align="center"></p>
        <hr><br><br>
        
        <!-- table for book list -->
        <table border="1" align="center">
            <caption style="font-size: 30px;">Issued Status</caption>
            
            <tr>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Issue ID </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> User Name </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Book Name </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Issued Date </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Returned Date </th>
            </tr>

            <?php for($i = 0; $i < count($issueList); $i++){ ?>
            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$issueList[$i]['issueID']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$issueList[$i]['username']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$issueList[$i]['bookname']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$issueList[$i]['issuedDate']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$issueList[$i]['returnedDate']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;">
                    <a href="penalize.php?issueID=<?=$issueList[$i]['issueID']?>"> Penalize</a> | 
				    <a href="../controller/removeIssue.php?issueID=<?=$issueList[$i]['issueID']?>"> Remove </a>
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