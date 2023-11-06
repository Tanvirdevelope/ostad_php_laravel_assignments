<?php include ("db_connection.php")?>
  <h1 style="text-align: center;">Task-01: Customer Orders</h1>

    <?php
    // SQL query
    $sql = "SELECT
        c.customer_id,
        c.name AS customer_name,
        c.email AS customer_email,
        c.location AS customer_location,
        COUNT(o.order_id) AS total_orders
        FROM customers C
        LEFT JOIN orders o ON c.customer_id = o.customer_id
        GROUP BY c.customer_id, c.name, c.email, c.location
        ORDER BY total_orders DESC";

    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
                <th>Customer ID</th>
                <th>Customer Name</th>
                <th>Customer Email</th>
                <th>Customer Location</th>
                <th>Total Orders</th>
              </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['customer_id']}</td>
                    <td>{$row['customer_name']}</td>
                    <td>{$row['customer_email']}</td>
                    <td>{$row['customer_location']}</td>
                    <td>{$row['total_orders']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No results found.";
    }
    ?>
<?php include("footer.php")?>