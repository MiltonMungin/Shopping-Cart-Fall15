
<!DOCTYPE html>
<html>
<?php
session_start();
include("session.php");
include('menubar.php');
?>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Checkout</title>
</head>
<body>
<?php
if(!isset($_SESSION['log_usr'])) {
  echo 'You must login to check out.';
}else{
  $firstname = $_SESSION['log_firstname'];
  $lastname = $_SESSION['log_lastname'];
  $email = $_SESSION['log_email'];
  ?>
  <h2>Checkout</h2>
  <form method="post" action="checkout_proc.php">
    <h3>Contact Information</h3>
    <p>Name</p>
    <input type="text" size="10"  name="firstname" placeholder="First Name" value= "<?php echo $firstname;?>" >
    <input type="text" size="15"  name="lastname" placeholder="Last Name" value= "<?php echo $lastname;?>" >
    <p>Email Address</p>
    <input type="text" size="29" name="email" placeholder="Email Address" value= "<?php echo $email;?>" >
    <p>Phone Number</p>
    <input type="text" size="29" name="phonenumber" placeholder="Phone Number">
    <h4>Shipping Address</h4>
    <input type='text' size="29" name="streetaddress" placeholder="Street Address">
    <br>
    <br>
    <input type='text' size="10" name="city" placeholder="City">
    <select name="state">
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
  </select>
  <p><input type='text' size="7" name="zipcode" placeholder="Zip Code">
  &nbsp;&nbsp;United States</p>
  <h3>Payment Information</h3>
  <input type="text" size="15"  name="creditcard" placeholder="Credit Card Number">
  Exp
  <select name="exp_month">
    <option value='1'>January</option>
    <option value='2'>February</option>
    <option value='3'>March</option>
    <option value='4'>April</option>
    <option value='5'>May</option>
    <option value='6'>June</option>
    <option value='7'>July</option>
    <option value='8'>August</option>
    <option value='9'>September</option>
    <option value='10'>October</option>
    <option value='11'>November</option>
    <option value='12'>December</option>
  </select>
  /
  <select name="exp_year">
    <option value='2016'>2016</option>
    <option value='2017'>2017</option>
    <option value='2018'>2018</option>
    <option value='2019'>2019</option>
    <option value='2020'>2020</option>
    <option value='2021'>2021</option>
  </select>
  <p><input type="submit" value="Submit"></p>
</form>
  <?php
}

?>
</body>
</html>
