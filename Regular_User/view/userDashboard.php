<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "User Home";
	include('header.php');
    include('../../model/bookModel.php');
?>
<!-- upper navigation bar -->
<?php include('userNav.php');?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">
    <!-- side panel -->
    <?php
    include('userSidepanel.php');
    ?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="color: black; font-size: 30px">
            <b>User Dashboard</b>
            <hr>
        </span>
        <br><br><br>

        <!-- listed books -->
        <i class="fas fa-book" style="font-size:30px; color: black;"></i>
        &nbsp; &nbsp;
        <span style="font-size: 25px"><b>Listed Books &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b></span>
        <?php
            $book = getAllBook();
        ?>
        <span style="font-size: 25px"><b><?=sizeof($book)?>&nbsp; &nbsp; &nbsp; &nbsp;</b></span>
        <br><br>


        <!-- listed categories -->
        <i class="fas fa-file-archive" style="font-size:30px; color: black;"></i>
        &nbsp; &nbsp;
        <span style="font-size: 25px"><b>Listed Categories &nbsp; &nbsp; &nbsp; &nbsp;</b></span>
        <?php
            $sqlcomm = "SELECT DISTINCT category FROM book";
            $category = runSQLBook($sqlcomm);
        ?>
        <span style="font-size: 25px"><b><?=sizeof($category)?> &nbsp; &nbsp; &nbsp; &nbsp;</b></span>
        <br><br>


    </div>
</div>
    
<?php include('footer.html');?>
<?php		
	}else{
		header('location: ../../Admin/view/signin.php');
	}
?>