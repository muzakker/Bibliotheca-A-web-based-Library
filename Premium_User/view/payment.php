<?php
    if(isset($_COOKIE['status'])){
?>

<?php
    $title = "payment";
    include('header.php');
?>
<!-- upper navigation bar -->
<?php include('premiumNav.php');?>
<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">
    <!-- side panel -->

    <?php include('premiumSidepanel.php');?>

    <!-- main panel -->
   <div id="side_panel" style="width: 930px; background-color:#caefff; font-family:Arial;" align="center">
    <!-- <form class="requestForm"> -->
        <fieldset>
            <h2>Please Provide some Information For Payment!</h2>
             <div class="row">
  <div class="col-75">
    <div class="container">
      <!-- <form action="/action_page.php"> -->

        <div class="row">
          <div class="col-50">
            <div>
            <form id="paymentForm" name="paymentForm" method="post" action="../controller/paymentCheck.php" enctype="multipart/form-data">
              
            <label for="fname"><i class="fa fa-user"></i> Full Name:</label>
            <input type="text" id="fname" name="firstname" placeholder="Jobair"><br><br>
            <label for="email"><i class="fa fa-envelope"></i> Email:</label>
            <input type="text" id="email" name="email" placeholder="jobairh999@gmail.com"><br><br>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address:</label>
            <input type="text" id="adr" name="address" placeholder="Bagbari,Lakshmipur"><br><br>
            <div class="row">
              <div class="col-50">
                <label for="AcNumber">Account Number:</label>
                <input type="text" id="AcNumber" name="AcNumber" placeholder="12478.444.80003"><br><br>
              </div>
              <div class="col-50">
                <label for="Pass">Password:</label>
                <input type="Password" id="Pass" name="Pass" placeholder="More than 6 character"><br><br>
              </div>
            </div>
          
        <input type="submit" name="checkout" value="checkout" >
      </form>
    </div>
<script type="text/javascript" src="../assets/js2/paymentCheck.js"></script>
  </div>
</div>  
</div>
</div>
</div>
        </fieldset>
            <!-- </form> -->
    </div>
</div>
    
<?php include('footer.html')?>

<?php       
    }else{
        header('location: ../../Admin/view/signin.php');
    }
?>