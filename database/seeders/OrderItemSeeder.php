<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderItem;

class OrderItemSeeder extends Seeder
{
    public function run()
    {
        OrderItem::create(['order_id' => 1, 'menu_item_id' => 1, 'quantity' => 2]);
        OrderItem::create(['order_id' => 1, 'menu_item_id' => 2, 'quantity' => 1]);
        OrderItem::create(['order_id' => 2, 'menu_item_id' => 3, 'quantity' => 3]);
    }
}
