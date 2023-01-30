<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use App\Models\Type;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 5; $i++) {
            $new_type = new Type;

            $new_type->type_name = $faker->unique()->word();
            $new_type->description = $faker->text(500);
            $new_type->slug = Str::slug($new_type->type_name);
            
            $new_type->save();
        }
    }
}

