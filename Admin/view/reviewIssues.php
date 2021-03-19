<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Review Issues";
	include('header.php');
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

        <!-- search box -->
        <input type="text" placeholder="Search by user, book, ..." style="font-size: 20px;">
        <button type="submit"><i class="fa fa-search" style="font-size: 20px;"></i></button>
        <hr><br><br>
        
        <!-- table for book list -->
        <table border="1" align="center">
            <caption style="font-size: 30px;">Issued Status</caption>
            
            <tr>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> # </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> User Name </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Book Name </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Issue ID </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Issued Date </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Returned Date </th>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 1 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> abc </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Fundamentals of Physics </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 101 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 02/03/2021 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Not Returned Yet </td>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 2 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> xyz </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> ABC of Chemistry </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 102 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 01/01/2021 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 09/01/2021 </td>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 3 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> prq </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Introduction to Circuit Analysis </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 103 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 09/01/2021 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Not Returned Yet </td>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 4 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> opi </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> ABC of Biology </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 104 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 10/02/2021 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 24/02/2021 </td>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 5 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> saif </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> The Power of Habit </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 105 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 01/03/2021 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 09/03/2021 </td>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 6 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> ashiq </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Eat That Frog </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 106 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 14/03/2021 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Not Returned Yet </td>
            </tr>

        </table>
        <br>

        <!-- penalize -->
        <a href="#" style="text-decoration: none;">
            <span style="font-size: 20px; background-color: crimson; border: none; color: black; padding: 10px 10px; border-radius: 10px;"><b> Penalize </b></span>
        </a>
    </div>
</div>

<?php include('footer.html')?>

<?php
	}else{
        header('location: signin.php');
    }
?>