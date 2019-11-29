<?php

namespace App\Http\Controllers;

use App\Game;
use App\Card;
use App\Gamecard;
use App\User;
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
        $game = Game::findOrFail($id);
        return view('game', compact('game'));
    }

    public function show($id) {
        $game = Game::findOrFail($id);
        $card = Card::find(Gamecard::where('game_id', $id)->where('user_id', Auth::id())->first()->card_id);
        $data['game'] = $game;
        $data['card'] = $card;
        return json_encode($data);
    }

    public function winner(Request $request, $id) {
        $game = Game::findOrFail($id);
        $row1 = count(array_intersect(json_decode($game->sequence), $request->row1));
        $row2 = count(array_intersect(json_decode($game->sequence), $request->row2));
        $row3 = count(array_intersect(json_decode($game->sequence), $request->row3));
        if ($game->status == 'ambo' && ($row1 > 1 || $row2 > 1 || $row3 > 1)) {
            $game->ambo = Auth::id();
            $game->save();
        }
        if ($game->status == 'terna' && ($row1 > 2 || $row2 > 2 || $row3 > 2)) {
            $game->terna = Auth::id();
            $game->save();
        }
        if ($game->status == 'quaterna' && ($row1 > 3 || $row2 > 3 || $row3 > 3)) {
            $game->quaterna = Auth::id();
            $game->save();
        }
        if ($game->status == 'cinquina' && ($row1 > 4 || $row2 > 4 || $row3 > 4)) {
            $game->cinquina = Auth::id();
            $game->save();
        }
        if ($game->status == 'tombola' && $row1 == 5 && $row2 == 5 && $row3 == 5) {
            $game->tombola = Auth::id();
            $game->save();
        }
        return response()->json(['user_name' => Auth::user()->name, 'winning' => $game->status]);
    }
}
