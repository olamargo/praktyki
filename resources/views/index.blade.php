@extends('welcome')

@section('content')
<div class="conter">
<div class="posty">
    
        @foreach ($posts as $post)
        <a href="{{ url('open', $post) }}">
                <div>
                
                <table>
                    <tr>
                        <th>{{ $post->user->first_name}} {{ $post->user->surname}}</th>
                        <td></td>
                        <td></td>
                        <td><label>{{ Carbon\Carbon::parse($post->updated_at)->diffForHumans() }}</label></td>
                    </tr>
                    <tr>
                        <th style="padding-left: 50px;">{{$post->tytuł}}</th>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding-left: 50px;">{{$post->treść}}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td align="right" valign="bottom" width="50px"><a href="{{ url('edit/' . $post->id) }}" class="btn btn-default">Edytuj</a></td>
                        <td align="right" valign="bottom" width="50px"><a href="{{ url('delete/' . $post->id) }}" class="btn btn-default"> usuń</a></td>
                    </tr>
                </table>
                

                
            </div>
        </a>
        @endforeach
    
</div>

<div class="content-all">
    <form action="{{url('logout')}}" method="get">
        @csrf
        <button type="submit">Wyloguj</button>
    </form>
</div>
</div>

@endsection

{{-- <ol>
                <li>{{$post->tytuł}} <label>{{ Carbon\Carbon::parse($post->updated_at)->diffForHumans() }}</label></li>
                    <ul>
                        <li>{{$post->treść}}</li>
                    </ul>
                    <li><button>Edytuj</button></li>
                    <li><button>Usuń</button></li>
            </ol>   --}}