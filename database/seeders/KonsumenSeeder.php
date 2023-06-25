<?php

namespace Database\Seeders;

use App\Models\konsumen;
use Illuminate\Database\Seeder;

class KonsumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = date('Y-m-d H:i:s');

        konsumen::insert([
            ['name' => 'Marzuq',
             'address' => 'Medan',
             'Age' => '21',
             'Phone' => '085348575552',
             'created_at' => $timestamp,
             'updated_at'=>$timestamp],

        ]);
    }
}
