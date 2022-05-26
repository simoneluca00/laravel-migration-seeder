<?php

use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();

        $train->azienda = 'Frecciarossa';
        $train->stazione_di_partenza = 'Venezia';
        $train->stazione_di_arrivo = 'Napoli';
        $train->orario_di_partenza = '2022-05-26 18:20:26.000000';
        $train->orario_di_arrivo = '2022-05-26 23:40:26.000000';
        $train->codice_treno = '72GF54';
        $train->numero_carrozze = 9;
        $train->in_orario = true;
        $train->cancellato = false;

        $train->save();
    }
}
