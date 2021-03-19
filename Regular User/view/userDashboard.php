<?php
    if(isset($_COOKIE['status'])){
?>
<?php
	$title = "Admin Home";
	include('header.php');
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
        <br><br>

        <!-- listed categories -->
        <i class="fas fa-user" style="font-size:30px; color: black;"></i>
        &nbsp; &nbsp;
        <span style="font-size: 25px"><b>Listed Categories &nbsp; &nbsp; &nbsp;</b></span>
        <br><br>


    </div>
</div>
    
<?php }else{ include('footer.html');}?>