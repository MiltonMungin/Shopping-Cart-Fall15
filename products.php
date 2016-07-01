<!DOCTYPE html>
<html>
<?php
include("session.php");
include("menubar.php");
?>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Products</title>
</head>
<body>
  <hr>
<?php
if(!isset($_SESSION['select_department'])) {
  $_SESSION['select_department'] = "All";
}
$cur_department = $_SESSION['select_department'];
 ?>
  <form method="post" action="products_update.php">
    <p>Show results for</p>
    <select name = "department">
      <option value='All' <?php if($cur_department == "All") echo "selected = 'selected'"; ?>>All</option>
      <option value='Apparel &amp; Accessories' <?php if($cur_department == "Apparel & Accessories") echo "selected = 'selected'"; ?>>Apparel &amp; Accessories</option>
      <option value='Movies &amp; Music' <?php if($cur_department == "Movies & Music") echo "selected = 'selected'"; ?>>Movies &amp; Music</option>
      <option value='Gifts &amp; Collectibles' <?php if($cur_department == "Gifts & Collectibles") echo "selected = 'selected'"; ?>>Gifts &amp; Collectibles</option>
      <option value='Technology' <?php if($cur_department == "Technology") echo "selected = 'selected'"; ?>>Technology</option>
    </select>
    <input type="submit" value="Browse">
  </form>
  <hr>
  <table>
  <?php
  if($cur_department == 'All') {
    $sql = 'SELECT * FROM products';
  }else{
    $sql = "SELECT * FROM products WHERE department = '".$cur_department."'";
  }

  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result)>0) {
  while($row=mysqli_fetch_array($result)) {
  ?>
  <tr>
    <form action="cart_proc.php" method="post">
    <td><img src="images/<?php echo $row['img']; ?>" alt="product"  height="100px" width="150px"></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['description']; ?></td>
    <td><?php echo $row['department']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td>Qty<input type="number" min="1" max="50" name='qty'></td>
    <input type="hidden" value="<?php echo $row['product_id']; ?>" name="product_id">
    <td><input type="submit" value="Add to Cart"></td>
    </form>
  </tr>
  <?php
}
}else{
  echo 'No product to show';
}
  ?>
  </table>
</body>
</html>
