@extends('layout')

@section('content')
<div class="contents row">
    <div class="container">
        {{ Form::open([
          'url' => '/original',
          'method' => 'post',
          'files' => true]) }}
            <h3>
                    投稿
            </h3>
            <input type="file" name="image" size="">
            <input type="submit" value="送信">
        {{ Form::close() }}
    </div>
</div>
@endsection