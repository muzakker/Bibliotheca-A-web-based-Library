<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "instructor Home";
	include('header.php');
    require_once('../../model/blogModel.php');
    include('../../model/userModel.php');
    $blogs = getAllBlog();
?>

<?php include('instructorNav.php')?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php include('instructorSidePanel.php')?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="font-size: 30px;">
            <b> Explore What Others Are Up To </b>
        </span>
        <hr><br>

        <?php for($i = 0; $i < count($blogs); $i++){ ?>
            <fieldset  style="background-color: black; width: 400px; display: inline-block; font-family: Garamond; align-items: center; text-align: center; font-size: 25px; color: white;">
                <?php
                    $username = $blogs[$i]['username'];
                    $row     = getUserByName($username);
                    echo "Posted by "."<b>".$row['fullname']."</b>"."<br>"."<br>";
                ?>
                <?=$blogs[$i]['content']?>
            </fieldset>
            <br><hr><br>
        <?php } ?>

    </div>
</div>

<?php include('footer.html')?>

<?php
	}else{
        header('location: ../../Admin/view/signin.php');
    }
?>