@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Quản ý sinh viên</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('sinhvien.create')}}" class="btn btn-primary float-end ">Thêm mới</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã sinh viên</th>
                            <th>Họ Tên</th>
                            <th>Ngày Sinh</th>
                            <th>Giới Tính</th>
                            <th>Số điên thoại</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sinhvien as $sv)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$sv->MaSV}}</td>
                                <td>{{$sv->HoTen}}</td>
                                <td>{{$sv->NgaySinh}}</td>
                                <td>{{$sv->GioiTinh}}</td>
                                <td>{{$sv->DiaChi}}</td>
                                <td>{{$sv->SoDT}}</td>
                                <td>
                                    
                                </td>
                            </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection