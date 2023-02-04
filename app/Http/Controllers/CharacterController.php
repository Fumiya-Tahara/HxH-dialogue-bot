<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{
    public function create_character_view()
    {
        return view('character_form');
    }

    public function create_character_post(Request $request)
    {
        $characterName = $request->input('name');
        $system = $request->input('system');

        Character::create([
            'name' => $characterName,
            'system' => $system,
        ]);

        return back();
    }
}
