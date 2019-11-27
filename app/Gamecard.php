<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gamecard extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'card_id', 'game_id', 'user_id'
    ];

    /**
     * The Card that belong to the game.
     */
    public function card()
    {
        return $this->belongsTo('App\Card');
    }
    /**
     * The User that belong to the game.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    /**
     * The Card that belong to the game.
     */
    public function game()
    {
        return $this->belongsTo('App\Game');
    }
}
