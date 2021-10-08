<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::factory()->count(50)->create();

    //     DB::table('clients')->insert([
    //         'name'=> 'Vardenis' ,
    //         'surname'=> 'Pavardenis',
    //         'username'=> 'Slapyvardis',
    //     ]);
    }
}
