<!-- search-customers.php -->
<form method="POST">
  <label for="last-name">Last Name:</label>
  <input type="text" name="last-name" id="last-name">
  <button type="submit" name="search-btn">Search</button>
</form>

<?php
if (isset($_POST['search-btn'])) {
  // Get the last name from the form
  $last_name = $_POST['last-name'];

  // Query the database for matching customers
  $sql = "SELECT * FROM customers WHERE last_name LIKE '%$last_name%'";
  // Run the query and display results in an HTML table
  // ...

}
?>
