<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;
//use App\Models\Cart;

class DatabaseSeeder extends Seeder
{
      /**
     * Seed the application's database from user.
     *
     * @return void
     */
    
     public function run()
    {

        // Users
        User::create(
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'admin',
                'remember_token' => str_random(10),
                'api_token' => str_random(8),
            ]
        ); 

        User::create(
            [
                'name' => 'alex',
                'email' => 'alex@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'redac',
                'remember_token' => str_random(10),
                'api_token' => str_random(8),
            ]
        );
        User::create(
            [
                'name' => 'helen',
                'email' => 'helen@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'redac',
                'remember_token' => str_random(10),
                'api_token' => str_random(8),
            ]
        ); 
    /**
     * Seed the application's database from product.
     *
     * @return void
     */
    
        Product::create(
            [
                'name' => 'Shirt in Stretch Cotton',
                'price' => '150',
                'image' => 'product-1.jpg',
                'top9' => 0,
            ]
        ); 
        Product::create(
            [
                'name' => 'Herschel supply',
                'price' => '160',
                'image' => 'product-2.jpg',
                'top9' => 0,
            ]
        );  
        Product::create(
            [
                'name' => 'Classic Trench Coat',
                'price' => '150',
                'image' => 'product-3.jpg',
                'top9' => 0,
            ]
        );

        Product::create(
            [
                'name' => 'Front Pocket Jumper',
                'price' => '100',
                'image' => 'product-4.jpg',
                'top9' => 0,
            ]
        ); 
        Product::create(
            [
                'name' => 'Mini Silver Mesh Watch',
                'price' => '50',
                'image' => 'product-5.jpg',
                'top9' => 0,
            ]
        );  
        Product::create(
            [
                'name' => 'Converse All Star Hi Plimsolls',
                'price' => '90',
                'image' => 'product-6.jpg',
                'top9' => 0,
            ]
        ); 

        Product::create(
            [
                'name' => 'Herschel supply',
                'price' => '180',
                'image' => 'product-7.jpg',
                'top9' => 0,
            ]
        ); 
        Product::create(
            [
                'name' => 'Square Neck Back',
                'price' => '100',
                'image' => 'product-8.jpg',
                'top9' => 0,
            ]
        );  
        Product::create(
            [
                'name' => 'Jacket',
                'price' => '110',
                'image' => 'product-9.jpg',
                'top9' => 0,
            ]
        ); 
        
        Product::create(
            [
                'name' => 'Shirt blue',
                'price' => '182',
                'image' => 'product-10.jpg',
                'top9' => 1,
            ]
        ); 
        Product::create(
            [
                'name' => 'Herschel',
                'price' => '165',
                'image' => 'product-11.jpg',
                'top9' => 1,
            ]
        );  
        Product::create(
            [
                'name' => 'Classic Trench Coat',
                'price' => '142',
                'image' => 'product-12.jpg',
                'top9' => 1,
            ]
        );
        Product::create(
            [
                'name' => 'Shirt in Stretch Cotton',
                'price' => '123',
                'image' => 'product-13.jpg',
                'top9' => 1,
            ]
        ); 
        Product::create(
            [
                'name' => 'Herschel supply',
                'price' => '118',
                'image' => 'product-14.jpg',
                'top9' => 1,
            ]
        );  
        Product::create(
            [
                'name' => 'Classic Trench Coat',
                'price' => '155',
                'image' => 'product-15.jpg',
                'top9' => 1,
            ]
        );

    }
}
