<?php
	$title = "Library Actions";
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
            <b> Manage Library </b>
        </span>
        <hr><br><br><br><br><br><br>
        
        <!-- issue books -->
        <a href="#" style="text-decoration: none;">
            <span style="font-size: 20px; background-color: #caefff; border: none; color: black; padding: 10px 10px; border-radius: 10px;"><b> Issue Books </b></span>
        </a>

        <br><br><br><br>
        <!-- penalty status -->
        <a href="#" style="text-decoration: none;">
            <span style="font-size: 20px; background-color: #caefff; border: none; color: black; padding: 10px 10px; border-radius: 10px;"><b> Penalty Status </b></span>
        </a>

        <br><br><br><br>
        <!-- handle book requests -->
        <a href="#" style="text-decoration: none;">
            <span style="font-size: 20px; background-color: #caefff; border: none; color: black; padding: 10px 10px; border-radius: 10px;"><b> Handle Book Request </b></span>
        </a>

    </div>
</div>

<?php include('footer.html')?>