<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
// use App\Compony;
use App\Models\Compony;

use App\Models\compony as ModelsCompony;

class ComponySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Compony::class, 50)->create();
        Compony::factory()->count(50)->create();
        // DB::table('componies')->insert([
        //             'name'=> 'Vardenis' ,
        //             'type'=> 'Pavardenis',
        //             'description'=> 'Slapyvardis',
        //         ]);
    }
}
