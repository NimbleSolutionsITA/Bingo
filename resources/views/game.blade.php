@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Partita del {{ $game->start_time }}</h1>
    <div id="root" data-gameid="{{ $game->id }}"></div>
</div>
@endsection
