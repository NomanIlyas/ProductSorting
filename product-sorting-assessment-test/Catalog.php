<?php

/**
 * Class Catalog
 */
class Catalog
{
    /**
     * @var array
     */
    private $products;

    /**
     * @param array $products
     */
    public function __construct (array $products)
    {
        $this->products = $products;
    }

    /**
     * @param string $sortedBy
     * @param int $order
     * @return array|void
     */
    public function getProducts(string $sortedBy, int $order = SORT_DESC)
    {
        if ($sortedBy === 'price') {
            $price = array_column($this->products, $sortedBy);
            array_multisort($price, $order, $this->products);

            return $this->products;
        } elseif ($sortedBy === 'product_sales_per_view') {
            $productSalesPerViewSorter = array();
            foreach ($this->products as $product) {
                $product [$sortedBy] = $product['sales_count'] / $product['views_count'];
                $productSalesPerViewSorter [] = $product;
            }
            $salesPerView = array_column($productSalesPerViewSorter, $sortedBy);
            array_multisort($salesPerView, $order, $productSalesPerViewSorter);

            return $productSalesPerViewSorter;
        }
    }
}