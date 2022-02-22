@extends('layouts.app')
@section('content')
 <div class="card ">
    <div class="card-header mt-5">Thêm lĩnh vực </div>
    <div class="card-body table-responsive">
    <form action="{{ route('chitieu.them') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="tenlinhvuc" class="form-label  " value="{{ old('tenlinhvuc') }}">Tên lĩnh vực <span class="text-danger font-weight-bold">*</span>  </label>
            <input type="text" class="form-control @error('tenlinhvuc') is-invalid @enderror" id="tenlinhvuc" name="tenlinhvuc">
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