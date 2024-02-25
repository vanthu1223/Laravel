@extends('layouts.client')
@section('titlet')
<h1>Trang chủ - </h1>
@endsection
@section('sidebar')
@parent
<h1>Home Sidebar</h1>


@endsection

@section ('content')
<h1> Trang chủ </h1>
@datatime('2022-12-03 15:00:00')
@datatime("2022-12-06 15:00:00")
@env(production')
<p>Môi trường production </p>
@elseenv('test')
<p>Không phải mt test</p>
@else 
<p>Không phải dev</p>
@endenv

@endsection

@section ('css')
@endsection