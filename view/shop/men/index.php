<?php
include ROOT . '/session/session_check.php';
include ROOT . '/db/conn.php';

// Fetch products from the database
$sql = "SELECT * FROM product WHERE category = 'men' AND display = 'yes'";

$pageTitlePrefix = "Men";

include ROOT . '/includes/header.php';
include ROOT . '/includes/menu.php';

// Include Shop that displays products based on the SQL query
include ROOT . '/includes/shop.php';


//Close the Database Connection
mysqli_close($conn);

include ROOT . '/includes/footer.php';
?>

</body>

</html>