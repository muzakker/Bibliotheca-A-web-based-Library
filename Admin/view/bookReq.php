<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Book Requests";
	include('header.php');
    require_once('../../model/requestModel.php');
    $reqList = getAllBookRequest();
?>

<?php include('adminNav.php')?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php include('adminSidePanel.php')?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="font-size: 30px;">
            <b> Book Requests </b>
        </span>
        <hr>
        
        <!-- table for request list -->
        <table border="1" align="center">
            <caption style="font-size: 30px;">Requested Books</caption>
            
            <tr>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Request ID </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Number of Books </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Book Name </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Author </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;">  </th>
            </tr>

            <?php for($i = 0; $i < count($reqList); $i++){ ?>
            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$reqList[$i]['requestId']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$reqList[$i]['numberofBooks']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$reqList[$i]['bookName']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$reqList[$i]['authorName']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;">
				    <a href="addReqBook.php?requestId=<?=$reqList[$i]['requestId']?>"> Add Book </a>
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