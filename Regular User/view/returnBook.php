<?php
    session_start();
    if(isset($_SESSION['status'])){
?>
<?php
    $title = "User Home";
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
            <div id="side_panel" style="width: 930px; background-color:#caefff; font-family:Arial;" align="center">
    
            <form method="post" action="../controller/returnbookCheck.php" style="position: absolute; margin: 20px; max-width: 300px; padding: 16px; background-color: white; display: inline-block; margin-left: -10%; margin-right: -10%; text-align: left;">
            <h1>Return Book</h1>

            <b id="bnumber" >Booknumber</b>
            <input type="number" name="booknumber" id="booknumber"  placeholder="Book-Number"  required style="width: 270px; padding: 15px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b id="rbname">Issued-Id</b>
            <input type="number" name="returnId" id="returnId" placeholder="Issued-Id"  required style="width: 270px; padding: 15px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b id="bn">Book-Name</b>
            <input type="text" name="returnBookName" id="returnBookName" onblur="ValidateReturnBookName()" placeholder="Book-Name"  required style="width: 270px; padding: 15px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">
    
            <br>
            <input type="submit" name="submit" value="submit" style="background-color: #4CAF50; color: white; padding: 16px 20px; border: none; cursor: pointer; width: 100%; opacity: 0.9;">
        </form>
        </div>

    </div>
</div>
<script src="../assets/js/check_js.js"></script>
<?php }else{ include('footer.html');}?>