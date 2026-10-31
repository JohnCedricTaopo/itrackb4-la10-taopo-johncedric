<?php

namespace Database\Seeders;

use App\Models\Character;
use App\Models\Element;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    public function run(): void
    {
        $anemo = Element::create(['name' => 'Anemo']);
        $cryo = Element::create(['name' => 'Cryo']);
        $electro = Element::create(['name' => 'Electro']);
        $pyro = Element::create(['name' => 'Pyro']);
        $dendro = Element::create(['name' => 'Dendro']);
        $hydro = Element::create(['name' => 'Hydro']);

        Character::create([
            'name' => 'Traveler',
            'element_id' => $anemo->id,
            'weapon' => 'Sword',
            'rarity' => 5,
            'is_playable' => true,
            'remarks' => 'The main character of the journey.',
        ]);

        Character::create([
            'name' => 'Odette',
            'element_id' => $cryo->id,
            'weapon' => 'Sword',
            'rarity' => 5,
            'is_playable' => true,
            'remarks' => 'A Cryo sword character.',
        ]);

        Character::create([
            'name' => 'Sandrone',
            'element_id' => $cryo->id,
            'weapon' => 'Claymore',
            'rarity' => 5,
            'is_playable' => true,
            'remarks' => 'A powerful Cryo claymore character.',
        ]);

        Character::create([
            'name' => 'Raiden Shogun',
            'element_id' => $electro->id,
            'weapon' => 'Polearm',
            'rarity' => 5,
            'is_playable' => true,
            'remarks' => 'The Electro Archon of Inazuma.',
        ]);

        Character::create([
            'name' => 'Bennett',
            'element_id' => $pyro->id,
            'weapon' => 'Sword',
            'rarity' => 4,
            'is_playable' => true,
            'remarks' => 'An unlucky but cheerful adventurer.',
        ]);
    }
}