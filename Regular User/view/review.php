<?php
    session_start();
    if(isset($_SESSION['status'])){
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

    <?php include('userSidepanel.php');?>

    <!-- main panel -->
            <div id="side_panel" style="width: 930px; background-color:#caefff; font-family:Arial;" align="center">
    
            <form method="post" action="../controller/reviewCheck.php" style="position: absolute; margin: 20px; max-width: 300px; padding: 16px; background-color: white; display: inline-block; margin-left: -10%; margin-right: -10%; text-align: left;">
            <h1>Review a Book</h1>

            <b id="rbn">Book Name</b>
            <input type="text" name="rbookName" id="rbookName" onblur="ValidateReviewBookName()" placeholder="Enter Book Name"  required style="width: 270px; padding: 15px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b id="atn">Author-Name</b>
            <input type="text" name="rauthorName" id="rAuthorName" onblur="ValidateAuthorName()" placeholder="Author-Name"  required style="width: 270px; padding: 15px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b>Write Something about he book</b>
            <textarea cols="37" rows="7" name="rdescription" placeholder="Description"></textarea>
    
            <br>
            <input type="submit" name="submit" value="submit" style="background-color: #4CAF50; color: white; padding: 16px 20px; border: none; cursor: pointer; width: 100%; opacity: 0.9;">
        </form>
    </div>
</div>
 <script src="./check_js.js"></script>    
<?php }else{include('footer.html');}?>