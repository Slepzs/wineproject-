<?php

use App\WineCategory;
use Illuminate\Database\Seeder;

class WineCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $wines = [
            [
                'name' => 'Red Wine'
            ], [
                'name' => 'White Wine'
            ], [
                'name' => 'Rosé Wine'
            ], [
                'name' => 'Port Wine'
            ], [
                'name' => 'Organic wine'
            ], [
                'name' => 'Sparkling wine'
            ], [
                'name' => 'Dessert wine'
            ], [
                'name' => 'Champagne'
            ]


        ];

        foreach($wines as $wine) {
            WineCategory::Create($wine);
        }

    }
}
