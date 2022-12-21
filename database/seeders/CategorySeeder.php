<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'ရသစာပေ',

            ],
            [
                'name' => 'သုတစာပေ',

            ],
            [
                'name' => 'နိုင်ငံရေးစာပေ',

            ],
            [
                'name' => 'ဂျာနယ်',

            ],
            [
                'name' => 'မဂ္ဂဇင်း',

            ],
            [
                'name' => 'ဆောင်းပါး',

            ],



        ];

          //  foreach($authors as $author){
              //  DB::table('authors')->insert($author);
           // }
        Category::insert($categories);

    }
}
