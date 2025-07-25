<?php

// Autoload function
spl_autoload_register(function ($class) {
    include __DIR__ . '/classes/' . $class . '.php';
});

// Generate 10 dynamic records
$users = [];
$products = [];
$customers = [];
$orders = [];

for ($i = 1; $i <= 10; $i++) {
    $users[] = new User();
    $products[] = new Product();
    $customers[] = new Customer();
    $orders[] = new Order();
}

// Display data in a table
echo "<table border='1'>";
echo "<tr><th>User</th><th>Product</th><th>Customer</th><th>Order</th></tr>";

for ($i = 0; $i < 10; $i++) {
    echo "<tr>";
    echo "<td>" . $users[$i]->getName() . "</td>";
    echo "<td>" . $products[$i]->getProduct() . "</td>";
    echo "<td>" . $customers[$i]->getCustomerName() . "</td>";
    echo "<td>" . $orders[$i]->getOrderDetails() . "</td>";
    echo "</tr>";
}

echo "</table>";