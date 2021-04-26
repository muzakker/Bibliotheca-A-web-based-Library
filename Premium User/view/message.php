<?php
    if(isset($_COOKIE['status'])){
?>

<?php
	$title = "MY CART";
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
         <br><br><br><br><br>
         <h2> Congratulations! </h2>
        <h2> RenewMembership Registration Successful! </h2>
    </div>
</div>

<?php include('footer.html')?>

<?php       
    }else{
        header('location: signin.php');
    }
?>