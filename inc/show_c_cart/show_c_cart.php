<?php
function show_c_cart(){
    global $wpdb;
   $current_user = get_current_user_id();

  $table_name = $wpdb->prefix . "custom_cart";

  $sql = "SELECT * FROM $table_name WHERE user_id='$current_user'";

  $cart = $wpdb->get_results( $sql );


  foreach ($cart as $item){     

       $item_id = $item->product_id;
       $item_qty = $item->product_qty;

       include('single_c_cart_item_query.php');
      
    
    } 

  
}

 