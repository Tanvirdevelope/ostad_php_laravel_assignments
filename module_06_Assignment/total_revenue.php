<?php include("header.php")?>
<?php include("db_connection.php")?>
    <h1 style="text-align: center;">Task-03: Total Revenue</h1>

    <?php
    // SQL query
    $sql = "SELECT
        c.name AS category_name,
        SUM(oi.quantity * oi.unit_price) AS total_revenue
        FROM categories c
        LEFT JOIN products p ON c.category_id = p.category_id
        LEFT JOIN order_items oi ON P.product_id = oi.product_id
        GROUP BY c.name
        ORDER BY total_revenue DESC";

    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
                <th>Category Name</th>
                <th>Total Revenue (BDT)</th>
              </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['category_name']}</td>
                    <td style='text-align: right;'>"; 
                
            if ($row['total_revenue'] === null) {
                echo "0.00  ৳"; 
            } else {
                $formattedRevenue = number_format($row['total_revenue'], 2); 
                echo "{$formattedRevenue} ৳"; 
            }
        
            echo "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No results found.";
    }

    ?>
    <?php include("footer.php")?>