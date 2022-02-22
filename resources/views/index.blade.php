@extends('layouts.app')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-solid fa-tv fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Kênh truyền </p>
                    <h6 class="mb-0"> @if(!empty($kenhtruyen)) {{ number_format($kenhtruyen->doanhthu) }} @endif</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
            <i class="fa fa-solid fa-briefcase-medical fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Y tế </p>
                    <h6 class="mb-0">@if(!empty($yte)) {{ number_format($yte->doanhthu) }} @endif</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-solid fa-graduation-cap fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Giáo dục </p>
                    <h6 class="mb-0">@if(!empty($giaoduc)){{ number_format($giaoduc->doanhthu) }}@endif</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Dự án </p>
                    <h6 class="mb-0">@if(!empty($duan)){{ number_format($duan->doanhthu) }} @endif</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sale & Revenue End -->


<!-- Sales Chart Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Worldwide Sales</h6>
                    <a href="">Show All</a>
                </div>
                <!-- Chart's container -->
                <div id="chart" style="height: 300px;"></div>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Salse & Revenue</h6>
                    <a href="">Show All</a>
                </div>
                <div id="chart" style="height: 300px;"></div>
            </div>
        </div>
    </div>
</div>


            

@endsection
