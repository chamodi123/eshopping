
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
      <div class="center_title_bar">Create Your Account</div>
  
 <form action="" enctype="multipart/form-data" method="post">
 <div class="form_row">
              <label class="contact"><strong>Full Name  :</strong></label>
              <input type="text" class="contact_input" name="product_image" required />
            </div>
            <div class="form_row">
              <label class="contact"><strong>Email :</strong></label>
              <input type="text" class="contact_input" name="product_price" required /></div>
            <div class="form_row"> 
            <div class="form_row">
              <label class="contact"><strong>Address  :</strong></label>
             <textarea name="product_desc" class="contact_input" cols="60" rows="2" required></textarea>
            </div>
            <div class="form_row">
              <label class="contact"><strong>Create Password  :</strong></label>
              <input type="text" class="contact_input" name="product_keywords" required>
              
            
            </div>

				

			 <div class="form_row">
			 <label class="contact"><strong></strong></label>
                            <input type="submit" class="insert" name="index" value="Submit" />&nbsp;<br />
              
            
            </div>
 
 </div>
 </div>
 
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
