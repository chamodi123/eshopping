
<?php

include("functions/functions.php");
include("includes/db.php");

cart();
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php

include("header.php");

?>


    <!-- end of menu tab -->
    <div class="crumb_navigation"> Navigation: <span class="current">Home</span>
    

    <?php
    
    if(isset($_GET['cat'])){
    
    $get_id = $_GET['cat'];
    
    $query = "select cat_title from categories where cat_id='$get_id'";
    $run_query = mysqli_query($con,$query);
    
    $row = mysqli_fetch_array($run_query);
    
    $cat = $row['cat_title'];
    
    echo"<span class=current>>$cat</span>";
    
    }
    
    ?>


 </div>
    <div class="left_content">
      <div class="title_box">CATEGORIES</div>
      <ul class="left_menu">
        
 <?php 
     getcats(); 
     

 ?>
        
      </ul>
     
<div class="title_box">BRANDS</div>
      <ul class="left_menu">
        

    <?php  getbrands();  ?>


 
</ul>
 <br>

     
      <div class="banner_adds"> <a href="#"><img src="images/bann2.jpg" alt="" border="0" /></a> </div>
      
 <br>
 <br>
     
 
        <?php

         special();

        ?>

    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Your Shopping Cart</div>
  
 <form action="" enctype="multipart/form-data" method="post">
 <table align="center" width="755" border="0" bgcolor="#ffffff">
 
 

<tr align="center">
  <th>Remove</th>
  <th>Product(s)</th>
  <th>Quantity</th>
  <th>Total Price</th>
</tr>
 
 <?php
 
         $total = 0;
   global $con;

   $ip = getip();

   $price = "select * from cart where ip_add = '$ip'";

   $run_price = mysqli_query($con,$price) ;

   while($pprice = mysqli_fetch_array($run_price)){

      $pro_id = $pprice['p_id'];
      
      $prod_price = "select * from products where prd_id = '$pro_id'";

      $run_pro_price = mysqli_query($con,$prod_price);


      while($ppprice = mysqli_fetch_array($run_pro_price)){

         $product_price = array($ppprice['prd_price']);
         $product_title = $ppprice['prd_title'];
         $product_image = $ppprice['prd_img'];
         $single_price = $ppprice['prd_price'];
         

         $price_sum = array_sum($product_price);

         $total +=$price_sum;

         //echo  $product_price;
         




     
      
      

   

      

 
 
 
 ?>
 
 <tr align="center">
   
   <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id;  ?>"></td>
   <td><?php echo $product_title; ?>
    <br>
    <img src="admin_area/product_images/<?php echo $product_image; ?>" width="60" height="60"></td>
   <td>
   
   <input type="text" size="4" name="qty">
   </td>
   <td>
   <?php echo "Rs".$single_price;  ?>
   </td>
  
   <td></td>  
   
 
 </tr>
 
 
 <?php
 
 }
   }
 ?>
 
  <tr align="right">
   <td colspan="4"><b>Sub total:</b></td>
   <td><?php echo"Rs&nbsp;".$total;   ?></td>
   
   </tr>
   
   
   <tr align="left">
   
   <td colspan="2">
   <input type="submit" name="update_cart" value="Update cart"></td>
   <td>
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" onclick="window.location.href='https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=4JYZWSXDMLQAW'">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="4JYZWSXDMLQAW">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


   </td>
   

  <!-- <td><button><a href="checkout.php" style="text-decoration:none;color:black">Checkout</a></button></td> -->
   
   </tr>

 </table>
 
 
 
 </form>
 
 <?php
 
 $ip = getip();
 

 
 if(isset($_POST['update_cart'])){
 
   foreach($_POST['remove'] as $remove){
   
       $delete_product = "delete from cart where p_id='$remove' AND ip_add='$ip'";
       $run_delete = mysqli_query($con, $delete_product);
       echo $ip;
       if($run_delete){
       
         echo "<script>window.open('cart.php','_self')</script>"    ;  
       
       }
   
   }
 
 }
 
 ?>
 
 
 </div>
    <!-- end of center content -->
<div class="right_content">
      <div class="shopping_cart">
        <div class="cart_title"><i>Welcome Guest!</i><br>Shopping cart</div>
        <div class="cart_details"><font color="blue"><?php total_items(); ?></font>&nbsp;items <br />
          <span class="border_cart"></span> Total:<span class="price"><?php total_price(); ?> </span> </div>
        <div class="cart_icon"><a href="cart.php" title="header=[Checkout] body=[&nbsp;] fade=[on]"><img src="images/shoppingcart.png" alt="" width="48" height="48" border="0" /></a></div>
      </div>
      
       
       <br>
     
            <?php
 
            special();

           ?> 

        <br>
     
 
        <?php

         special();

        ?>
        
             <br>
     
 
        <?php

         special();

        ?>
     <br>
     
 
        <?php

         special();

        ?>


      
        <!-- end of right content -->
</div>
  <!-- end of main content -->
  <div class="footer">
    <div class="left_footer"> <img src="images/footer_logo.png" alt="" width="170" height="49"/> </div>
    <div class="center_footer">
          <img src="images/payment.gif" alt="" /> </div>
		  <div class="right_footer">All Rights Reserved 2018 Tech@RUH<br /> <a href="#">home</a> <a href="#">about</a> <a href="#">sitemap</a> <a href="contact.html">contact us</a> </div>
     </div>
</div>
<!-- end of main_container -->
</body>
</html>
