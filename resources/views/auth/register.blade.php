@extends('welcome')

@section('content')
<div class="conter">
    <div class="content-all">
        <div class="login">
            <h1>Rejestracja</h1>
            <form action="{{url('register')}}" method="POST">
                @csrf
                <div class="register-as">
                    <div style="float: right;"><p>jestem administratorem </p><input type="checkbox" name="admin" value="1"/></div>
                    <div style="float: clear;"></div>
                </div>
                <input type="text" name="first_name" placeholder="Wpisz imię" required> <br> <br>
                <input type="text" name="surname" placeholder="Wpisz nazwisko" required> <br> <br>
                <input type="text" name="login" placeholder="Wpisz nazwę użytkownika" required> <br> <br>
                <input type="password" name="password" placeholder="Wpisz hasło" required> <br> <br>
                <input type="password" name="confirm_password" placeholder="Powtórz hasło" required> <br> <br>
                <button type="submit">Zarejestruj</button>
            </form>
        </div>
    </div>
</div>
@endsection
