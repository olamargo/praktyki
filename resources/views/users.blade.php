@extends('welcome')

@section('content')
<div class="conter">

    @if(auth()->user()->admin)
    <div class="users">
        <label>Użytkownicy: </label>


        <p>
            @foreach ($users as $user)
                <div class="users"> 
                <p>{{$user->login}}</p>
                </div>                
            @endforeach
        </p>
    </div>

    @else
        <div class="users">
        <label> Lista użytkowników przeznaczona tylko dla Administratorów!!!</label>
        </div>
    @endif


</div>

@endsection