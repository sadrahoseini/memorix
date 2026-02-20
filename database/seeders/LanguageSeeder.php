<?php

namespace Database\Seeders;

use App\Models\Memorize\Languages\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(base_path('database/seeders/resources/json/memorize/languages.json'));
        $languages = json_decode($json, false);

        foreach ($languages as $language_data) {
            Language::create([
                'name' => $language_data->name,
                'code' => $language_data->code
            ]);
        }
    }
}
