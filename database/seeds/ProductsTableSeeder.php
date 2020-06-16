<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product();
        $product->name = 'San pham 001';
        $product->description = 'Mo ta san pham 001';
        $product->price = 1.5;
        $product->view_count = 0;
        $product->save();

        $product = new \App\Product();
        $product->name = 'San pham 002';
        $product->description = 'Mo ta san pham 002';
        $product->price = 2.5;
        $product->view_count = 0;
        $product->save();

        $product = new \App\Product();
        $product->name = 'San pham 003';
        $product->description = 'Mo ta san pham 003';
        $product->price = 1.5;
        $product->view_count = 0;
        $product->save();
    }
}
