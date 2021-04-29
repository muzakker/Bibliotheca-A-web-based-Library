<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Create Blog";
	include('header.php');
?>

<?php include('instructorNav.php')?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php include('instructorSidePanel.php')?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="color: black; font-size: 30px">
            <b>Write that ignites you...</b>
            <hr>
        </span>
        <br>
        
        <!-- blogging area -->
        <form  method="post" action="../../Admin/controller/blogSubmit.php">
            <textarea name="content" rows="8" cols="40"  maxlength="300" style="font-size: 30px;" placeholder="Write that's on your mind within 300 characters limit"></textarea>
            <br><br>
            <input type="submit" name="submit" value="Post" style="font-size: 25px;">
        </form>

    </div>
</div>
    
<?php include('footer.html')?>

<?php
	}else{
        header('location: ../../Admin/view/signin.php');
    }
?>