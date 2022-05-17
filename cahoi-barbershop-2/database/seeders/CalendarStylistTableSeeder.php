<?php

namespace Database\Seeders;

use App\Models\CalendarStylist;
use Illuminate\Database\Seeder;

class CalendarStylistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        for ($i = 1; $i <= 3; $i++) {
            for ($j = $i; $j < 50; $j++) {
                CalendarStylist::create([
                    "stylist_id" => $j,
                    "calendar_id" => $i,
                ]);
            }
        }
    }
}
