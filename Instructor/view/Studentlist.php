<?php
	$title = "Student List";
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
            <b> Student List </b>
        </span>
        <hr>

        <!-- search box -->
       
        
        <!-- table for book list -->
        <table border="1" align="center">
            
            
            <tr>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> # </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> student Name </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Email </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Gender </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> DOB  </th>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 1 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Samia Islam </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> samia@gmail.com</td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Female </td>
                
				
				
				
				
				<td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 4/6/2001 </td>
            </tr>

            <tr>
                 <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 2 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Tuhin Islam </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> tuhin@gmail.com</td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> male </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 2/6/2008 </td>
            </tr>

            <tr>
                 <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 3</td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Imam Rahman </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> imam@gmail.com</td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> male </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 5/6/2001 </td>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 4 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Meera Hossain </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> meera@gmail.com </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Female</td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 2/5/1998 </td>
            </tr>

            <tr>
                 <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 5 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Akash Ahmed </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> akash@gmail.com</td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> male </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 2/8/2000 </td>
            </tr>


        </table>
    </div>
</div>

<?php include('footer.html')?>
















