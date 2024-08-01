<!-- This page for managin customers' order. -->
<?php
  ini_set('display_errors', '1');
  include( 'reusable/env.php' );
  include( 'reusable/config.php' );
  include( 'reusable/functions.php' );
?>

  <?php include('reusable/header.php'); ?>
  <?php include('reusable/nav.php'); ?>
  <h2>Order</h2>
  <?php
$query = 'SELECT 
orders.order_id, 
product.product_id, 
customer.customer_id, 
orders.quantity, 
product.price, 
product.product_name 
FROM 
orders 
JOIN 
product ON orders.product_id = product.product_id 
JOIN 
customer ON orders.customer_id = customer.customer_id';

$result = mysqli_query($connect, $query);
?>
  <h2>Your Order</h2>
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($product = mysqli_fetch_assoc($result)): ?>
              <p><?php echo htmlentities($product['product_name']); ?></h3>
              <p>$<?php echo htmlentities(number_format($product['price'], 2)); ?></p>
        <?php endwhile;
    } else {
        echo 'No products found.';
    }
    ?>
</div><!-- container -->
<?php
  include( 'reusable/footer.php' );
?>
