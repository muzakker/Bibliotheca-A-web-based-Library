<?php
    if(isset($_COOKIE['status'])){
?>
<?php
    $title = "Book Details";
    include('header.php');
    require_once('../model/bookModel.php');
    $bookID = $_GET['bookID'];
    $book = getBookByID($bookID);
?>

<?php include('userNav.php')?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php include('userSidePanel.php')?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="font-size: 30px;">
            <b> Book List </b>
        </span>
        <hr>

        <script type="text/javascript" src="../assets/js/searchBook.js"></script>
        <!-- search box -->
        <input type="text" id="search" onkeyup="searchBook()" placeholder="Search by book, author, ..." style="font-size: 20px;">
        <button type="button" onclick="searchBook()"><i class="fa fa-search" style="font-size: 20px;"></i></button>
        <p id="result" align="center"></p>
        <hr><br><br>
                
        <!-- table for book list -->
        <table border="1" align="center">
            <caption style="font-size: 30px;">Listed Books</caption>
            
            <tr>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Book ID </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Book Name </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Category </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Author </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Published Date </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Price (taka) </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Buy</th>
            </tr>

            <?php for($i = 0; $i < count($book); $i++){ ?>
            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$book[$i]['bookID']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$book[$i]['bookname']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$book[$i]['category']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$book[$i]['author']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$bookList[$i]['published']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$book[$i]['price']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;">
                    <a href="bookDetails.php?bookID=<?=$book[$i]['bookID']?>">Details</a>
                </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;">
                <a href="payment.php?bookID=<?=$book[$i]['bookID']?>">Buy this book </a>
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
