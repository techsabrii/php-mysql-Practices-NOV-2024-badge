<?php

class Order {
    public function getOrderDetails() {
        return "Order #" . rand(1000, 9999);
    }
}
