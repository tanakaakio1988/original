@extends('layout')

@section('content')
<div class="contents row">
    @foreach($originals as $original)
        <div class="content_post" style="background-image: url({{ $original->image }});">
            @if (Auth::check() && Auth::user()->id == $original->user_id)
                <div class="more">
                    <span><img src="images/arrow_top.png"></span>
                    <ul class="more_list">
                        <li><a href="/original/{{$original->id}}/edit">編集</a></li>
                        <li><a href="/original/{{$original->id}}/delete">削除</a></li>
                    </ul>
                </div>
            @endif

            <p>{{ $original->text }}</p>
            <span class="name">
                <a href="/users/{{ $original->user_id }}">
                </a>
            </span>
        </div>
    @endforeach
</div>
@endsection