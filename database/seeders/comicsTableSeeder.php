<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class comicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics');
        // dd($comics);
        
        foreach ($comics as $comic) {
            $newcomic = new Comic();
            $newcomic->title = $comic['title'];
            $newcomic->description = $comic['description'];
            $newcomic->thumb = $comic['thumb'];
            $newcomic->price = floatval(str_replace(['$','€', '£'], '', $comic['price']));
            $newcomic->series = $comic['series'];
            $newcomic->sale_date = $comic['sale_date'];
            $newcomic->type = $comic['type'];
            $newcomic->save();
        }
    }
}
