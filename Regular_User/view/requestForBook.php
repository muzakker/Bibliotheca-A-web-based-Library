<?php
	if(isset($_COOKIE['status'])){

    $title = "User Home";
    include('header.php');
    include('userNav.php');?>
<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">
    <!-- side panel -->

    <?php include('userSidepanel.php');?>

    <!-- main panel -->
   <div id="side_panel" style="width: 1200px; background-color:#caefff; font-family:Arial;" align="center">
    
            <form method="post" action="../controller/reqBook.php" style="position: absolute; margin: 20px; max-width: 300px; padding: 16px; background-color: white; display: inline-block; margin-left: -10%; margin-right: -10%; text-align: left;">
            <h1>Request For a Book</h1>

            <b id="bnumber" >Book number</b>
            <input type="number" name="booknumber" id="booknumber"  placeholder="Book-Number"  required style="width: 270px; padding: 15px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b id="rbname">Book Name</b>
            <input type="text" name="rbookName" id="RbookName" onblur="ValidateRequestforBookName()"  placeholder="Enter Book Name"  required style="width: 270px; padding: 15px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b id="an">Author-Name</b>
            <input type="text" name="rauthorName" id="rauthorName" onblur="ValidateRequestforAuthorName()" placeholder="Author-Name"  required style="width: 270px; padding: 15px; margin: 5px 0 22px 0; border: none; background: #f1f1f1;">

            <b>Description</b>
            <textarea cols="37" rows="7" name="rdescription" placeholder="Description"></textarea>
    
            <br>
            <input type="submit" name="submit" value="submit" style="background-color: #4CAF50; color: white; padding: 16px 20px; border: none; cursor: pointer; width: 100%; opacity: 0.9;">
        </form>
    </div>
</div>
 <script src="../assets/js/check_js.js"></script>
    
<?php include('footer.html');?>
<?php		
	}else{
		header('location: ../../Admin/view/signin.php');
	}
?>
