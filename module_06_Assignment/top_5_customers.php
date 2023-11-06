<?php include("header.php")?>
<?php include("db_connection.php")?>
<h1 style="text-align: center;">Task-04: Top 5 Customers</h1>

    <?php

    // SQL query
    $sql = "SELECT
        c.name AS customer_name,
        SUM(o.total_amount) AS total_purchase_amount
        FROM Customers C
        LEFT JOIN orders o ON c.customer_id = o.customer_id
        GROUP BY c.name
        ORDER BY total_purchase_amount DESC
        LIMIT 5";

    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
                <th>Customer Name</th>
                <th>Total Purchase Amount (BDT)</th>
              </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['customer_name']}</td>
                    <td>{$row['total_purchase_amount']} ৳</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No results found.";
    };
    ?>
    <?php include("footer.php")?>