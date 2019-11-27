<?php

namespace App\Http\Controllers;

use App\Gamecard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GamecardController extends Controller
{
    public function store(Request $request) {
        $gamecard = Gamecard::create([
            'user_id' => 1,
            'game_id' => $request->game_id,
            'card_id' => $request->card_id,
        ]);

        return $gamecard->toJson();
    }
}
