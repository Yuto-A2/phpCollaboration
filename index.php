<?php
  ini_set('display_errors', '1');
  include( 'reusable/env.php' );
  include( 'reusable/config.php' );
  include( 'reusable/functions.php' );
?>

  <?php include('reusable/header.php'); ?>
  <?php include('reusable/nav.php'); ?>
  <h2>PCPARTPICKER</h2>
  <p>We provide computer builders.</p>
  <h2>Build Guides</h2>
  <?php
$query = 'SELECT * FROM product ';
$result = mysqli_query($connect, $query);
?>
<div class="container">
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($product = mysqli_fetch_assoc($result)): ?>
            <div class="product_container">
            <p><img src="<?php echo 'img/' . htmlentities($product['img']); ?>" alt="<?php echo htmlentities($product['product_name']); ?>"></p>
                <h3><?php echo htmlentities($product['product_name']); ?></h3>
                <p>$<?php echo htmlentities(number_format($product['price'], 2)); ?></p>
            </div><!-- product_container -->
        <?php endwhile;
    } else {
        echo 'No products found.';
    }
    ?>
</div><!-- container -->
</div><!-- container -->
<?php
  include( 'reusable/footer.php' );
?>
  
 