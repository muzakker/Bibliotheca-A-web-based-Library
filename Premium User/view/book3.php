<?php
    if(isset($_COOKIE['status'])){
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>book3</title>
        <script src="https://kit.fontawesome.com/d4036902fd.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- nav bar -->
        <div id="nav_bar" style="background-color:#caefff; height: 100px; width: 100%; font-family: arial; display: flex; align-items: center; text-align: center;">
            
            &nbsp; &nbsp; &nbsp; &nbsp;
            <i title="Bibliotheca Library" class="fas fa-book-reader" style="font-size:50px; color:black;"></i>

            <span style="margin-left:auto; margin-right:0; font-size: 18px;">
                <b style="font-size: 40px;">Bibliotheca</b>
                <br>
                e-Library with Integrated e-Learning Facilities
            </span>

            
            <span style="margin-left:auto; margin-right:0;">
                
                <!-- user home -->
                <a href="premium_home.html" style="text-decoration: none;">
                    <i title="user home" class="fas fa-home" style="font-size:35px; color:black;"></i>
                </a>
               
          

                <!-- sign out -->
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="#" style="text-decoration: none;">
                    <i title="sign out" class="fas fa-sign-out-alt" style="font-size:35px; color:black;"></i>
                </a>

                <!-- user account information-->
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="#" style="text-decoration: none;">
                    <i title="user account information" class="fas fa-user-alt" style="font-size:35px; color:black;"></i>
                </a>
                &nbsp; &nbsp; &nbsp;
            </span>

          
        </div>
  <hr>


<div id="footer" style="background-color: #caefff; height: 100%; width: 100%; font-family: arial; text-align: center;">


     <form method="" action="">
	<table border="1" align="center" width="80%" >
 		
		<tr height="450px">
			<td align="center" >
				
<img src="../assets/3.jpg" width="50%" height="100%" > 

			</td >


		
			<td width="60%">
			
<h2> &nbsp; Book Name: Haunted Forest</h2>
<hr>
<b> &nbsp; rating:</b>
<span style="font-size:200%;color:yellow;">&starf;</span>
<span style="font-size:200%;color:yellow;">&starf;</span>
<span style="font-size:200%;color:yellow;">&starf;</span>
<span style="font-size:200%;color:yellow;">&starf;</span>
<span style="font-size:200%;color:yellow;">&starf;</span>
<hr> <br>
<h2>&nbsp; Price:  &nbsp; $120</h2>
<hr> <br>
&nbsp; Quantity: &nbsp;<input type="number" name="quantity" value=""> <br><br>
&nbsp; &nbsp; &nbsp; &nbsp; 
<a href="payment.php" ><b>Buy Now</b>
    <!-- <input type="submit" name="Buy Now" value="Buy Now">  -->
</a>
&nbsp;&nbsp;
<a href="book3Add.php" ><b>Add To Cart</b>

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


</div>



        <!-- footer -->
        <div id="footer" style="background-color: #caefff; height: 100%; width: 100%; font-family: arial; text-align: center;">

 <hr>
<!-- facebook icons-->
     <a href="#" style="text-decoration: none;">
                    <i title="facebook" class="fab fa-facebook-square" style="font-size:35px; color:black;"></i>
                </a>

<!-- instagram icons-->
     <a href="#" style="text-decoration: none;">
                    <i title="instagram" class="fab fa-instagram-square" style="font-size:35px; color:black;"></i>
                </a>

<!-- linkedin icons-->
     <a href="#" style="text-decoration: none;">
                    <i title="linkedin" class="fab fa-linkedin" style="font-size:35px; color:black;"></i>
                </a>

<!-- twiter icons-->
     <a href="#" style="text-decoration: none;">
                    <i title="twiter" class="fab fa-twitter-square" style="font-size:35px; color:black;"></i>
                </a>

            <hr>
            &#169 2021 (Bibliotheca)

        </div>

    </body>
</html>

<?php       
    }else{
        header('location: signin.php');
    }
?>