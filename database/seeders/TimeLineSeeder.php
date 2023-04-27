<?php

namespace Database\Seeders;

use App\Models\TimeLine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimeLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('time_lines')->delete();

        $time_lines = [
            ['id' => 1, 'title' => 'Repeat', 'description' => 'Because you need strength'],
            ['id' => 2, 'title' => 'Sleep', 'description' => 'Because it\'s awesome!'],
            ['id' => 3, 'title' => 'Code', 'description' => 'Because you need rest'],
            ['id' => 4, 'title' => 'Eat', 'description' => 'Because this is the life you love!']
        ];

        TimeLine::insert($time_lines); 
    }
}
