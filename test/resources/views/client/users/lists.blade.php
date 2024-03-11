@extends ('layouts.client')
@section('title')
{{$title}}
@endsection
@section('content')
@if(session('msg'))
<div class='alert alert-success text-center'>
    {{session('msg')}}
</div>
@endif
<h1>{{$title}}</h1>
<a href="{{route('users.add')}}" class="btn btn-primary">Thêm người dùng</a>
<hr>
<form action="" method="get"  class="mb-3">
    <div class="row">
        <div class="col-3">
            <select name="status" class="form-control">
                <option value="0">Tất cả trạng thái</option>
                <option value="active" {{request()->status=='active'?'selected':false}}>Kich hoạt</option>
                <option value="inactive" {{request()->status=='inactive'?'selected':false}}>Chưa kích hoạt</option>
            </select>
        </div>
        <div class="col-3">
            <select name="group_id" class="form-control">
                <option value="0">Tất cả nhóm</option>
            </select>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" placeholder="Từ khóa tìm kiếm..." name="keywords" value="{{request()->keywords}}">
        </div>
        <div class="col-2">
            <button type="submit" class="btn btn-primary btn-block">Tìm kiếm</button>
        </div>
    </div>
</form>
<hr>
<table class="table table-bordered">
    <thead>
        <tr>
            <th width='5%'>STT</th>
            <th><a href="?sort-by=fullname$sort-type={{$sortType}}">Tên</a></th>
            <th><a href="?sort-by=email$sort-type={{$sortType}}">Email</a></th>
            <th>Nhóm</th>
            <th>Trạng thái</th>
            <th width='15%'><a href="?sort-by=create_at$sort-type={{$sortType}}">Thời gian</a></th>
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
            <td>{{$item->group_name}}</td>
            <td>{!! $item->status == 0 ? '<button class="btn btn-danger">Chưa kích hoạt</button>' : '<button class="btn btn-success">Kích hoạt</button>' !!}</td>
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