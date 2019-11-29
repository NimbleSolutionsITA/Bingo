@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Partite</div>

                <div class="card-body">
                    <ul>
                        @isset($games)
                            @foreach($games as $game)
                                <li><a href="/games/{{ $game->id }}">Partita del {{ $game->start_time  }}</a></li>
                            @endforeach
                        @endisset
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
