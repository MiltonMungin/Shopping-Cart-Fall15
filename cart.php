<!DOCTYPE html>
<html>
<?php
session_start();
include("session.php");
include('menubar.php');
include_once 'shoppingcart.php';
?>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Your cart</title>
</head>
<body>
<?php
$cart = $_SESSION['myCart'];
$total = 0;
if($cart == null) {
  ?>
  <p><?php echo "Cart is empty"; ?></p>
  <?php
}else{
  ?>
  <form action="cart_update.php" method="POST">
  <table>
  <?php
  foreach ($cart as $product_id => $qty) {
    ?>
    <tr>
    <?php
    $sql = "SELECT name, img, price, product_id FROM products WHERE product_id='".$product_id."'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0) {
      while($row = mysqli_fetch_array($result)){
        $tmpTotal = $qty * $row['price'];
        $total += $tmpTotal;
        $_SESSION['total'] = $total;
        $totalQty += $qty;
        ?>
        <td><img src="images/<?php echo $row['img']; ?>" alt="product"  height="100px" width="150px"></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><input type="number" min='0' value="<?php echo $qty;?>" name="<?php echo $row['product_id'];?>">
      </tr>
        <?php
      }
    }
  }
  ?>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td>Subtotal (<?php echo $totalQty; ?> items): $<?php echo $total; ?></td>
  </tr>
  <tr>
    <td><input type="submit" value="Update Cart"></td>
    <td></td>
    <td></td>
    <td><input type="button" onclick="location.href='http://localhost:8080/mystore/checkout.php';" value="Proceed to checkout" /></td>
  </tr>
</table>
</form>
  <?php
}
?>

</body>
</html>
