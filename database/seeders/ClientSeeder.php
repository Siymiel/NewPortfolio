<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = \Illuminate\Support\Facades\File::allFiles(public_path('/images/dummy/clients'));
        $clients = [
            [
                'title' => ($title = 'Samuel Kinyua'),
                'slug' => $title,
                'position' => 'CEO - Connectors Travel',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur minus consequuntur!',
                'active' => 1,
            ],
            [
                'title' => ($title = 'Joshua Omido'),
                'slug' => $title,
                'position' => 'Owner - www.joshuaomido.com',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur minus consequuntur!',
                'active' => 1,
            ],
            [
                'title' => ($title = 'Snobole software'),
                'slug' => $title,
                'position' => 'www.snobole.com',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur minus consequuntur!',
                'active' => 1,
            ]
        ];
        foreach($clients as $index => $client){
            $client = Client::create($client);
            $client->copyMedia(new \Illuminate\Http\File($images[$index]))->toMediaCollection('image');
        }
    }
}
