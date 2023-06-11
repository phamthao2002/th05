<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Khởi tạo đối tượng Faker
		$faker = Faker::create();												
        // Chạy vòng lặp xác định số bản ghi và kiểu dl từ Faker
            for($i=0; $i<20; $i++){
                Category::create([
                    'ma_tloai'=>$i+1,
                    'ten_tloai'=>$faker->sentence(2,true)
                ]);
    }
}
}