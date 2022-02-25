@extends('layouts.app')
@section('content')
<div class="container-fluid" >
    <div class="card-body table-responsive">
    <div class="title"><h3>Danh sách thực hiện </h3> </div>
        <p>
            <a href="{{route('thuchien.them')}}" class="btn btn-success" ><i class="fas fa-plus"></i> Thêm  </a>
            <a href="#nhap" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#importModal"><i class="fas fa-upload"></i> Nhập từ Excel</a>
        </p>

        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th width="5">#</th>
                    <th width="15" class="text-center">Doanh thu dịch vụ</th>
                    <th width="15" class="text-center">Tổng doanh thu</th>
                    <th width="15" class="text-center">Dự án</th>
                    <th width="15" class="text-center">Kênh truyền</th>
                    <th width="15" class="text-center">Giáo dục</th>
                    <th width="15" class="text-center">Y tế</th>
                    <th width="5" class="text-center">Sửa</th>
                    <th width="5" class="text-center">Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach($thuchien as $value)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td class="text-center">{{number_format($value->doanhthudichvu) }}</td>
                    <td class="text-center">{{number_format($value->tongdoanhthu)}}</td>
                    <td class="text-center">{{number_format($value->duan)}}</td>
                    <td class="text-center">{{number_format($value->kenhtruyen)}}</td>
                    <td class="text-center">{{number_format($value->giaoduc)}}</td>
                    <td class="text-center">{{number_format($value->yte)}}</td>
                    <td class="text-center"><a href="{{ route('thuchien.sua', ['id' => $value->id]) }}"><i class="fa fa-edit"></i></a></td> 
                    <td class="text-center"><a href="{{ route('thuchien.xoa', ['id' => $value->id]) }}" onclick="return confirm('Bạn có muốn xóa lĩnh vực không?')"><i class="fa fa-trash-alt text-danger"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<form action="{{ route('thuchien.nhap') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="importModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="importModalLabel">Nhập từ Excel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-0">
                        <label for="file_excel" class="form-label">Chọn tập tin Excel</label>
                        <input type="file" class="form-control" id="file_excel" name="file_excel" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Hủy bỏ</button>
                    <button type="submit" class="btn btn-danger"><i class="fas fa-upload"></i> Nhập dữ liệu</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
