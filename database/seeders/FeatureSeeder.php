<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 
class FeatureSeeder extends Seeder {
    public function run() {
        DB::table('tbl_features')->insert([
            ['name' => 'Model', 'description' => 'Represents data and logic in MVC'],
            ['name' => 'View', 'description' => 'Handles presentation and UI rendering'],
            ['name' => 'Controller', 'description' => 'Controls request flow in Laravel'],
            ['name' => 'Routes', 'description' => 'Defines web and API request URLs'],
            ['name' => 'Middleware', 'description' => 'Filters HTTP requests before processing'],
            ['name' => 'Blade Templates', 'description' => 'Template engine for Laravel views'],
            ['name' => 'Migrations', 'description' => 'Manages database structure changes'],
            ['name' => 'Seeders', 'description' => 'Pre-populates database with data'],
            ['name' => 'Database', 'description' => 'Handles database interactions'],
            ['name' => 'Eloquent ORM', 'description' => 'Laravel’s built-in Active Record ORM'],
        ]);
    }
}