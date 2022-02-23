@extends('layouts.app')
@section('content')
<div class="card ">
    <div class="card-header mt-5">Thêm lĩnh vực</div>
    <div class="card-body table-responsive">
        <form action="{{ route('chitieu.sua',['id' => $chitieu -> id]) }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="tenlinhvuc" class="form-label  " value="{{ old('tenlinhvuc') }}">Tên lĩnh vực <span class="text-danger font-weight-bold">*</span>  </label>
                <select class="form-control @error('tenlinhvuc') is-invalid @enderror" name="tenlinhvuc" id="tenlinhvuc" require> 
                        <option value="">-- Chọn --</option>
                        @if($chitieu->tenlinhvuc == 1)
                            <option value="1" >Kênh Truyền</option>
                            <option value="2" selected>Y Tế</option>
                            <option value="3" >Giáo Dục </option>
                            <option value="4" >Dự Án </option>
                        @elseif($chitieu->tenlinhvuc == 2)
                            <option value="1" >Kênh Truyền</option>
                            <option value="2" >Y Tế</option>
                            <option value="3" selected>Giáo Dục </option>
                            <option value="4" >Dự Án </option>
                        @elseif($chitieu->tenlinhvuc == 3)
                            <option value="1" >Kênh Truyền</option>
                            <option value="2" >Y Tế</option>
                            <option value="3" >Giáo Dục </option>
                            <option value="4" selected>Dự Án </option>
                        @elseif($chitieu->tenlinhvuc == 4)
                            <option value="1" >Nam</option>
                            <option value="2" >Nữ</option>
                            <option value="3" >Cặp đôi</option>  
                            <option value="4" selected>Trẻ em</option>
                        @endif
                    </select>
                @error('tenlinhvuc')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tenlinhvuc" class="form-label  " value="{{ old('doanhthu') }}">Doanh thu   <span class="text-danger font-weight-bold">*</span>  </label>
                <input type="number" class="form-control @error('doanhthu') is-invalid @enderror" id="doanhthu" name="doanhthu" value="{{$chitieu->doanhthu}}">
                @error('doanhthu')
                    <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Thêm vào CSDL</button>
        </form>
    </div>
</div>
@endsection