<?php
    if(isset($_COOKIE['status'])){
?>

<?php
	$title = "Inventory";
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
            <b> Premium User Inventory </b>
        </span>
        <hr>

        <!-- search box -->
        <input type="text" placeholder="Search by book, author, ..." style="font-size: 20px;">
        <button type="submit"><i class="fa fa-search" style="font-size: 20px;"></i></button>
        <hr><br><br>
        
        <!-- table for book list -->
        <table border="1" align="center">
            <caption style="font-size: 30px;">Inventory</caption>
            
            <tr>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> # </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Book Name </th>
                
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Author </th>
                <th style="border: 1px solid #cecfd5; padding: 10px 15px;"> Price(Dolar)</th>
                
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 1 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Rain Birds </td>
                
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Clarissa, Goenawan </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 10$ </td>
               </td>

            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 2 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Harry Potter</td>
                
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> J. K. Rowling </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 30$ </td>
                </td>
                
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 3 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Haunted Forest </td>
                
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Albert Lee </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 120$ </td>
                </td>
                
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 4 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Elon Musk </td>
                
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Elon Musk </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 150$ </td>
                </td>
                 
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 5 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> The Intelligent Investor </td>
                
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Bemjamin Graham </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 110$ </td>
                </td>
               
            </tr>

            <tr>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 6 </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> The Last Days Of Earth </td>
                
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> Craig Engler </td>
                <td style="border: 1px solid #cecfd5; padding: 10px 15px;"> 40$ </td>
                </td>
                
            </tr>
    
        </table>

<br>

                <tr>
                <td>
 <input type="submit" name="add" value="Add Book">
<input type="submit" name="delete" value="Delete Book">
                </td>
                    </tr>
    </div>
</div>

<?php include('footer.html')?>

<?php       
    }else{
        header('location: signin.php');
    }
?>