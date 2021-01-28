<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacts = [
            [
                'full_name' => ($full_name = 'Samuel Kinuthia'),
                'slug' => $full_name,
                'email' => 'samuel@gmail.com',
                'phone_number' => '0797741435',
                'message' => 'Lorem ipsum dolor Lorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolor Lorem ipsum dolor',
            ]
        ];
        foreach($contacts as $contact){
            $contact = Contact::create($contact);
        }
    }
}
