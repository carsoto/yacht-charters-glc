<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use File;
use App\Models\Admin\Broker;

class BrokerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brokers_json = File::get("database/data/brokers.json");
        $brokers = json_decode($brokers_json);
  
        foreach ($brokers as $key => $value) {
            
            $broker = Broker::create([
                'full_name' => ucwords($value->full_name),
                'email' => strtolower($value->email),
                'company' => $value->company,
                'phone' => $value->phone,
                'percentage' => $value->percentage
            ]);
            $broker->save();
        }
    }
}
