<?php
	$title = "Admin Dashboard";
	include('header.php');
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
        <br><br>

        <!-- listed books -->
        <i class="fas fa-book" style="font-size:30px; color: black;"></i>
        &nbsp; &nbsp;
        <span style="font-size: 25px"><b>Listed Books &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b></span>
        <br><br>

        <!-- listed authors -->
        <i class="fas fa-user" style="font-size:30px; color: black;"></i>
        &nbsp; &nbsp;
        <span style="font-size: 25px"><b>Listed Authors &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b></span>
        <br><br>

        <!-- listed categories -->
        <i class="fas fa-file-archive" style="font-size:30px; color: black;"></i>
        &nbsp; &nbsp;
        <span style="font-size: 25px"><b>Listed Categories &nbsp; &nbsp; &nbsp;</b></span>
        <br><br>

        <!-- book issued -->
        <i class="fas fa-bars" style="font-size:30px; color: black;"></i>
        &nbsp; &nbsp;
        <span style="font-size: 25px"><b>Times Book Issued &nbsp; &nbsp;</b></span>
        <br><br>

        <!-- book returned -->
        <i class="fas fa-recycle" style="font-size:30px; color: black;"></i>
        &nbsp; &nbsp;
        <span style="font-size: 25px"><b>Times Book Returned </b></span>
        <br><br>
    </div>
</div>
    
<?php include('footer.html')?>