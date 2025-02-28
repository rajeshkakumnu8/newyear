<?php
// Database connection
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'boutique';

$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}
$sql = "
SELECT 
    c.category_name, 
    sc.sub_name, 
    SUM(p.stock_quantity) AS total_stock, 
    COUNT(o.order_id) AS sold_count 
FROM 
    products p 
JOIN 
    categorie c ON p.category_id = c.category_id 
JOIN 
    sub_category sc ON p.subcategory_id = sc.subcategory_id 
LEFT JOIN 
    orders o ON p.product_id = o.product_id AND o.payment_method = 'paid' 
GROUP BY 
    c.category_name, sc.sub_name
";

$result = $conn->query($sql);

$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();

echo json_encode($data);
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="ps-lg-4">
    <h4 class="card-title">Profit by Product Category</h4>
    <canvas id="stockSoldChart"></canvas>
</div>

<script>
fetch('your_php_script.php')
    .then(response => response.json())
    .then(data => {
        const categories = [];
        const stocks = [];
        const soldCounts = [];

        data.forEach(item => {
            categories.push(`${item.category_name} - ${item.sub_name}`);
            stocks.push(item.total_stock);
            soldCounts.push(item.sold_count);
        });

        const ctx = document.getElementById('stockSoldChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: categories,
                datasets: [
                    {
                        label: 'Stock Available',
                        data: stocks,
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Sold Out',
                        data: soldCounts,
                        backgroundColor: 'rgba(255, 99, 132, 0.5)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Stock and Sold Counts by Category'
                    }
                }
            }
        });
    });
</script>
