<?php

class P50_AddToCart {
    public function main(): void {
        $item = $_GET['item'] ?? '';
        
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        
        if (!empty($item)) {
            $_SESSION['cart'][] = $item;
        }
        
        echo implode(',', $_SESSION['cart']);
    }
}
