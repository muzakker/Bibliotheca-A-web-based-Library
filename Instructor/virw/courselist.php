
<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "View Course";
	include('header.php');
    require_once('model/coursemodel.php');
    $courseList = getAllCourse();
?>

<?php include('instructorNav.php')?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php include('instructorSidePanel.php')?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="font-size: 30px;">
            <b> Course List </b>
        </span>
        <hr>

       
                
        <!-- table for course list -->
        <table border="1" align="center">
         
            
            <tr>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Course ID </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> course Name </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> type </th>
               
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;">  Date </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> description </th>
              
            </tr>

            <?php for($i = 0; $i < count($courseList); $i++){ ?>
            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$courseList[$i]['courseID']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$courseList[$i]['coursename']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$courseList[$i]['type']?> </td>
             
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$courseList[$i]['joindate']?> </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> <?=$courseList[$i]['description']?> </td>
            </tr>
			 <br>
      
            <?php } ?>
  
        </table>
		<a href="course.php">Add course</a>
    </div>
</div>

<?php include('footer.html')?>

<?php
	}else{
		header('location: signin.php');
	}
?>