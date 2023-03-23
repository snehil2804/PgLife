<?php
// Get the customer ID from the query string
$id = $_GET['id'];

// Connect to the database
$servername = "localhost";
$username = "your_mysql_username";
$password = "your_mysql_password";
$dbname = "sportspro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the customer data from the database
$sql = "SELECT * FROM customers WHERE id = $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // Output the customer data in a form
    while ($row = $result->fetch_assoc()) {
        ?>
        <html>
        <head>
            <title>SportsPro Technical Support - View/Update Customer</title>
        </head>
        <body>
            <h1>SportsPro Technical Support - View/Update Customer</h1>
            <form method="post" action="update_customer.php">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label>First Name:</label>
                <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>"><br>
                <label>Last Name:</label>
                <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>"><br>
                <label>Address:</label>
                <input type="text" name="address" value="<?php echo $row['address']; ?>"><br>
                <label>City:</label>
                <input type="text" name="city" value="<?php echo $row['city']; ?>"><br>
                <label>State:</label>
                <input type="text" name="state" value="<?php echo $row['state']; ?>"><br>
                <label>Postal Code:</label>
                <input type="text" name="postal_code" value="<?php echo $row['postal_code']; ?>"><br>
                <label>Country Code:</label>
                <input type="text" name="country_code" value="<?php echo $row['country_code']; ?>"><br>
                <label>Phone:</label>
                <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br>
                <label>Email:</label>
                <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
                <label>Password:</label>
                <input type="password" name="password" value="<?php echo $row['password']; ?>"><br>
                <input type="submit" name="submit" value="Update Customer">
            </form>
        </body>
        </html>
        <?php
    }
} else {
    echo "No customer found with ID $id";
}

// Close the database connection
$conn->close();
?>
