<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Upgrade Requests";
	include('header.php');
    require_once('../../model/paymentModel.php');
?>

<?php 
    include('adminNav.php');
?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php include('adminSidePanel.php')?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="font-size: 30px;">
            <b> Upgrade Requests List </b>
        </span>
        <hr><br>
        <?php
            $row = getAllRequest();
        ?>
                
        <!-- table for request list -->
        <table border="1" align="center">
            <caption style="font-size: 30px;">Requests List for Member Upgrade</caption>
            
            <tr>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Payment ID </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Full Name </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Email </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Address </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Account Number </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Price (taka) </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> </th>
            </tr>

            <?php for($i = 0; $i < count($row); $i++){ ?>
            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$row[$i]['paymentId']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$row[$i]['FullName']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$row[$i]['Email']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$row[$i]['Address']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$row[$i]['Account_Number']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$row[$i]['price']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;">
                    <a href="upgradeUsers.php?fullname=<?=$row[$i]['FullName']?>">Upgrade</a>
                </td>
            </tr>
            <?php } ?>

        </table>

    </div>
</div>

<?php include('footer.html')?>
<?php
	}else{
		header('location: signin.php');
	}
?>
