<!-- view-update-customer.php -->
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
  <!-- More input fields for last name, email, phone, address, etc. -->
  <button type="submit" name="update-btn">Update Customer</button>
  <a href="search-customers.php">Back to Search</a>
</form>

<?php
if (isset($_POST['update-btn'])) {
  // Get the updated customer data from the form
  $updated_data = array(
    'first_name' => $_POST['first-name'],
    // ...
  );

  // Build an SQL query to update the customer's data
  $sql = "UPDATE customers SET ";
  foreach ($updated_data as $field_name => $field_value) {
    $sql .= "$field_name = '$field_value', ";
  }
  $sql = rtrim($sql, ', '); // Remove the last comma
  $sql .= " WHERE id = $customer_id";

  // Run the SQL query to update the customer's data in the database
  // ...

  // Redirect back to the search customers page
  header("Location: search-customers.php");
  exit();
}
?>
