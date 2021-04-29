<?php
    if(isset($_COOKIE['status'])){
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>User Home</title>
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
                <a href="premiumHome.php" style="text-decoration: none;">
                    <i title="user home" class="fas fa-house-user" style="font-size:35px; color:black;"></i>
                </a>
               
              

                <!-- sign out -->
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="signout.php" style="text-decoration: none;">
                    <i title="sign out" class="fas fa-sign-out-alt" style="font-size:35px; color:black;"></i>
                </a>

                <!-- user profile information-->
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="view_profile.php" style="text-decoration: none;">
                    <i title="user profile" class="fas fa-user-alt" style="font-size:35px; color:black;"></i>
                </a>
                &nbsp; &nbsp; &nbsp;
            </span>

        </div>
<hr>


<!.........>

<div id="footer" style="background-color: #caefff; height: 100%; width: 100%; font-family: arial; text-align: center;">
     <form method="" action="">
	<table border="1" align="center" width="80%">
<tr height="10%">
<td align="center" width="100%" colspan="5">
<h1>Listed Books</h1>
</td>	
 </tr>		
		<tr height="200px">

	<!-- search box -->
        <input type="text" placeholder="Search by book, author, ..." style="font-size: 25px;" >
        <button type="submit"><i class="fa fa-search" style="font-size: 25px;"></i></button>
        <hr><br>

            <a href="Rms1.php" >
                    <input type="button" name="renew-membership" value="Renew-Membership" style="font-size: 25px;" >  </a>


			<td width="20%">
				
<img src="../assets/1.jpg" width="100%" height="100%" align="center">

			</td>


			<td width="20%">
                       <img src="../assets/2.jpg" width="100%" height="100%" align="center">  

                        </td>


			<td width="20%">
                              
<img src="../assets/3.jpg" width="100%" height="100%" align="center"> 
                         </td>


<td width="20%">
                              
<img src="../assets/4.jpg" width="100%" height="100%" align="center"> 
                         </td>

<td width="20%">
                 <img src="../assets/5.jpg" width="100%" height="100%" align="center">              

                         </td>
		</tr>
<!1>
<tr height="10%" >

<td width="20%" align="center"> 
<h3 >$10</h3>
<a href="book1.php"> <input type="button" name="buy book" value="buy book">  </a>
 </td>

<td width="20%" align="center"> 
<h3 >$30</h3>
<a href="book2.php"> <input type="button" name="buy book" value="buy book">  </a>
 </td>

<td width="20%" align="center"> 
<h3 >$120</h3>
<a href="book3.php"> <input type="button" name="buy book" value="buy book">  </a>
 </td>

<td width="20%" align="center"> 
<h3 >$150</h3>
<a href="book4.php"> <input type="button" name="buy book" value="buy book">  </a>
 </td>

<td width="20%" align="center"> 
<h3 >$110</h3>
<a href="book5.php"> <input type="button" name="buy book" value="buy book">  </a>
 </td>

</tr>

<!-------------------------------------->	

		<tr height="200px">
			<td width="20%">
				
<img src="../assets/6.jpg" width="100%" height="100%" align="center"> 

			</td>

			<td width="20%">
                        
<img src="../assets/7.jpg" width="100%" height="100%" align="center"> 
                        </td>

			<td width="20%">
                              
<img src="../assets/8.jpg" width="100%" height="100%" align="center"> 
                         </td>


<td width="20%">
                              
<img src="../assets/9.jpg" width="100%" height="100%" align="center"> 
                         </td>

<td width="20%">
                              
<img src="../assets/10.jpg" width="100%" height="80%" align="center"> 
                         </td>

		</tr>

<!2>
<tr height="10%" >

<td width="20%" align="center"> 
<h3 >$40</h3>
<a href="book6.php"> <input type="button" name="buy book" value="buy book">  </a>
 </td>

<td width="20%" align="center"> 
<h3 >$50</h3>
<a href="book7.php"> <input type="button" name="buy book" value="buy book">  </a>
 </td>

<td width="20%" align="center"> 
<h3 >$70</h3>
<a href="book8.php"> <input type="button" name="buy book" value="buy book">  </a>
 </td>

<td width="20%" align="center"> 
<h3 >$60</h3>
<a href="book9.php"> <input type="button" name="buy book" value="buy book">  </a>
 </td>

<td width="20%" align="center"> 
<h3 >$40</h3>
<a href="book10.php"> <input type="button" name="buy book" value="buy book">  </a>
 </td>



</tr>

<hr>
<tr height="100px">
<td colspan="5" width="100%">
</td>
</tr>
		<tr height="200px">
			<td colspan="5" width="100%">
<!-- blogging area -->
<h1> write post here... </h1>
        <form action="../controller/blogSubmit.php" method="post" ">
            <textarea id="w3review" name="w3review" rows="20" cols="120" >
            </textarea>
            <br>
            <input type="submit" value="Post" style="font-size: 25px; background-color: #00a1e6; border-radius: 12px; border: none; color: white; padding: 8px 15px;">
        </form>
</td>
</tr>
</div>
</table>
   </form> 

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