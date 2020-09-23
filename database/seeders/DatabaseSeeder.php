<?php

namespace Database\Seeders;

use App\Models\Dinosaur;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $dinoList = [
            [
                'name' => 'TRex',
                'imgUrl' => 'https://i.pinimg.com/originals/33/9b/81/339b81ac76de2d4f11ec0f8bc096bf0c.png',
            ],
            [
                'name' => 'Brontosaurus',
                'imgUrl' => 'https://wallpapertag.com/wallpaper/full/c/d/9/958632-download-free-cute-dinosaur-backgrounds-1920x1200.jpg',
            ],
            [
                'name' => 'Triceratops',
                'imgUrl' => 'https://i.ytimg.com/vi/aEbJlqnBP5M/maxresdefault.jpg',
            ],
            [
                'name' => 'Torosaurus',
                'imgUrl' => 'https://3.bp.blogspot.com/-YSjn5-vx-l0/UZVS0qQkV2I/AAAAAAAAAHg/iCsBN2aIp7E/s1600/Dinosaur+Debut+-+Torosaurus+-+Stage+3.png',
            ],
            [
                'name' => 'Stegasaurus',
                'imgUrl' => 'https://thumbs.dreamstime.com/z/cute-baby-stegosaurus-cartoon-illustration-45673785.jpg',
            ],
        ];

        foreach ($dinoList as $d) {
            $dino = new Dinosaur();
            $dino->name = $d['name'];
            $dino->imgUrl = $d['imgUrl'];
            $dino->save();
        }
    }
}
