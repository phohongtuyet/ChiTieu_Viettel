@extends('layouts.app')
@section('content')
<div class="card mt-3">
<div class="card-body table-responsive ">
<div class="title"><h3>Thêm Chi tiết DT - TB</h3></div>

    <form action="{{ route('chitieu.them') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="thang" class="form-label  " value="{{ old('thang') }}">Tháng <span class="text-danger font-weight-bold">*</span>  </label>
            <input type="number" class="form-control @error('thang') is-invalid @enderror" id="thang" name="thang">
            @error('thang')
                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
            @enderror
        </div>

        <div class="row mb-2">
            <div class="col">
                <label for="doanhthudichvu" class="form-label">Doanh thu dịch vụ <span class="text-danger font-weight-bold">*</span>  </label>
                <input type="number" class="form-control @error('doanhthudichvu') is-invalid @enderror" placeholder="" aria-label="" id="doanhthudichvu" name="doanhthudichvu">
                @error('doanhthudichvu')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>
            <div class="col">
                <label for="tytrongdoanhthudichvu" class="form-label">Tỷ trọng doanh thu dịch vụ <span class="text-danger font-weight-bold">*</span>  </label>
                <input type="number" class="form-control @error('tytrongdoanhthudichvu') is-invalid @enderror" placeholder="" aria-label="" id="tytrongdoanhthudichvu" name="tytrongdoanhthudichvu">
                @error('tytrongdoanhthudichvu')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <label for="tongdoanhthu" class="form-label">Tổng doanh thu<span class="text-danger font-weight-bold">*</span>  </label>
                <input type="number" class="form-control @error('tongdoanhthu') is-invalid @enderror" placeholder="" aria-label="" name="tongdoanhthu" id="tongdoanhthu">
                @error('tongdoanhthu')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>
            <div class="col">
                <label for="tytrongtongdoanhthu	" class="form-label">Tỷ trọng tổng doanh thu<span class="text-danger font-weight-bold">*</span>  </label>
                <input type="number" class="form-control @error('tytrongtongdoanhthu') is-invalid @enderror" placeholder="" aria-label="" name="tytrongtongdoanhthu" id="tytrongtongdoanhthu">
                @error('tytrongtongdoanhthu	')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <label for="duan" class="form-label">Dự án<span class="text-danger font-weight-bold">*</span>  </label>
                 <input type="number" class="form-control @error('duan') is-invalid @enderror" placeholder="" aria-label="" name="duan" id="duan">
                @error('duan')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>
            <div class="col">
                <label for="tytrongduan" class="form-label">Tỷ trọng dự án<span class="text-danger font-weight-bold">*</span>  </label>
                 <input type="number" class="form-control @error('tytrongduan') is-invalid @enderror" placeholder="" aria-label="" name="tytrongduan" id="tytrongduan">
                @error('tytrongduan')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <label for="kenhtruyen" class="form-label">Kênh truyền<span class="text-danger font-weight-bold">*</span>  </label>
                 <input type="number" class="form-control @error('kenhtruyen') is-invalid @enderror" placeholder="" aria-label="" name="kenhtruyen" id="kenhtruyen">
                @error('kenhtruyen')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>
            <div class="col">
                <label for="tytrongkenhtruyen" class="form-label">Tỷ trong kênh truyền<span class="text-danger font-weight-bold">*</span>  </label>
                 <input type="number" class="form-control @error('tytrongkenhtruyen') is-invalid @enderror" placeholder="" aria-label="" name="tytrongkenhtruyen" id="tytrongkenhtruyen">
                @error('tytrongkenhtruyen')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <label for="giaoduc" class="form-label">Giáo dục<span class="text-danger font-weight-bold">*</span>  </label>
                 <input type="number" class="form-control @error('giaoduc') is-invalid @enderror" placeholder="" aria-label="" name="giaoduc" id="giaoduc">
                @error('giaoduc')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
                
            </div>
            <div class="col">
                <label for="tytronggiaoduc" class="form-label">Tỷ trọng giáo dục<span class="text-danger font-weight-bold">*</span>  </label>
                 <input type="number" class="form-control @error('tytronggiaoduc') is-invalid @enderror" placeholder="" aria-label="" name="tytronggiaoduc" id="tytronggiaoduc">
                @error('tytronggiaoduc')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
               
            </div>
        </div>
        <div class="row mb-2">
            <div class="col">
                <label for="yte" class="form-label">Y tế<span class="text-danger font-weight-bold">*</span>  </label>
                 <input type="number" class="form-control @error('yte') is-invalid @enderror" placeholder="" aria-label="" name="yte" id="yte">
                @error('yte')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
               
            </div>
            <div class="col">
                <label for="tytrongyte" class="form-label">Tỷ trong y tế<span class="text-danger font-weight-bold">*</span>  </label>
                 <input type="number" class="form-control @error('tytrongyte') is-invalid @enderror" placeholder="" aria-label="" name="tytrongyte" id="tytrongyte">
                @error('tytrongyte')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>
        </div>
               
        <button type="submit" class="btn btn-primary">Thêm vào CSDL</button>
    </form>
    </div>
</div>
@endsection