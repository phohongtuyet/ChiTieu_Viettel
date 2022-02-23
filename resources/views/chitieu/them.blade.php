@extends('layouts.app')
@section('content')
<div class="card ">
<div class="card-header mt-5">Thêm lĩnh vực </div>
<div class="card-body table-responsive">
    <form action="{{ route('chitieu.them') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="tenlinhvuc" class="form-label  " value="{{ old('tenlinhvuc') }}">Tên lĩnh vực <span class="text-danger font-weight-bold">*</span>  </label>
            <select class="form-control @error('tenlinhvuc') is-invalid @enderror" name="tenlinhvuc" id="tenlinhvuc" value="{{ old('soluong') }}"> 
                    <option value="">-- Chọn lĩnh vực --</option>
                    <option value="1" >Kênh truyền</option>
                    <option value="2" >Y tế</option>
                    <option value="3" >Giáo dục</option>
                    <option value="4" >Dự án </option>
            </select>
            @error('tenlinhvuc')
                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tenlinhvuc" class="form-label  " value="{{ old('doanhthu') }}">Doanh thu   <span class="text-danger font-weight-bold">*</span>  </label>
            <input type="number" class="form-control @error('doanhthu') is-invalid @enderror" id="doanhthu" name="doanhthu">
            @error('doanhthu')
                <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Thêm vào CSDL</button>
    </form>
    </div>
</div>
@endsection