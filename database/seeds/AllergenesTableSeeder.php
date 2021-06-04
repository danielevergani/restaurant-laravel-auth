<?php

use App\Allergen;
use Illuminate\Database\Seeder;

class AllergenesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allerg = [
            'Cereali e derivati',
            'Crostacei',
            'Uova',
            'Pesce',
            'Arachidi',
            'Soia',
            'Latte',
            'Frutta a guscio',
            'Sedano',
            'Senape',
        ];

        foreach ($allerg as  $aller) {
            $newAller = new Allergen();
            $newAller ->name = $aller;
            $newAller -> save();
        }
    }
}
