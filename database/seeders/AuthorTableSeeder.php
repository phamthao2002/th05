<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Author;
class AuthorTableSeeder extends Seeder
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
                Author::create([
                    'ma_tgia'=>$i+1,
                    'ten_tgia'=>$faker->sentence(3,true),
                    'hinh_tgia'=>$faker->imageUrl(200,200,'peoples', true)
                ]);
    }
    }
}
