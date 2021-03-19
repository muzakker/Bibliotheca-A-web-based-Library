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
    <form class="requestForm">
        <fieldset>
            <h3>Request For a Book</h3>
                <div class="formInput">
                    <input type="text" name="rbookName"  required autofocus placeholder="Book-Name" required style="width: 270px; padding: 15px; margin: 5px 0 22px 0;">
                </div><br>

                <div class="formInput">
                    <input type="text" name="rauthorName" required autofocus placeholder="Author-Name" required style="width: 270px; padding: 15px; margin: 5px 0 22px 0;">
                </div><br>
                <div class="formInput">
                    <textarea cols="50" rows="5" name="rdescription" placeholder="Description"></textarea>
                </div><br>
                <div>
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                        <h2>Star Rating</h2>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                </div>
                    <input type="submit" name="bookRequestBtn" value="Request" class="btnLogin">
                    <br >
                </fieldset>
            </form>
    </div>
</div>
    
<?php include('footer.html')?>