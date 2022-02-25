@extends('layouts.app')
@section('content')
<div class="card ">
    <div class="card-header mt-5">Sửa chương trình hành động</div>
    <div class="card-body table-responsive">
        <form action="{{ route('chuongtrinh.sua',['id' => $ctrinhhd -> id]) }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="tenchuongtrinh" class="form-label  " value="{{ old('tenchuongtrinh') }}">Tên chương trình   <span class="text-danger font-weight-bold">*</span>  </label>
                <input type="text" class="form-control @error('tenchuongtrinh') is-invalid @enderror" id="tenchuongtrinh" name="tenchuongtrinh" value="{{$ctrinhhd->tenchuongtrinh}}">
                @error('tenchuongtrinh')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="kehoach" class="form-label  " value="{{ old('kehoach') }}">Kế hoạch  <span class="text-danger font-weight-bold">*</span>  </label>
                <input type="number" class="form-control @error('kehoach') is-invalid @enderror" id="kehoach" name="kehoach" value="{{$ctrinhhd->kehoach}}">
                @error('kehoach')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="titrong" class="form-label  " value="{{ old('titrong') }}">Tỷ trọng   <span class="text-danger font-weight-bold">*</span>  </label>
                <input type="number" class="form-control @error('titrong') is-invalid @enderror" id="titrong" name="titrong" value="{{$ctrinhhd->titrong}}">
                @error('titrong')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thuchien" class="form-label  " value="{{ old('thuchien') }}">Thực hiện  <span class="text-danger font-weight-bold">*</span>  </label>
                <input type="number" class="form-control @error('thuchien') is-invalid @enderror" id="thuchien" name="thuchien" value="{{$ctrinhhd->thuchien}}">
                @error('thuchien')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Sửa</button>
        </form>
    </div>
</div>
@endsection