<?php
    if(isset($_COOKIE['status'])){
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
    
        <div class="issueReturn">
                
                <fieldset><h3>Return Book</h3>
            <form action="userPage.php" class="issueReturnForm">
                <input type="text" name="returnId" required autofocus placeholder="Issued-Id"  required style="width: 270px; padding: 15px; margin: 5px 0 22px 0;"><br><br>

                <input type="text" name="returnBookId" required autofocus placeholder="Book-Name" required style="width: 270px; padding: 15px; margin: 5px 0 22px 0;""><br>

                <input type="submit" name="returnBtn" value="<<Return">
            </form>
            </fieldset>
        </div>

    </div>
</div>
     
<?php }else{ include('footer.html');}?>