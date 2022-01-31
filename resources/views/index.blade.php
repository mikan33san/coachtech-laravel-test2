@extends('layouts.default')
<style>
label,input {
  display: block;
}
</style>
@section('content')
@if (count($errors)>0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<form action="/" method="POST">
  @csrf
  <label for="name">氏名</label>
  <input id="name" type="text" name="name" value="{{old('name')}}">
  <label for="email">メールアドレス</label>
  <input id="email" type="email" name="email" value="{{old('email')}}">
  <input type="submit" value="送信する">
</form>
@endsection