<?php
	$title = "View Books";
	include('header.php');
    require_once('../../model/buybooksModel.php');
    $buybooksList = getAllBuyBooks();
?>

<?php include('instructorNav.php')?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php include('instructorSidePanel.php')?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="font-size: 30px;">
            <b> Books List </b>
        </span>
        <hr>

       
        
        <!-- table for course list -->
        <table border="1" align="center">
           
            
            <tr>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Book ID </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Book Name </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Author Name </th>
               
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Date </th>
				  <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Description </th>
             
             
            </tr>

            <?php for($i = 0; $i < count($buybooksList); $i++){ ?>
            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$buybooksList[$i]['bookID']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$buybooksList[$i]['bookname']?> </td>
               <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$buybooksList[$i]['authorname']?> </td>
              
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$buybooksList[$i]['buydate']?> </td>
				<td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$buybooksList[$i]['description']?> </td>
             
            
            </tr>
            <?php } ?>

        </table>
    </div>
</div>

<?php include('footer.html')?>