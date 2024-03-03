@extends ('layouts.client')
@section('title')
{{$title}}
@endsection
@section('content')
@if(session('msg'))
<div class='alert alert-success text-center'>
    session('msg')
</div>
@endif
<h1>{{$title}}</h1>
<a href="{{route('users.add')}}" class="btn btn-primary">Thêm người dùng</a>
<hr>
<table class="table table-bordered">
    <thead>
        <tr>
            <th width='5%'>STT</th>
            <th>Tên</th>
            <th>Email</th>
            <th width='15%'>Thời gian</th>
            <th width='5%'>Sửa</th>
            <th width='5%'>Xóa</th>
        </tr>
    </thead>
    <tbody>
        @if(!empty($userList))
        @foreach($userList as $key => $item )
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$item->fullName}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->create_at}}</td>
            <td>
                <a href="{{route('users.edit', ['id' => $item->id])}}" class="btn btn-warning btn-sm">Sửa</a>
            </td>
            <td>
            <a onclick="return confirm('Bạn có chắc muốn xóa')" href="{{ route('users.delete', ['id' => $item->id]) }}" class="btn btn-danger btn-sm">Xóa</a>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td colspan="6">Không có người dùng</td>
        </tr>
        @endif
    </tbody>
</table>
@endsection