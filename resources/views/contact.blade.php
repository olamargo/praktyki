@extends('welcome')

@section('content')
<div class="conter">

        <div class="web">
                <label style="font-size: 25px;">Możesz się z nami skontaktować: </label>
                <p>tel.: +48 486 096 958</p>
                <p>mail: <a href="mailto:oles146706@gmail.com">oles146706@gmail.com</a></p>
        </div>





        @if (auth()->user()->admin)
        <div class="form">
                @foreach ($messages as $message)
                        <div class="ready-comment"> 
                                <label>{{$message->user_login}}</label>
                                <p>{{$message->message}}</p>
                        </div>                
                @endforeach
        </div>
 
        @else
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

        @endif

</div>

@endsection