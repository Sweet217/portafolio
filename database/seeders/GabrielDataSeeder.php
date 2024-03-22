<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GabrielData;

class GabrielDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GabrielData::create([
            'name' => 'Gabriel',
            'age' => '19',
            'location' => 'Colima, MX',
            'occupation' => 'Aspiring software developer',
            'institution' => 'Universidad De Colima',
            'program' => 'Software Engineer',
            'hobbies' => 'Projects, Gym, Guitar, Drive',
            'email' => 'gvelazquez6@ucol.mx', 
            'phone_number' => '312-595-3394',
            'linkedin' => 'https://www.linkedin.com/in/gabriel-velazquez-berrueta-53a3b925a/',
            'github' => 'https://github.com/Sweet217',
            'mlsa' => 'https://mvp.microsoft.com/es-ES/studentambassadors/profile/904821f4-e63a-45c8-a413-6996a40c8893',
            'company' => 'Scala Towers',
            'role' => 'Prompt Engineer',
            'startDate' => 'September of 2023',
            'endDate' => 'November of 2023',
            'responsabilities' => 'Development of custom prompts and scripts, Test of Ais and how they can be used on internal projects',
        ]);
    }
}
