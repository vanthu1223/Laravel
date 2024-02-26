@extends('layouts.client')
@section('titlet')
{{$title}}
@endsection
@section ('content')
<h1> Thêm sản phẩm </h1>
<form action="" method="post">
    @if ($errors->any())
    <div class="alert alert-danger text-center">
        {{$errorMessage}}
    </div>
    @endif
    <div class="mb-3">
        <label for="">Tên sản phẩm</label>
        <input type="text" class="form-control" name="product_name" placeholder="tên sản phẩm..." value="{{old('product_name')}}">
        @error('product_name')
        <span style="color:red;">
            {{$message}}
        </span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="">Giá sản phẩm</label>
        <input type="text" class="form-control" name="product_price" placeholder="giá sản phẩm..." value="{{old('product_price')}}">
        @error('product_price')
        <span style="color:red;">
            {{$message}}
        </span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Thêm mới</button>
    @csrf
</form>
@endsection
@section ('css')
@endsection