<?php
	$title = "Inventory";
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
            <b> Manage Inventory </b>
        </span>
        <hr><br>

        <!-- search box -->
        <input type="text" placeholder="Search by book, author, ..." style="font-size: 20px;">
        <button type="submit"><i class="fa fa-search" style="font-size: 20px;"></i></button>
        <hr><br><br>
        
        <!-- table for book list -->
        <table border="1" align="center">
            <caption style="font-size: 30px;">Listed Books</caption>
            
            <tr>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> # </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Book Name </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Category </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Author </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Price (taka) </th>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 1 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Fundamentals of Physics </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Physics </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Halliday, Resnick </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 400 </td>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 2 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> ABC of Chemistry </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Chemistry </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> S. P. Jauhar </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 300 </td>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 3 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Introduction to Circuit Analysis </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Electrical Engineering </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Robert Boylestad </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 250 </td>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 4 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> ABC of Biology </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Biology </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Dr. B.B. Arora & A.K. Sabharwal </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 250 </td>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 5 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> The Power of Habit </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Self Help </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Charles Duhigg </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 350 </td>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 6 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Eat That Frog </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Self Help </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Brian Tracy </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 150 </td>
            </tr>

        </table>
        <br>

        <!-- add book -->
        <a href="addBooks.php" style="text-decoration: none;">
            <span style="font-size: 20px; background-color: #caefff; border: none; color: black; padding: 10px 10px; border-radius: 10px;"><b> Add Books </b></span>
        </a>
        &nbsp;

        <!-- remove book -->
        <input type="submit" value="Delete" style="font-size: 20px; background-color: red; border: none; color: black; padding: 10px 35px; border-radius: 10px;">

    </div>
</div>

<?php include('footer.html')?>