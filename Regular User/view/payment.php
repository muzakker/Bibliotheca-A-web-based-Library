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

    <?php include('userSidepanel.php');?>

    <!-- main panel -->
   <div id="side_panel" style="width: 930px; background-color:#caefff; font-family:Arial;" align="center">
    <form class="requestForm">
        <fieldset>
            <h3>Payment</h3>
             <div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">

        <div class="row">
          <div class="col-50">
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Jasun"><br><br>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="jasun266@gmail.com"><br><br>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Ta-171,Dhaka"><br><br>
            <div class="row">
              <div class="col-50">
                <label for="AcNumber">Account Number</label>
                <input type="text" id="AcNumber" name="AcNumber" placeholder="10001.111.10001"><br><br>
              </div>
              <div class="col-50">
                <label for="Pass">Password</label>
                <input type="Password" id="Pass" name="Pass" placeholder="More then 8 cheracter"><br><br>
              </div>
            </div>
          </div>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
</div>   
        </fieldset>
            </form>
    </div>
</div>
    
<?php }else{include('footer.html');} ?>