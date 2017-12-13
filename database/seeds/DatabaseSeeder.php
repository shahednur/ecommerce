<?php

use Illuminate\Database\Seeder;
USE Illuminate\Support\Facades\DB;
use App\Model\Product;
use App\Model\Customer;
use App\Model\Review;
use App\Model\Address;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        User::truncate();
        Product::truncate();
        Customer::truncate();
        Review::truncate();
        Address::truncate();

        $userQuantity=5;
        $productQuantity = 100;
        $customerQuantity = 230;
        $reviewQuantity = 120;
        $addressQuantity = 230;


        factory(App\User::class,$userQuantity)->create();
        factory(App\Model\Product::class,$productQuantity)->create();
        factory(App\Model\Address::class,$addressQuantity)->create();
        factory(App\Model\Customer::class,$customerQuantity)->create();
        factory(App\Model\Review::class,$reviewQuantity)->create();



    }
}
