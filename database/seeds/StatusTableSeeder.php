<?php

use Illuminate\Database\Seeder;
use App\Models\Statuses;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = array(
            ['status' => 'Activo'],
            ['status' => 'Inactivo'],
        );

        foreach ($statuses as $value){
            $status = new Statuses;
            $status->name = $value['status'];
            $status->type_status_id = 1;
            $status->save();
        }
    }
}
