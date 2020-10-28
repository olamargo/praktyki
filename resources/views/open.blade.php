@extends('welcome')

@section('content')
<div class="conter">
<div class="ready-post">
    <p style="text-align: right; margin: 0;">autor: {{ $post->user->first_name}} {{ $post->user->surname}}</p>
    <label id="1">{{$post->tytuł}}</label>
    <p>{{$post->treść}}</p>
        <img src=" {{ asset("/images/" .  $post->image_upload_url) }}">
    <p>Polubienia: <b>{{ count($post->likes) }}</b></p>

</div>



<div class="like" >
<form action="{{route('likes', $post)}}" method="post">
    @csrf
    <button>👍</button>
</form>
</div>

<div class="form">
<form action="{{route('comments', $post)}}" method="post">

    @csrf

        <label>Dodaj komentarz: </label>
        <div>
            <textarea name="comment" placeholder="Dodaj komentarz..." required></textarea>
        </div>
        <div>
            <button>Dodaj komentarz</button>
        </div>
        <p>Komentarze: </p>

            @foreach ($post->comments as $comment)
                <div class="ready-comment"> 
                    <label>{{ $comment->user->first_name}} {{ $comment->user->surname}}</label>
                    <p>{{$comment->comment}}</p>
                    <p></p>
                    <br>
                </div>                
            @endforeach

</form>
</div>
</div>

@endsection