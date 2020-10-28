@extends('welcome')

@section('content')
    <div class="conter">
    <div class="content-all">
    <form action="{{route('store')}}" method="post" enctype="multipart/form-data" >
            
        @csrf
            <div>
                <h2>Dodaj swój wpis</h2>

                <input type="text" name="title" placeholder="Tytuł" maxlength="30" required><br>

                <textarea name="note" placeholder="Napisz coś :D" required></textarea><br>

                @if ($message = Session::get('success'))
                <div>
                    <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                </div>
                @endif
          
                @if (count($errors) > 0)
                    <div>
                        <strong>Ups!</strong> Wystąpiły problemy z wprowadzeniem danych.
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
          
                <div class="row">
          
                    <div>
                        <input type="file" name="image" class="form-control" required>
                    </div>
       
                </div>

                <button>Zapisz</button>
            </div>
        </form>
    </div>
    </div>

@endsection