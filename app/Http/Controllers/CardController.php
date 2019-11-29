<?php

namespace App\Http\Controllers;

use App\Card;
use App\Gamecard;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index() {
        $cards = Card::get();
        return $cards->toJson();
    }

    public function show($id) {
        $card = Card::where('id', $id);
        return $card->toJson();
    }

    public function game($gameid) {
        $gamecards = Gamecard::where('game_id', $gameid)->get();
        $used_cards = [];
        foreach ($gamecards as $gamecard) {
            array_push($used_cards, $gamecard->card_id);
        }
        $cards = Card::whereNotIn('id', $used_cards)->orderByRaw('RAND()')->take(15)->get();
        return $cards->toJson();
    }
}
