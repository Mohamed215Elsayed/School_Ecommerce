<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;//
class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('settings')->delete();
        $data = [
            ['key' => 'current_session', 'value' => '2023-2024'],
            ['key' => 'school_title', 'value' => 'ELNOOR'],
            ['key' => 'school_name', 'value' => 'ELNOOR International Schools'],
            ['key' => 'end_first_term', 'value' => '07-1-2023'],
            ['key' => 'end_second_term', 'value' => '01-06-2023'],
            ['key' => 'phone', 'value' => '01027305928'],
            ['key' => 'address', 'value' => 'طنطا/كفرالزيات'],
            ['key' => 'school_email', 'value' => 'ELNOOR@mo.com'],
            ['key' => 'logo', 'value' => '1.jpg'],
        ];
        DB::table('settings')->insert($data);


    }
}

