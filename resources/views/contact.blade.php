@extends('welcome')

@section('content')
<div class="conter">

        <div class="web">
                <label style="font-size: 25px;">Możesz się z nami skontaktować: </label>
                <p>tel.: +48 486 096 958</p>
                <p>mail: <a href="mailto:oles146706@gmail.com">oles146706@gmail.com</a></p>
        </div>

        <div class="form">
                <form action="{{url('contact')}}" method="post">

                        @csrf
                
                        <label>Wyślij wiadomość do Administratora: </label>
                        <div>
                                <textarea name="message" placeholder="Napisz coś..." required></textarea>
                        </div>
                        <div>
                                <button>Wyślij</button>
                        </div>
                </form>

               
        </div>

        <div class="form">
                @foreach ($messages as $message)
                        <div class="ready-comment"> 
                        <p>{{$message->message}}</p>
                        </div>                
                @endforeach
        </div>

        @can('admin-only', Auth::user())
                <a href="{{ url('/admin')}}">Admin</a> 
        @endcan
</div>

@endsection