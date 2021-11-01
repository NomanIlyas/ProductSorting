<?php

require 'Catalog.php';

$products = [
    [
        'id' => 1,
        'name' => 'Alabaster Table',
        'price' => 12.99,
        'created' => '2019-01-04',
        'sales_count' => 32,
        'views_count' => 730,
    ],
    [
        'id' => 2,
        'name' => 'Zebra Table',
        'price' => 44.49,
        'created' => '2012-01-04',
        'sales_count' => 301,
        'views_count' => 3279,
    ],
    [
        'id' => 3,
        'name' => 'Coffee Table',
        'price' => 10.00,
        'created' => '2014-05-28',
        'sales_count' => 1048,
        'views_count' => 20123,
    ]
];

$productPriceSorter = 'price';
$productSalesPerViewSorter = 'product_sales_per_view';

$catalog = new Catalog($products);
$productsSortedByPrice = $catalog->getProducts($productPriceSorter);
$productsSortedBySalesPerView = $catalog->getProducts($productSalesPerViewSorter);
//echo "Input: \n\n";
//print_r($products);
echo "Sorted by price: \n";
print_r($productsSortedByPrice);
//echo "Sorted by product sale per view: \n";
//print_r($productsSortedBySalesPerView);