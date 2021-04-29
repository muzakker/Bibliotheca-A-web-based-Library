<?php
	if(isset($_COOKIE['status'])){
?>
<?php
	$title = "Admin Dashboard";
	include('header.php');
    include('../../model/bookModel.php');
    include('../../model/issuedModel.php');
    include('../../model/userModel.php');
?>

<?php include('adminNav.php')?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php include('adminSidePanel.php')?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="color: black; font-size: 30px">
            <b>Admin Dashboard</b>
            <hr>
        </span>
        <br><br><br>
        <!-- registered users -->
        <i class="fas fa-users" style="font-size:30px; color: black;"></i>
        &nbsp;
        <span style="font-size: 25px"><b>Registered Users &nbsp; &nbsp; &nbsp; &nbsp;</b></span>
        <?php
            $user = getAllUser();
        ?>
        <span style="font-size: 25px"><b><?=sizeof($user)?> &nbsp; &nbsp; &nbsp; &nbsp;</b></span>
        <br><br>

        <!-- listed books -->
        <i class="fas fa-book" style="font-size:30px; color: black;"></i>
        &nbsp; &nbsp;
        <span style="font-size: 25px"><b>Listed Books &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b></span>
        <?php
            $book = getAllBook();
        ?>
        <span style="font-size: 25px"><b><?=sizeof($book)?>&nbsp; &nbsp; &nbsp; &nbsp;</b></span>
        <br><br>

        <!-- listed authors -->
        <i class="fas fa-user" style="font-size:30px; color: black;"></i>
        &nbsp; &nbsp;
        <span style="font-size: 25px"><b>Listed Authors &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b></span>
        <?php
            $sqlcomm = "SELECT DISTINCT author FROM book";
            $author = runSQLBook($sqlcomm);
        ?>
        <span style="font-size: 25px"><b><?=sizeof($author)?> &nbsp; &nbsp; &nbsp;</b></span>
        <br><br>

        <!-- listed categories -->
        <i class="fas fa-file-archive" style="font-size:30px; color: black;"></i>
        &nbsp; &nbsp;
        <span style="font-size: 25px"><b>Listed Categories &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b></span>
        <?php
            $sqlcomm = "SELECT DISTINCT category FROM book";
            $category = runSQLBook($sqlcomm);
        ?>
        <span style="font-size: 25px"><b><?=sizeof($category)?> &nbsp; &nbsp; &nbsp; &nbsp;</b></span>
        <br><br>

        <!-- book issued -->
        <i class="fas fa-bars" style="font-size:30px; color: black;"></i>
        &nbsp; &nbsp;
        <span style="font-size: 25px"><b> Book Issued  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b></span>
        <?php
           $issued = getAllIssue();
        ?>
        <span style="font-size: 25px"><b><?=sizeof($issued)?> &nbsp; &nbsp;</b></span>
        <br><br>

        <!-- book returned
        <i class="fas fa-recycle" style="font-size:30px; color: black;"></i>
        &nbsp; &nbsp;
        <span style="font-size: 25px"><b>Times Book Returned </b></span>
        <br><br> -->
    </div>
</div>
    
<?php include('footer.html')?>

<?php		
	}else{
		header('location: signin.php');
	}
?>
