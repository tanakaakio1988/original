@extends('layout')

@section('content')
   <div class="contents row" >
     
      <p>{{ $name }} マイページ</p>
      @foreach($originals as $original)
        <div class="content-post" style="background-image": url({{ $original->image }});">
          
          <span class="name">
             <a href="#"><span>投稿者</span>{{ $name }}</a>
          </span>
        </div>
    @endforeach
   </div>
@endsection