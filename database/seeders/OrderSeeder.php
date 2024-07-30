<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run()
    {
        Order::create(['customer_id' => 1]);
        Order::create(['customer_id' => 2]);
    }
}
