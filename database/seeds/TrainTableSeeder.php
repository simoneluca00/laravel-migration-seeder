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

        $train->azienda = 'Italo';
        $train->stazione_di_partenza = 'Bari';
        $train->stazione_di_arrivo = 'Milano';
        $train->orario_di_partenza = '2022-05-22 17:20:26.000000';
        $train->orario_di_arrivo = '2022-05-22 19:40:26.000000';
        $train->codice_treno = '82D6AD';
        $train->numero_carrozze = 7;
        $train->in_orario = true;
        $train->cancellato = true;

        $train->save();
    }
}
