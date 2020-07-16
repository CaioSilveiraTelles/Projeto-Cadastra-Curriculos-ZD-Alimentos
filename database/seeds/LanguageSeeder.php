<?php

use Illuminate\Database\Seeder;
use App\Language;
class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [            
            ['description' => 'Português'],
            ['description' => 'Inglês'],
            ['description' => 'English'],
            ['description' => 'Italiano'],
            ['description' => 'Italian'],
        ];
        foreach ($languages as $lang) {
            Language::create($lang);
        }
    }
}
