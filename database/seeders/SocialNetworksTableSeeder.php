<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SocialNetwork;


class SocialNetworksTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        SocialNetwork::create([
            'name' => 'whatsapp',
            'link' => 'https://web.whatsapp.com/send?text=|whatsapp://send?text=',
            'active' => 1
        ]);
        SocialNetwork::create([
            'name' => 'instagram',
            'link' => 'https://www.instagram.com/tnwjeans',
            'active' => 1
        ]);
        SocialNetwork::create([
            'name' => 'facebook',
            'link' => 'https://www.facebook.com/tnwjeans',
            'active' => 1
        ]);
        SocialNetwork::create([
            'name' => 'youtube',
            'link' => 'https://www.youtube.com/channel/UCwWZyzHPXyPvKVirDzQy_YQ',
            'active' => 1
        ]);
        SocialNetwork::create([
            'name' => 'twitter'
        ]);
        SocialNetwork::create([
            'name' => 'google'
        ]);
        SocialNetwork::create([
            'name' => 'skype'
        ]);
        SocialNetwork::create([
            'name' => 'linkedin'
        ]);
        SocialNetwork::create([
            'name' => 'vesti',
            'link' => 'https://appwebcatalogo.vesti.mobi/catalogo/tnw/',
            'active' => 1
        ]);
    }
}
