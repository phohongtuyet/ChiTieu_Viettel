@extends('layouts.app')
@section('content')

<div class="container-fluid" >
    <div class="card-body table-responsive">
    <div class="title"><h3>Danh sách chỉ tiêu doanh thu </h3> </div>

        <p>
            <a href="{{route('chitieu.them')}}" class="btn btn-success" ><i class="fas fa-plus"></i> Thêm  </a>
        </p>

        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th width="10">#</th>
                    <th width="45" class="text-center">Tên lĩnh vực</th>
                    <th width="45" class="text-center">Doanh thu mục tiêu</th>
                </tr>
            </thead>
            <tbody>
                @foreach($chitieu as $value)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td class="text-center">
                        @if($value->tenlinhvuc == 1)
                            <span>Kênh truyền</span>
                        @elseif($value->tenlinhvuc == 2)
                            <span>Y tế</span>
                        @elseif($value->tenlinhvuc == 2)
                            <span>Giáo dục </span>
                        @else
                            <span>Dự án </span>
                        @endif
                    </td>
                    <td class="text-center">{{number_format($value->doanhthu )}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
