<?php

use Illuminate\Database\Seeder;
use CodeDelivery\Models\Order;
use CodeDelivery\Models\Orderitem;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Order::class, 10)->create()->each(function($o){

            for ($i = 0; $i <= 2; $i++)
            {
                $o->items()->save(factory(Orderitem::class)->make([
                    'product_id' => rand(1,5),
                    'qtd' => 2,
                    'price'=> 50
                ]));
            }
        });
    }
}
