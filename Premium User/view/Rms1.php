

<?php
	$title = "Renew Membership";
	include('header.php');
?>
<?php include('premiumNav.php');?>


<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php
    include('premiumSidepanel.php');
    ?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="font-size: 30px;">
            <b> Renew Membership Form </b>
        </span>
        <hr>
         <br><br>
        <span style="font-size: 20px;">
            <b> Member Information </b>
        </span>
        <hr>
        <div>
            <form id="renewForm" name="renewForm" method="post" action="../controller/RmsCheck.php" enctype="multipart/form-data">
                

        <b >Username</b>
        :<input type="text" placeholder="Enter Username" name="username">
<hr>
        <b >Full Name</b>
        :<input type="text" placeholder="Enter Your Full Name" name="name">
<hr>
        <b >Email</b>
        :<input type="email" placeholder="hint: xyz@gmail.com" name="email">
<hr>
        <fieldset width="400px">
          <legend><b>Select User Type</b></legend>
            <select name="user_type">
                <option value="regular_user" >Regular User</option>
                
                <option value="premium_user" selected>Premium User</option>
            </select>
        </fieldset>
<hr>
        <fieldset width="400px">
             <legend><b>Gender</b></legend>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="other"> Other
        </fieldset>

        <hr>
        <input type="submit" name="renew" value="RENEW">
        <input type="reset" value="Reset">
    </form>
        </div>
        
    </div>
</div>
<script type="text/javascript" src="../assets/js1/RmsCheck.js"></script>


<?php include('footer.html')?>

