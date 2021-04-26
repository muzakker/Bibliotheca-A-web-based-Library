<?php



	

	$title = "Create List";
	include('header.php');


 include('instructorNav.php')?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php include('instructorSidePanel.php')?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="color: black; font-size: 30px">
            <b>Create List </b>
            <hr>
        </span>
        <br>
        
        <!-- blogging area -->
        <form action="createlistsubmit.php" method="post">
            <textarea id="w3review" name="w3review" rows="25" cols="160" >
            </textarea>
            <br>
            <input type="submit" value="Okay" style="font-size: 25px; background-color: #00a1e6; border-radius: 12px; border: none; color: white; padding: 8px 15px;">
        </form>
	
    </div>
</div>
	
    
<?php include('footer.html')?>
