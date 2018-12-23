@extends('layout')

@section('content')
<div class="contents row">
    <h2>ログイン</h2>

    {{ Form::open() }}
        <div class="label">
            {{ Form::label('email') }}
            {{ Form::email('email', '', ['placeholder' => 'メールアドレスを入力']) }}
        </div>

        <div class="label">
            {{ Form::label('password') }}
            {{ Form::password('password', ['placeholder' => 'パスワードを入力']) }}
          </div>


        <div class="field">
            <label>Remember me</label><br>
            <input type="checkbox" value="1" name="rememver_me">
        </div>


        <div class="actions">
            <input type="submit" value="Log in">
        </div>
    {{ Form::close() }}
</div>
@endsection
