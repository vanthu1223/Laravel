@extends('layouts.client')
@section('titlet')
    {{$title}}
@endsection
@section ('content')
<h1> Thêm sản phẩm </h1>
<form action="" method="Post">
    <input type="text" name= "username">
    <input type="hidden" name='_token' value="{{csrf_token()}}">
    <button type="submit">Submit</button>
    @method('PUT');
</form>
@endsection
@section ('css')
@endsection