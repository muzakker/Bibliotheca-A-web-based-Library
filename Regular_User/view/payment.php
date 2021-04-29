<?php
	if(isset($_COOKIE['status'])){
?>

<?php
    $title = "User Home";
    include('header.php');
    require_once('../../model/bookModel.php');
    $bookID = $_GET['bookID'];
    $List = getBookByID($bookID);
?>
<!-- upper navigation bar -->
<?php include('userNav.php');?>
<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">
    <!-- side panel -->

    <?php include('userSidepanel.php');?>

    <!-- main panel -->
   <div id="side_panel" style="width: 1200px; background-color:#caefff; font-family:Arial;" align="center">
    <form method="post" action="../controller/paymentCheck.php">
        <fieldset>
            <h3>Payment</h3>
             <div>
  <div>
    <div>
      <form action="../controller/paymentCheck.php">

        <div>
          <div>
            <label>Book Name:</label>
            <input type="text" name="bookName" id="bookName" value=<?php echo $List['bookname'];?>><br><br>
            <label>Cost = </label>
            <input type="text" name="cost" id="cost" value=<?php echo $List['price'];?>><br><br>
            <label></i> Full Name</label>
            <input type="text" name="Fname" placeholder="Jasun"><br><br>
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
                <input type="Password" name="Password" placeholder="More then 8 character"><br><br>
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
    
<?php include('footer.html');?>

<?php		
	}else{
		header('location: ../../Admin/view/signin.php');
	}
?>