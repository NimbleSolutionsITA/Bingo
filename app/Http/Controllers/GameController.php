<?php

namespace App\Http\Controllers;

use App\Game;
use App\Card;
use App\Gamecard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        $game = Game::find($id);
        return view('game', compact('game'));
    }

    public function show($id) {
        $game = Game::find($id);
        $card = Card::find(Gamecard::where('game_id', $id)->first()->card_id);
        $data['game'] = $game;
        $data['card'] = $card;
        return json_encode($data);
    }
}
