<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $data = ['fantasi', 'petualangan','romantis','kontemporer','distopia','misteri','horor','thriller','paranormal','fiksi sejarah','fiksi ilmiah'];

        foreach ($data as $value){
            Category::insert(['name' => $value]);
        }
    }
}
