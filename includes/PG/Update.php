<!-- view-update-customer.php -->
<!DOCTYPE html>
<html>
<head>
	<title>SportsPro TECHNICAL Support</title>
</head>
<body>
	<h1>SportsPro TECHNICAL Support</h1>
	<h2>View/Update Customer</h2>

	<?php
	// Get the customer ID from the URL
	$customer_id = $_GET['customer_id'];

	// Query the database for the customer's data
	$sql = "SELECT * FROM customers WHERE id = $customer_id";
	// Run the query and fetch the result as an associative array
	// ...

	// Display the customer's data in input fields
	?>
	<form method="POST">
	  <label for="first-name">First Name:</label>
	  <input type="text" name="first-name" id="first-name" value="<?php echo $customer['first_name']; ?>">
	  <br><br>
	  <label for="last-name">Last Name:</label>
	  <input type="text" name="last-name" id="last-name" value="<?php echo $customer['last_name']; ?>">
	  <br><br>
	  <label for="address">Address:</label>
	  <input type="text" name="address" id="address" value="<?php echo $customer['address']; ?>">
	  <br><br>
	  <label for="city">City:</label>
	  <input type="text" name="city" id="city" value="<?php echo $customer['city']; ?>">
	  <br><br>
	  <label for="state">State:</label>
	  <input type="text" name="state" id="state" value="<?php echo $customer['state']; ?>">
	  <br><br>
	  <label for="postal-code">Postal Code:</label>
	  <input type="text" name="postal-code" id="postal-code" value="<?php echo $customer['postal_code']; ?>">
	  <br><br>
	  <label for="country-code">Country Code:</label>
	  <input type="text" name="country-code" id="country-code" value="<?php echo $customer['country_code']; ?>">
	  <br><br>
	  <label for="phone">Phone:</label>
	  <input type="text" name="phone" id="phone" value="<?php echo $customer['phone']; ?>">
	  <br><br>
	  <label for="email">Email:</label>
	  <input type="email" name="email" id="email" value="<?php echo $customer['email']; ?>">
	  <br><br>
	  <label for="password">Password:</label>
	  <input type="password" name="password" id="password" value="<?php echo $customer['password']; ?>">
	  <br><br>
	  <button type="submit" name="update-btn">Update Customer</button>
	  <a href="search-customers.php">Back to Search</a>
	</form>

	<?php
	if (isset($_POST['update-btn'])) {
	  // Get the updated customer data from the form
	  $updated_data = array(
	    'first_name' => $_POST['first-name'],
	    'last_name' => $_POST['last-name'],
	    'address' => $_POST['address'],
	    'city' => $_POST['city'],
	    'state' => $_POST['state'],
	    'postal_code' => $_POST['postal-code'],
	    'country_code' => $_POST['country-code'],
	    'phone' => $_POST['phone'],
	    'email
