<?php
	if(isset($_COOKIE['status'])){
?>
<?php
	$title = "Book Details";
	include('header.php');
    require_once('model/bookModel.php');
    $bookID = $_GET['bookID'];
    $book = getBookByID($bookID);
?>

<?php include('instructorNav.php')?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php include('instructorSidePanel.php')?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="font-size: 30px;">
            <b> <?=$book['bookname']?> </b>
        </span>
        <hr>

        <!-- picture -->
        <img src="../assets/<?php echo $book['filename'];?>" alt="<?=$book['bookname']?>" height="300px" width="250px">
        <br><br>

        <!-- Information -->
        <table align="center">
            <tr>
                <td>
                    <b>Book ID</b>
                </td>

                <td>
                    <?=$book['bookID']?>
                </td>
            </tr>

            <tr>
                <td>
                    <b>Book Name</b>
                </td>

                <td>
                    <?=$book['bookname']?>
                </td>
            </tr>

            <tr>
                <td>
                    <b>Author</b>
                </td>

                <td>
                    <?=$book['author']?>
                </td>
            </tr>

            <tr>
                <td>
                    <b>Category</b>
                </td>

                <td>
                    <?=$book['category']?>
                </td>
            </tr>

            <tr>
                <td>
                    <b>Published Date</b>
                </td>

                <td>
                    <?=$book['published']?>
                </td>
            </tr>

            <tr>
                <td>
                    <b>Price</b>
                </td>

                <td>
                    <?=$book['price']?> Taka
                </td>
            </tr>
        </table>
        <hr>
        
        <!-- Buy Book -->
        <a href="bookborrow.php"><b style="font-size: 20px;">Buy the Book</b></a> 
    </div>
</div>

<?php include('footer.html')?>
<?php
	}else{
		header('location: signin.php');
	}
?>
