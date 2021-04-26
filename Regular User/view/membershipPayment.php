<?php
    session_start();
  if(isset($_SESSION['status'])){
?>
<!-- upper navigation bar -->
<?php include('userNav.php');?>
<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">
    <!-- side panel -->

    <?php include('userSidepanel.php');?>

    <!-- main panel -->
   <div id="side_panel" style="width: 930px; background-color:#caefff; font-family:Arial;" align="center">
    <form method="post" action="../controller/membershipPaymentCheck.php">
        <fieldset>
            <h3>Payment</h3>
             <div>
  <div>
    <div>
      <form action="/action_page.php">

        <div>
          <div>
            <h3>cost = 200 Taka</h3>
            <label></i> Full Name</label>
            <input type="text" name="name" placeholder="Jasun"><br><br>
            <label></i> Email</label>
            <input type="text" name="email" placeholder="jasun266@gmail.com"><br><br>
            <label></i> Address</label>
            <input type="text" name="address" placeholder="Ta-171,Dhaka"><br><br>
            <div>
              <div>
                <label>Account Number</label>
                <input type="text" name="AcNumber" placeholder="10001.111.10001"><br><br>
              </div>
              <div>
                <label>Password</label>
                <input type="Password" name="Password" placeholder="More then 8 cheracter"><br><br>
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