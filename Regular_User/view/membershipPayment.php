<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "User Profile";
	include('header.php');
  
  include('../../model/userModel.php');
  $username = $_COOKIE['username'];
  $row = getUserByName($username);

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
   <div id="side_panel" style="width: 1200px; background-color:#caefff; font-family:Arial;" align="center">
    <form method="post" action="../controller/membershipPaymentCheck.php">
        <fieldset>
            <h3><u>Payment</u></h3>
             

            <h3>cost = 200 Taka</h3>
            <label></i> Full Name</label>
            <input type="text" name="name" value="<?=$row['fullname']?>"><br><br>
            <label></i> Email</label>
            <input type="text" name="email" value="<?=$row['email']?>"><br><br>
            <label></i> Address</label>
            <input type="text" name="address" value=""><br><br>
            <div>
                <label>Account Number</label>
                <input type="text" name="AcNumber" placeholder="example: 10001.111.10001" value=""><br><br>
              </div>
              
            
        <input type="submit" value="Continue to checkout" class="btn">

        </fieldset>
        </form>
    </div>
</div>
    
<?php include('footer.html');?>

<?php		
	}else{
		header('location: ../../Admin/view/signin.php');
	}
?>