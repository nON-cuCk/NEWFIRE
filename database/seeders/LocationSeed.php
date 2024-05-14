<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LocationList;
            

class LocationSeed extends Seeder 
{
    /**
     * Run the database seeds.
     * php artisan db:seed --class=LocationSeed
     */
    public function run(): void
    {
        $data = [
            //this is for CAS building Section
            ['id'=>'1','building' => 'CAS', 'floor' => 'Ground Floor', 'room' => 'OFFICE OF THE CAS DEAN'],
            ['id'=>'2','building' => 'CAS', 'floor' => 'Ground Floor', 'room' => '106'],
            ['id'=>'3','building' => 'CAS', 'floor' => 'Ground Floor', 'room' => '105'],
            ['id'=>'4','building' => 'CAS', 'floor' => 'Ground Floor', 'room' => '104'],
            ['id'=>'5','building' => 'CAS', 'floor' => 'Ground Floor', 'room' => '107'],
            ['id'=>'6','building' => 'CAS', 'floor' => 'Ground Floor', 'room' => 'MASS COM'],
            ['id'=>'7','building' => 'CAS', 'floor' => 'Ground Floor', 'room' => '108'],
            ['id'=>'8','building' => 'CAS', 'floor' => 'Ground Floor', 'room' => '109'],
            ['id'=>'9','building' => 'CAS', 'floor' => 'Ground Floor', 'room' => '110'],
            ['id'=>'10','building' => 'CAS', 'floor' => 'Ground Floor', 'room' => '103'],
            ['id'=>'11','building' => 'CAS', 'floor' => 'Ground Floor', 'room' => 'OFFICE OF THE GOVERNOR CAS'],
            ['id'=>'12','building' => 'CAS', 'floor' => 'Ground Floor', 'room' => '102'],
            ['id'=>'13','building' => 'CAS', 'floor' => 'Ground Floor', 'room' => '111'],
            ['id'=>'14','building' => 'CAS', 'floor' => 'Ground Floor', 'room' => '112'],
            ['id'=>'15','building' => 'CAS', 'floor' => 'Ground Floor', 'room' => '101'],
            ['id'=>'16','building' => 'CAS', 'floor' => 'Second Floor', 'room' => 'Faculty Computing and Research Center'],
            ['id'=>'17','building' => 'CAS', 'floor' => 'Second Floor', 'room' => 'Reading Area'],
            ['id'=>'18','building' => 'CAS', 'floor' => 'Second Floor', 'room' => 'Internal Audit Office'],
            ['id'=>'19','building' => 'CAS', 'floor' => 'Second Floor', 'room' => 'Information Technology Office'],
            ['id'=>'20','building' => 'CAS', 'floor' => 'Second Floor', 'room' => 'ITO Directors Office'],
            ['id'=>'21','building' => 'CAS', 'floor' => 'Second Floor', 'room' => 'Library Storage Room'],
            ['id'=>'22','building' => 'CAS', 'floor' => 'Second Floor', 'room' => 'Office of the Librarian'],
            ['id'=>'23','building' => 'CAS', 'floor' => 'Second Floor', 'room' => 'Library Reading Area'],
            ['id'=>'24','building' => 'CAS', 'floor' => 'Second Floor', 'room' => 'Reference and Periodical Section'],
            ['id'=>'25','building' => 'CAS', 'floor' => 'Second Floor', 'room' => 'Law Section'],
            ['id'=>'26','building' => 'CAS', 'floor' => 'Second Floor', 'room' => 'Graduate School Section'],
            ['id'=>'27','building' => 'CAS', 'floor' => 'Second Floor', 'room' => 'Library Books Section'],
            ['id'=>'28','building' => 'CAS', 'floor' => 'Third Floor', 'room' => 'CSIT Faculty Room'],
            ['id'=>'29','building' => 'CAS', 'floor' => 'Third Floor', 'room' => '306'],
            ['id'=>'30','building' => 'CAS', 'floor' => 'Third Floor', 'room' => '307 & 308'],
            ['id'=>'31','building' => 'CAS', 'floor' => 'Third Floor', 'room' => '309'],
            ['id'=>'32','building' => 'CAS', 'floor' => 'Third Floor', 'room' => '305'],
            ['id'=>'33','building' => 'CAS', 'floor' => 'Third Floor', 'room' => '304'],
            ['id'=>'34','building' => 'CAS', 'floor' => 'Third Floor', 'room' => '303'],
            ['id'=>'35','building' => 'CAS', 'floor' => 'Third Floor', 'room' => '310'],
            ['id'=>'36','building' => 'CAS', 'floor' => 'Third Floor', 'room' => '311'],
            ['id'=>'37','building' => 'CAS', 'floor' => 'Third Floor', 'room' => 'CAS English Faculty Room'],
            ['id'=>'38','building' => 'CAS', 'floor' => 'Third Floor', 'room' => '301'],
            ['id'=>'39','building' => 'CAS', 'floor' => 'Third Floor', 'room' => '302'],
            ['id'=>'40','building' => 'CAS', 'floor' => 'Fourth Floor', 'room' => 'Library Multipurpose Reading Hall'],
            ['id'=>'41','building' => 'CAS', 'floor' => 'Fourth Floor', 'room' => 'TR1'],
            ['id'=>'42','building' => 'CAS', 'floor' => 'Fourth Floor', 'room' => 'TR2'],
            ['id'=>'43','building' => 'CAS', 'floor' => 'Fourth Floor', 'room' => 'TR3'],
            ['id'=>'44','building' => 'CAS', 'floor' => 'Fourth Floor', 'room' => 'CAS Multipurpose Reading Hall'],
            ['id'=>'45','building' => 'CAS', 'floor' => 'Fourth Floor', 'room' => 'Computer Lab 1'],
            ['id'=>'46','building' => 'CAS', 'floor' => 'Fourth Floor', 'room' => 'Computer Lab 2'],
            ['id'=>'47','building' => 'CAS', 'floor' => 'Fourth Floor', 'room' => 'Conference Room'],
            ['id'=>'48','building' => 'CAS', 'floor' => 'Fourth Floor', 'room' => 'Internet Research Center'],
            ['id'=>'49','building' => 'CAS', 'floor' => 'Fourth Floor', 'room' => 'Control Room'],
            ['id'=>'50','building' => 'CAS', 'floor' => 'Fourth Floor', 'room' => 'Media Center']
        ];
        foreach ($data as $item) {
            LocationList::create($item);
        }
    }
}
