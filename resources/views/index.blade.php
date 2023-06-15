@extends('layout')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>
                        Thông tin sinh viên
                    </h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('sinhvien.create')}}" class="btn btn-primary float-end">
                        Thêm mới
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if (Session::has ('thongbao'))
            <div class="alert alert-success" role="alert">
                {{Session::get('thongbao')}}
            </div>
            @endif
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Mã Sinh Viên</th>
                        <th scope="col">Email</th>
                        <th scope="col">Lớp</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sinhvien as $sv)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$sv->MaSV}}</td>
                        <td>{{$sv->Email}}</td>
                        <td>{{$sv->Lop}}</td>
                        <td>{{$sv->GioiTinh}}</td>
                        <td>
                            <form action="{{route('sinhvien.destroy',$sv->id)}}" method="POST">
                                <a href="{{route('sinhvien.edit',$sv->id)}}" class="btn btn-info">Sửa</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$sinhvien->links()}}
    </div>
</div>


@endsection