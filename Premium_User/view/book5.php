<?php
    if(isset($_COOKIE['status'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>book1</title>
</head>
<body>
     <form method="" action="">
	<table border="1" align="center" width="80%" >
 		
		<tr height="450px">
			<td align="center" >
				
<img src="../assets/5.jpg" width="50%" height="100%" > 

			</td >


		
			<td width="60%">
			
<h2> &nbsp; Book Name: The Intelligent Investor</h2>
<hr>
<b> &nbsp; rating:</b>
<span style="font-size:200%;color:yellow;">&starf;</span>
<span style="font-size:200%;color:yellow;">&starf;</span>
<span style="font-size:200%;color:yellow;">&starf;</span>
<span style="font-size:200%;color:yellow;">&starf;</span>
<span style="font-size:200%;color:yellow;">&starf;</span>
<hr> <br>
<h2>&nbsp; Price:  &nbsp; $110</h2>
<hr> <br>
&nbsp; Quantity: &nbsp;<input type="number" name="quantity" value=""> <br><br>
&nbsp; &nbsp; &nbsp; &nbsp; 
<a href="payment.php" ><b>Buy Now</b>
    <!-- <input type="submit" name="Buy Now" value="Buy Now">  -->
</a>
&nbsp;&nbsp;
<a href="book5Add.php" ><b>Add To Cart</b>

			</td>

			

		


</tr>


<tr height="10%" >
<td align="center" colspan="2">

<h3>Review a Book</h3>

<div class="formInput">
                    <textarea cols="50" rows="5" name="rdescription" placeholder="Description"></textarea>
                </div><br>
                <div>
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                         Rating
                         &nbsp; &nbsp;
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                </div><br>
                    <input type="submit" name="bookRequestBtn" value="Request" class="btnLogin">
</td>
</tr>

</form>
	</table>
   </form>
</body>
</html>

<?php       
    }else{
        header('location: signin.php');
    }
?>