@extends('welcome')

@section('content')
<div class="conter">
    <div class="content-all">
        <div class="login">
            <h1>Logowanie</h1>
            <form action="{{url('login')}}" method="POST">
                @csrf
                <input type="text" name="login" placeholder="Wpisz nazwę użytkownika" required> <br> <br>
                <input type="password" name="password" placeholder="Wpisz hasło" required> <br> <br>
                <button type="submit">Zaloguj</button>
            </form>
        </div>
    </div>
</div>
@endsection