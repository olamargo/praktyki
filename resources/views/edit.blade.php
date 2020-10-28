@extends('welcome')

@section('content')
    <div class="conter">
    <div class="content-all">
    <form action="{{route('update', $post)}}" method="post">
            
        @csrf
            <div>
                <h2>Dodaj swój wpis</h2>
                <input type="text" name="title" placeholder="Tytuł" value="{{ $post->tytuł }}" required><br>
                <textarea name="note" placeholder="Napisz coś :D" required>{{ $post->treść }}</textarea><br>
                <button>Zapisz</button>
            </div>
        </form>
    </div>
    </div>

@endsection