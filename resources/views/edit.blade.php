@extends('layout')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Sửa sinh viên</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('sinhvien.index')}}" class="btn btn-primary float-end ">Danh sách sinhvien</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <form action="{{route('sinhvien.update', $sinhvien ->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>mã sinh viên</strong>
                                <input type="text" name="MaSV" value="{{$sinhvien->MaSV}}" class="form-control"
                                    placeholder="nhập mã sinh viên">
                            </div>
                            <div class="form-group">
                                <strong>Email</strong>
                                <input type="text" name="Email" value="{{$sinhvien->Email}}" class="form-control"
                                    placeholder="nhập email">
                            </div>
                            <div class="form-group">
                                <strong>Lớp</strong>
                                <input type="text" name="Lop" value="{{$sinhvien->Lop}}" class="form-control"
                                    placeholder="nhập lớp">
                            </div>
                            <div class="form-group">
                                <strong>Giới tính</strong>
                                <input type="text" name="Gioitinh" value="{{$sinhvien->Gioitinh}}" class="form-control"
                                    placeholder="nhập giới tính">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Sửa thông tin</button>
                </form>

            </table>
        </div>
    </div>
</div>
@endsection