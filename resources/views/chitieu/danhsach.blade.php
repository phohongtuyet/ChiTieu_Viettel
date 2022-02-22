@extends('layouts.app')
@section('content')
<!-- Sign In Start -->
<div class="container-fluid" >
    <div class="card-body table-responsive">
        <p>
            <a href="#nhap" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#importModal"><i class="fas fa-upload"></i> Nhập từ Excel</a>
        </p>
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th width="10">#</th>
                    <th width="45">Tên</th>
                    <th width="45">Doanh thu</th>
                </tr>
            </thead>
            <tbody>
                @foreach($linhvuc as $value)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $value->tensanpham }}</td>
                    <td>{{ $value->doanhthu }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<form action="{{ route('chitieu.nhap') }}" method="post" enctype="multipart/form-data">
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
