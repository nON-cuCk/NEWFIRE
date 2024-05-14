<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FireList;

class FireListSeed extends Seeder
{
    /**
     * run seeder command = php artisan db:seed --class=FireListSeed
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Note that location is fix. If there's any changes, it must be done hard coded  :)

            //this is for CAS Building Ground Floor Area
            ['id' => '1','type' => '','firename' =>'','serial_number' =>'','building' =>'1','floor' =>'1','room' =>'1','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '2','type' => '','firename' =>'','serial_number' =>'','building' =>'2','floor' =>'2','room' =>'2','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '3','type' => '','firename' =>'','serial_number' =>'','building' =>'3','floor' =>'3','room' =>'3','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '4','type' => '','firename' =>'','serial_number' =>'','building' =>'4','floor' =>'4','room' =>'4','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '5','type' => '','firename' =>'','serial_number' =>'','building' =>'5','floor' =>'5','room' =>'5','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '6','type' => '','firename' =>'','serial_number' =>'','building' =>'6','floor' =>'6','room' =>'6','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '7','type' => '','firename' =>'','serial_number' =>'','building' =>'7','floor' =>'7','room' =>'7','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '8','type' => '','firename' =>'','serial_number' =>'','building' =>'8','floor' =>'8','room' =>'8','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '9','type' => '','firename' =>'','serial_number' =>'','building' =>'9','floor' =>'9','room' =>'9','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '10','type' => '','firename' =>'','serial_number' =>'','building' =>'10','floor' =>'10','room' =>'10','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '11','type' => '','firename' =>'','serial_number' =>'','building' =>'11','floor' =>'11','room' =>'11','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '12','type' => '','firename' =>'','serial_number' =>'','building' =>'12','floor' =>'12','room' =>'12','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '13','type' => '','firename' =>'','serial_number' =>'','building' =>'13','floor' =>'13','room' =>'13','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '14','type' => '','firename' =>'','serial_number' =>'','building' =>'14','floor' =>'14','room' =>'14','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '15','type' => '','firename' =>'','serial_number' =>'','building' =>'15','floor' =>'15','room' =>'15','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            //this is for CAS Building Second Floor Area
            ['id' => '16','type' => '','firename' =>'','serial_number' =>'','building' =>'16','floor' =>'16','room' =>'16','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '17','type' => '','firename' =>'','serial_number' =>'','building' =>'17','floor' =>'17','room' =>'17','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '18','type' => '','firename' =>'','serial_number' =>'','building' =>'18','floor' =>'18','room' =>'18','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '19','type' => '','firename' =>'','serial_number' =>'','building' =>'19','floor' =>'19','room' =>'19','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '20','type' => '','firename' =>'','serial_number' =>'','building' =>'20','floor' =>'20','room' =>'20','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '21','type' => '','firename' =>'','serial_number' =>'','building' =>'21','floor' =>'21','room' =>'21','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '22','type' => '','firename' =>'','serial_number' =>'','building' =>'22','floor' =>'22','room' =>'22','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '23','type' => '','firename' =>'','serial_number' =>'','building' =>'23','floor' =>'23','room' =>'23','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '24','type' => '','firename' =>'','serial_number' =>'','building' =>'24','floor' =>'24','room' =>'24','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '25','type' => '','firename' =>'','serial_number' =>'','building' =>'25','floor' =>'25','room' =>'25','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '26','type' => '','firename' =>'','serial_number' =>'','building' =>'26','floor' =>'26','room' =>'26','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '27','type' => '','firename' =>'','serial_number' =>'','building' =>'27','floor' =>'27','room' =>'27','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            //this is for CAS Building Third Floor Area
            ['id' => '28','type' => '','firename' =>'','serial_number' =>'','building' =>'28','floor' =>'28','room' =>'28','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '29','type' => '','firename' =>'','serial_number' =>'','building' =>'29','floor' =>'29','room' =>'29','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '30','type' => '','firename' =>'','serial_number' =>'','building' =>'30','floor' =>'30','room' =>'30','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '31','type' => '','firename' =>'','serial_number' =>'','building' =>'31','floor' =>'31','room' =>'31','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '32','type' => '','firename' =>'','serial_number' =>'','building' =>'32','floor' =>'32','room' =>'32','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '33','type' => '','firename' =>'','serial_number' =>'','building' =>'33','floor' =>'33','room' =>'33','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '34','type' => '','firename' =>'','serial_number' =>'','building' =>'34','floor' =>'34','room' =>'34','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '35','type' => '','firename' =>'','serial_number' =>'','building' =>'35','floor' =>'35','room' =>'35','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '36','type' => '','firename' =>'','serial_number' =>'','building' =>'36','floor' =>'36','room' =>'36','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '37','type' => '','firename' =>'','serial_number' =>'','building' =>'37','floor' =>'37','room' =>'37','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '38','type' => '','firename' =>'','serial_number' =>'','building' =>'38','floor' =>'38','room' =>'38','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '39','type' => '','firename' =>'','serial_number' =>'','building' =>'39','floor' =>'39','room' =>'39','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            //this is for CAS Building Fourth Floor Area
            ['id' => '40','type' => '','firename' =>'','serial_number' =>'','building' =>'40','floor' =>'40','room' =>'40','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '41','type' => '','firename' =>'','serial_number' =>'','building' =>'41','floor' =>'41','room' =>'41','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '42','type' => '','firename' =>'','serial_number' =>'','building' =>'42','floor' =>'42','room' =>'42','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '43','type' => '','firename' =>'','serial_number' =>'','building' =>'43','floor' =>'43','room' =>'43','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '44','type' => '','firename' =>'','serial_number' =>'','building' =>'44','floor' =>'44','room' =>'44','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '45','type' => '','firename' =>'','serial_number' =>'','building' =>'45','floor' =>'45','room' =>'45','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '46','type' => '','firename' =>'','serial_number' =>'','building' =>'46','floor' =>'46','room' =>'46','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '47','type' => '','firename' =>'','serial_number' =>'','building' =>'47','floor' =>'47','room' =>'47','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '48','type' => '','firename' =>'','serial_number' =>'','building' =>'48','floor' =>'48','room' =>'48','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '49','type' => '','firename' =>'','serial_number' =>'','building' =>'49','floor' =>'49','room' =>'49','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>''],
            ['id' => '50','type' => '','firename' =>'','serial_number' =>'','building' =>'50','floor' =>'50','room' =>'50','installation_date' =>now(),'expiration_date' =>now(),'description' =>'','status'=>'']
        ];
        foreach($data as $fireitem){
            Firelist::create($fireitem);
        }
    }
}



