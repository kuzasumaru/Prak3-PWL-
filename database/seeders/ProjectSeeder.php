<?php

namespace Database\Seeders;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
                [
                    'nama'=>'Website',
                    'image' => 'https://raw.githubusercontent.com/agustohr/Prak2-PWL-ReactJS/main/src/assets/p1.jpg',

                ],
                [
                    'nama'=>'Fotografi',
                    'image' => 'https://raw.githubusercontent.com/agustohr/Prak2-PWL-ReactJS/main/src/assets/p2.jpg',

                ],
                [
                    'nama'=>'Lukisan',
                    'image' => 'https://raw.githubusercontent.com/agustohr/Prak2-PWL-ReactJS/main/src/assets/p3.jpg',

                ]
            ];
        
            foreach ($data as $data){
                Project::create($data);
            };
    }
}
