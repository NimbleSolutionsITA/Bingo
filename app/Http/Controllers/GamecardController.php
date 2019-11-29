<?php

namespace App\Http\Controllers;

use App\Gamecard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GamecardController extends Controller
{
    public function store(Request $request) {
        $response = ['result' => false];
        if (!Gamecard::where('game_id', $request->game_id)->where('card_id', $request->card_id)->first()) {
            $gamecard = Gamecard::create([
                'user_id' => Auth::id(),
                'game_id' => $request->game_id,
                'card_id' => $request->card_id,
            ]);
            $response = ['result' => true];
        }
        return $response;
    }
}
