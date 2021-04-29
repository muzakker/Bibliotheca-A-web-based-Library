<?php
	if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Payment";
	include('header.php');
?>

<?php include('instructorNav.php')?>

<!-- main_content -->
<div style="display: grid; grid-template-columns: 1fr 1fr; padding-top: 0.5em;">

    <?php include('instructorSidePanel.php')?>

    <!-- main panel -->
    <div id="main_content" style="background-color: white; width: 1210px; font-family: arial; align-items: center; text-align: center;">
        <!-- title -->
        <span style="font-size: 30px;">
            <b> Payment </b>
        </span>
        <hr><br><br>

        
            <form method="post" action="../controller/paymentcheck.php" enctype="multipart/form-data">
                <table align="center">
				 <tr>
                    <td>
                        Book ID
                    </td>
                    <td>
                        <input type="number" name="bookID" value="">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <hr><br>
                    </td>
                </tr>

                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            <input type="text" name="name" value=""> &nbsp; &nbsp;
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    
                    
                    <tr>
                        <td>
                            Email
                        </td>
                        <td>
                            <input type="email" name="email" value=""> 
                            <button title="hint: sample@example.com" style="color: blue; font-size: 14px;"><b>i</b></button>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
					<tr>
					<td>
					
                        Date
                    </td>
                    <td><input type="number" name="dd" style="width:40px;" value=""> / <input type="number" name="mm" style="width:40px;" value="">	/ <input type="number" name="yyyy" style="width:60px;" value=""> <i>(dd/mm/yyyy)</i></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <hr><br>
                    </td>
                </tr>
                    
                    
                    <tr>
                        <td colspan="2">
                            <fieldset>
                            <legend>Payment Type</legend>
                                <input type="radio" name="Type" value="Credit"> Credit
                                <input type="radio" name="Type" value="debit"> Debit
                                <input type="radio" name="Type" value="other"> Other
                            </fieldset>
                        </td>
                    </tr>
                    
                   <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                      <tr>
                        <td>
                            Card Number
                        </td>
                        <td>
                            <input type="number_format" name="number" value=""> &nbsp; &nbsp;
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
					<tr>
                        <td>
                            Password
                        </td>
                        <td>
                            <input type="password" name="password" value=""> &nbsp; &nbsp;
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    
                   
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Submit" style="font-size: 20px;">
                            <input type="reset" value="Reset" style="font-size: 20px;">
                        </td>
                    </tr>
                </table>
            </form>

    </div>
</div>

<?php include('footer.html')?>

<?php
	}else{
        header('location: ../../Admin/view/signin.php');
    }
?>