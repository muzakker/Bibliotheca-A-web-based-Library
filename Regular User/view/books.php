<?php
    if(isset($_COOKIE['status'])){
?>
<?php
	$title = "View Books";
	include('header.php');
?>
<?php include('userNav.php');?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php
    include('userSidepanel.php');
    ?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="font-size: 30px;">
            <b> Book List </b>
        </span>
        <hr>

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
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Buy </th>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 1 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Fundamentals of Physics </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Physics </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Halliday, Resnick </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 400 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <a href="payment.php">Buy this Book </a></td>

            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 2 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> ABC of Chemistry </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Chemistry </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> S. P. Jauhar </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 300 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <a href="payment.php">Buy this Book </a></td>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 3 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Introduction to Circuit Analysis </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Electrical Engineering </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Robert Boylestad </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 250 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <a href="payment.php">Buy this Book </a></td>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 4 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> ABC of Biology </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Biology </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Dr. B.B. Arora & A.K. Sabharwal </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 250 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <a href="payment.php">Buy this Book </a></td>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 5 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> The Power of Habit </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Self Help </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Charles Duhigg </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 350 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <a href="payment.php">Buy this Book </a></td>
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 6 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Eat That Frog </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Self Help </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Brian Tracy </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 150 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <a href="payment.php">Buy this Book </a></td>
            </tr>

        </table>
    </div>
</div>

<?php }else{ include('footer.html'); }?>