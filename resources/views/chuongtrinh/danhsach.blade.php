@extends('layouts.app')
@section('content')
<div class="container-fluid" >
    <div class="card-body table-responsive">
    <div class="title"><h3>Danh sách Chi Tiết DT - TB </h3> </div>
        <p>
            <a href="{{route('chuongtrinh.them')}}" class="btn btn-success" ><i class="fas fa-plus"></i> Thêm  </a>
            <a href="#nhap" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#importModal"><i class="fas fa-upload"></i> Nhập từ Excel</a>
        </p>

        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th width="5">#</th>
                    <th width="15" class="text-center">Tháng</th>
                    <th width="15" class="text-center">Tên chương trình</th>
                    <th width="15" class="text-center">Kế hoạch</th>
                    <th width="15" class="text-center">Tỷ trọng</th>
                    <th width="15" class="text-center">Thực hiện</th>
                    <th width="15" class="text-center">Hoàn thành (%)</th>
                    <th width="15" class="text-center">Điểm</th>
                    <th width="15" class="text-center">Tiến trình</th>
                    <th width="5" class="text-center">Sửa</th>
                    <th width="5" class="text-center">Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ctrinhhd as $value)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td class="text-center">Tháng {{$value->thang}}</td>
                    <td class="text-center">{{$value->tenchuongtrinh}}</td>
                    <td class="text-center">{{$value->kehoach}}</td>
                    <td class="text-center">{{$value->titrong}}</td>
                    <td class="text-center">
                        @if($value->thuchien==0)
                        Chưa thực hiện
                        @else
                        {{$value->thuchien}}
                        @endif    
                    </td>
                    <td class="text-center">{{number_format(($value->thuchien/$value->kehoach)*100,2)}}%</td>
                    <td class="text-center">
                        @if(($value->thuchien/$value->kehoach)*100==0)
                        Chưa hoàn thành
                        @elseif(($value->thuchien/$value->kehoach)*100<70)
                        1
                        @elseif(($value->thuchien/$value->kehoach)*100<90)
                        2
                        @elseif(($value->thuchien/$value->kehoach)*100==90)
                        3
                        @elseif(($value->thuchien/$value->kehoach)*100<110)
                        4
                        @else
                        5
                        @endif
                    </td>
                    <td class="text-center">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="{{$value->thuchien}}" aria-valuemin="0" aria-valuemax="{{$value->kehoach}}" style="width:{{number_format(($value->thuchien/$value->kehoach)*100,2)}}%">
                                {{number_format(($value->thuchien/$value->kehoach)*100,2)}}%
                            </div>
                        </div>
                    </td>
                    <td class="text-center"><a href="{{ route('chuongtrinh.sua', ['id' => $value->id]) }}"><i class="fa fa-edit"></i></a></td> 
                    <td class="text-center"><a href="{{ route('chuongtrinh.xoa', ['id' => $value->id]) }}" onclick="return confirm('Bạn có muốn xóa lĩnh vực không?')"><i class="fa fa-trash-alt text-danger"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<form action="{{ route('chuongtrinh.nhap') }}" method="post" enctype="multipart/form-data">
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
