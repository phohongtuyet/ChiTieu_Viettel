@extends('layouts.app')
@section('content')
<div class="card ">
    <div class="card-body table-responsive">
    <div class="title"><h3>Sửa thực hiện</h3></div>

        <form action="{{ route('thuchien.sua',['id' => $thuchien -> id]) }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="doanhthudichvu" class="form-label  " value="{{ old('doanhthudichvu') }}">Doanh thu dịch vụ   <span class="text-danger font-weight-bold">*</span>  </label>
                <input type="number" class="form-control @error('doanhthudichvu') is-invalid @enderror" id="doanhthudichvu" name="doanhthudichvu" value="{{$thuchien->doanhthudichvu}}">
                @error('doanhthudichvu')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tongdoanhthu" class="form-label  " value="{{ old('tongdoanhthu') }}">Tổng doanh thu   <span class="text-danger font-weight-bold">*</span>  </label>
                <input type="number" class="form-control @error('tongdoanhthu') is-invalid @enderror" id="tongdoanhthu" name="tongdoanhthu" value="{{$thuchien->tongdoanhthu}}">
                @error('tongdoanhthu')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="duan" class="form-label  " value="{{ old('duan') }}">Dự án   <span class="text-danger font-weight-bold">*</span>  </label>
                <input type="number" class="form-control @error('duan') is-invalid @enderror" id="duan" name="duan" value="{{$thuchien->duan}}">
                @error('duan')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="kenhtruyen" class="form-label  " value="{{ old('kenhtruyen') }}">Kênh truyền    <span class="text-danger font-weight-bold">*</span>  </label>
                <input type="number" class="form-control @error('kenhtruyen') is-invalid @enderror" id="kenhtruyen" name="kenhtruyen" value="{{$thuchien->kenhtruyen}}">
                @error('kenhtruyen')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="giaoduc" class="form-label  " value="{{ old('giaoduc') }}">Giáo dục    <span class="text-danger font-weight-bold">*</span>  </label>
                <input type="number" class="form-control @error('giaoduc') is-invalid @enderror" id="giaoduc" name="giaoduc" value="{{$thuchien->giaoduc}}">
                @error('giaoduc')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="yte" class="form-label  " value="{{ old('yte') }}">Y tế    <span class="text-danger font-weight-bold">*</span>  </label>
                <input type="number" class="form-control @error('yte') is-invalid @enderror" id="yte" name="yte" value="{{$thuchien->yte}}">
                @error('yte')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Cập nhật vào CSDL</button>
        </form>
    </div>
</div>
@endsection