<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'row1', 'row2', 'row3'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'row1' => 'array',
        'row2' => 'array',
        'row3' => 'array'
    ];

    /**
     * The gamecards that belong to the game.
     */
    public function gamecards()
    {
        return $this->hasMany('App\Gamecard');
    }
}
