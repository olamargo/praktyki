@extends('welcome')

@section('content')
    <div class="conter">
        <div class="profile">
            <h2>Cześć, {{session('user')}}</h2>

            <button><a href="/logout">Wyloguj</a></button>
        </div>
    </div>
@endsection