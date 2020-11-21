
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
      <div class="center_title_bar">Contact US</div>
  
 <div>
 <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:700px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="https://embedgooglemaps.com/es/">embedgooglemaps ES</a></small></div><div><small><a href="https://mrdiscountcode.hk/trip/">https://mrdiscountcode.hk/trip/</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:18,center:new google.maps.LatLng(6.063536840843932,80.54179069629515),mapTypeId: google.maps.MapTypeId.HYBRID};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(6.063536840843932,80.54179069629515)});infowindow = new google.maps.InfoWindow({content:'<strong>#FOT-UOR</strong><br>faculty of technology university of ruhuna<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
 <div>
 <br>
 <br>
 Emai 	: gadgets@mail.com<br>
 Call 	: 0712888819<br>
 Address: Faculty of Technology, University of Ruhuna.
 </div>
 </div>
 
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
