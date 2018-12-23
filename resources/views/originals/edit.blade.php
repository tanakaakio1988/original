@extends('layout')

@section('content')
<div class="contents row">
  <div class="container">
    {{ Form::open(['url' => "original/$original->id", 'method' => 'PATCH']) }}
      <h3>編集</h3>

      <input placeholder="Image Url" type="file" name="image" value="{{$original->image}}" autofocus="true">
      <input type="submit" value="SENT">
    {{ Form::close() }}
  </div>
</div>
@endsection