@extends('layouts.app')
@section('content')
<div class="card mt-3">
<div class="card-body table-responsive ">
<div class="title"><h3>Thêm Chi tiết DT - TB</h3></div>

    <form action="{{ route('chuongtrinh.them') }}" method="post">
        @csrf
        <div class="row mb-2">
            <div class="col">
                <label for="tenchuongtrinh" class="form-label  " value="{{ old('tenchuongtrinh') }}">Chương trình <span class="text-danger font-weight-bold">*</span>  </label>
                <input type="text" class="form-control @error('tenchuongtrinh') is-invalid @enderror" id="tenchuongtrinh" name="tenchuongtrinh">
                @error('tenchuongtrinh')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>
            <div class="col">
                <div class="form-group mt-2">
                    <label for="thang">Tháng<span class="text-danger font-weight-bold">*</span></label>
                    <select id="thang" class="form-control custom-select @error('thang') is-invalid @enderror" name="thang" required>
                        <option value="">--Chọn tháng--</option>
                        <option value="1">Tháng 1</option>
                        <option value="2">Tháng 2</option>
                        <option value="3">Tháng 3</option>
                        <option value="4">Tháng 4</option>
                        <option value="5">Tháng 5</option>
                        <option value="6">Tháng 6</option>
                        <option value="7">Tháng 7</option>
                        <option value="8">Tháng 8</option>
                        <option value="9">Tháng 9</option>
                        <option value="10">Tháng 10</option>
                        <option value="11">Tháng 11</option>
                        <option value="12">Tháng 12</option>
                        
                    </select>
                  </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <label for="kehoach" class="form-label">Kế hoạch <span class="text-danger font-weight-bold">*</span>  </label>
                <input type="number" class="form-control @error('kehoach') is-invalid @enderror" placeholder="" aria-label="" id="kehoach" name="kehoach">
                @error('kehoach')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>
            <div class="col">
                <label for="titrong" class="form-label">Tỷ trọng <span class="text-danger font-weight-bold">*</span>  </label>
                <input type="number" class="form-control @error('titrong') is-invalid @enderror" placeholder="" aria-label="" id="titrong" name="titrong">
                @error('titrong')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>
        </div>               
        <button type="submit" class="btn btn-primary">Thêm vào CSDL</button>
    </form>
    </div>
</div>
@endsection