<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Ayahs;
use App\Models\Surahs;
use App\Models\Qiraats;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $surahs = Surahs::factory(5)->create();

        // Untuk setiap surah, kita akan membuat 100 ayahs
        $surahs->each(function (Surahs $surah): void {
            $ayahs = Ayahs::factory(5)->create(['surah_id' => $surah->id]);

            // Untuk setiap ayah, kita akan membuat 7 qiraats
            $ayahs->each(function (Ayahs $ayah): void {
                Qiraats::factory()->count(7)->create(['ayah_id' => $ayah->id]);
            });
        });
    }
}
