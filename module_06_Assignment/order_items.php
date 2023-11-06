<?php include("header.php")?>
<?php include("db_connection.php")?>
   <h1 style="text-align: center;">Task-02: Order Items</h1>

    <?php
    // SQL query
    $sql = "SELECT
        oi.order_id,
        P.name AS product_name,
        oi.quantity,
        (oi.quantity * oi.unit_price) AS total_amount
        FROM order_items oi
        JoiN products p ON oi.product_id = p.product_id
        ORDER BY oi.order_id ASC";

    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
                <th>Order ID</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Total Amount</th>
              </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['order_id']}</td>
                    <td>{$row['product_name']}</td>
                    <td>{$row['quantity']}</td>
                    <td>{$row['total_amount']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No results found.";
    }

    $connection->close();
    ?>
<?php include("footer.php")?>