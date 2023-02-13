<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Dialogue;

class DialogueController extends Controller
{
    public function create_dialogue_view(Request $request)
    {
        $characters = Character::get();

        if($request->session()->get('errorMessage')){
            $errorMessage = $request->session()->get('errorMessage');

            return view('dialogue_form', compact('characters', 'errorMessage'));
        }


        return view('dialogue_form', compact('characters'));
    }

    public function create_dialogue_post(Request $request)
    {
        $characters = Character::get();
        $characterId = $request->input('character_id');
        $dialogue = $request->input('dialogue');

        if($characterId == "---"){
            return redirect('/dialogue')->with(['errorMessage' => "キャラクターを選択してください"]);
        }

        Dialogue::create([
            'character_id' => $characterId,
            'dialogue' => $dialogue,
        ]);

        return back();
    }
}
