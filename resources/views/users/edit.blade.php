<!DOCTYPE html>
<meta charset="utf-8">
<head></head>

<body>
@extends('layouts.app')

@section('content')
 
@if(Session::has('message'))
  <div>{{ Session::get('message') }}</div>
@endif
@foreach($errors->all() as $message)
  <div>{{ $message }}</div>
@endforeach
<form method="POST" action="{{ route('posts.store')}}">

  @csrf
  <label>名前: </label><input name="name" type="text" value="{{ $user->name }}" />
  <label>メールアドレス: </label><input name="email" type="text" value="{{ $user->email }}" />
  <button type="submit">変更</button>
</form>
</body>




</html>

