<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\History;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use File;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void

    {
        $country_list = [
            'Panama',
            'Austria',
            'Egypt',
            'Turkey',
            'Slovakia',
        ];

        $hotels_list = [
            'Panorama',
            'Leo',
            'Nice',
            'Best',
            'Lagoon',
            'Kempinski',
            'Lotos',
            'Rose',
            'Sea',
            'Island',
            'River',
            'Beach',
            'Dragoon',
            'Elefant',
            'Delphin',
        ];
        $mainPhotoName = [
            '6BigqbBc8.png',
            '6TyXRqA7c.png',
            'ATbjMxryc.png',
            '8TEoGXzTa.png',
            'BTarex9T8.jpg',
            'Lid5X67i4.png',
            'pc78BGazi.png',
            'pc78y5Gqi.jpg',
            'rinGnEyrT.png',
            'zcXe8Kq6i.jpg'
        ];
        $path = public_path('/test-photo/');
        $img = Image::make('V:\BIT\Uzduotys\BD\gallery/no_photo.jpg')->heighten(100);
        $img->save($path . 't_no_photo.jpg', 90);

        foreach(range(0,4) as $k){
            if(rand(0,1) > 0) { 
                $season = 'summer';
            } else {
                $season = 'winter';
            }
            DB::table('countries')->insert([
                'title' => $country_list[$k],
                'season' => $season,
            ]);
        }

        foreach(range(0,14) as $k){
            $phName = $mainPhotoName[rand(0,9)];
            $url = 'C:\xampp\htdocs\testas\testas\storage\app\public/' . $phName;
            $phName = rand(1000000, 9999999) .'-' . $phName;
            File::copy($url, $path . $phName);

            DB::table('hotels')->insert([
                'photo' => $phName,
                'name' => $hotels_list[$k],
                'country_id' => rand(0, 4),
                'trip_long' => rand(2, 20),
                'price' => rand(50000, 500000) / 100,
            ]);
        }
        DB::table('users')->insert([
            'name' => 'Briedis',
            'email' => 'briedis@gmail.com',
            'role' => 1,
            'password' => Hash::make('123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Bebras',
            'email' => 'bebras@gmail.com',
            'role' => 10,
            'password' => Hash::make('123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Lape',
            'email' => 'lape@gmail.com',
            'role' => 10,
            'password' => Hash::make('123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Ruonis',
            'email' => 'ruonis@gmail.com',
            'role' => 10,
            'password' => Hash::make('123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Zuikis',
            'email' => 'zuikis@gmail.com',
            'role' => 10,
            'password' => Hash::make('123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Arklys',
            'email' => 'arklys@gmail.com',
            'role' => 10,
            'password' => Hash::make('123'),
        ]);
        foreach(range(0,14) as $k){
            DB::table('orders')->insert([
                'user_id' => rand(2, 6),
                'hotel_id' => rand(1, 15),
            ]);
        }

    }
}
