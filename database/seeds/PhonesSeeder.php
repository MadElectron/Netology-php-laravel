<?php

use Illuminate\Database\Seeder;

class PhonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phones')->insert([
            'contact_id' => 1,
            'phone' => '+7 (999) 123-45-67',
            "created_at" => new \Datetime(),
            "updated_at" => new \Datetime(),            
        ]);
    }
}
