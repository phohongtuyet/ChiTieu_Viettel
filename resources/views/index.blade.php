@extends('layouts.app')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-solid fa-tv fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Kênh truyền </p>
                    <h6 class="mb-0"> @if(!empty($kenhtruyen)) {{ $kenhtruyen }} @endif</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
            <i class="fa fa-solid fa-briefcase-medical fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Y tế </p>
                    <h6 class="mb-0">@if(!empty($yte)) {{ number_format($yte) }} @endif</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-solid fa-graduation-cap fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Giáo dục </p>
                    <h6 class="mb-0">@if(!empty($giaoduc)){{ number_format($giaoduc) }}@endif</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Dự án </p>
                    <h6 class="mb-0">@if(!empty($duan)){{ number_format($duan) }} @endif</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Doanh thu dịch vụ</h6>
                </div>
                <div id="chart_doanhthudichvu" style="height: 300px;"></div>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Tổng doanh thu</h6>
                </div>
                <div id="chart_tongdoanhthu" style="height: 300px;"></div>
            </div>
        </div>
    </div>
    
</div>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Y tế</h6>
                </div>
                <div id="chart" style="height: 300px;"></div>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Giáo dục</h6>
                </div>
                <div id="chartgiaoduc" style="height: 300px;"></div>
            </div>
        </div>
    </div>
    
</div>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Kênh truyền</h6>
                </div>
                <div id="chartkenhtruyen" style="height: 300px;"></div>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Dự án</h6>
                </div>
                <div id="chartduan" style="height: 300px;"></div>
            </div>
        </div>
    </div>
    
</div>
<div class="container-fluid pt-4 px-4">
            <div class="bg-light text-center rounded p-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0">Chương trình hành động</h6>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="btn-group" style="float: right;">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Chọn tháng
                            </button>
                            <ul class="dropdown-menu">
                                @foreach($thang as $item)
                                <li><a class="dropdown-item" href="{{route('home.showchuongtrinh',$item->id)}}">{{$item->thang}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
               
                    <div id="" style="">

                        <table class="table table-hover mt-4">
                            <tbody>
                                @foreach($showchuongtrinh as $value)
                                
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td class="text-center" width="50%">{{$value->tenchuongtrinh}}</td>
                                    <td class="text-center">{{number_format(($value->thuchien/$value->kehoach)*100,2)}}%</td>
                                    <td class="text-center">
                                        @if(($value->thuchien/$value->kehoach)*100==0)
                                        Chưa hoàn thành
                                        @elseif(($value->thuchien/$value->kehoach)*100<70)
                                        1 điểm
                                        @elseif(($value->thuchien/$value->kehoach)*100<90)
                                        2 điểm
                                        @elseif(($value->thuchien/$value->kehoach)*100==90)
                                        3 điểm
                                        @elseif(($value->thuchien/$value->kehoach)*100<110)
                                        4 điểm
                                        @else
                                        5 điểm
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="{{$value->thuchien}}" aria-valuemin="0" aria-valuemax="{{$value->kehoach}}" style="width:{{number_format(($value->thuchien/$value->kehoach)*100,2)}}%">
                                                {{number_format(($value->thuchien/$value->kehoach)*100,2)}}%
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    
</div>
 
@endsection
@section('javascript')
<script>
        const chart = new Chartisan({
            el: '#chart',
            url: "@chart('y_te_chart')",
            hooks: new ChartisanHooks()
                .colors(['#00CC00', '#4299E1','#FF0000','#FFD32D'])
                .responsive()
                .beginAtZero()
                .title('Biểu đồ Chi tiết DT - TB')
                .legend({ position: 'bottom' })
        });

        const chartgiaoduc = new Chartisan({
            el: '#chartgiaoduc',
            url: "@chart('giao_duc_chart')",
            hooks: new ChartisanHooks()
                .colors(['#00CC00', '#4299E1','#FF0000','#FFD32D'])
                .responsive()
                .beginAtZero()
                .title('Biểu đồ Chi tiết DT - TB')
                .legend({ position: 'bottom' })
        });

        const chartkenhtruyen = new Chartisan({
            el: '#chartkenhtruyen',
            url: "@chart('kenh_truyen_chart')",
            hooks: new ChartisanHooks()
                .colors(['#00CC00', '#4299E1','#FF0000','#FFD32D'])
                .responsive()
                .beginAtZero()
                .title('Biểu đồ Chi tiết DT - TB')
                .legend({ position: 'bottom' })
        });

        const chartduan = new Chartisan({
            el: '#chartduan',
            url: "@chart('du_an_chart')",
            hooks: new ChartisanHooks()
                .colors(['#00CC00', '#4299E1','#FF0000','#FFD32D'])
                .responsive()
                .beginAtZero()
                .title('Biểu đồ Chi tiết DT - TB')
                .legend({ position: 'bottom' })
        });
        const chart_doanhthudichvu = new Chartisan({
            el: '#chart_doanhthudichvu',
            url: "@chart('doanh_thu_dich_vu_chart')",
            hooks: new ChartisanHooks()
                .colors(['#00CC00', '#4299E1','#FF0000','#FFD32D'])
                .responsive()
                .beginAtZero()
                .title('Biểu đồ Chi tiết DT - TB')
                .legend({ position: 'bottom' })
        });
        const chart_tongdoanhthu = new Chartisan({
            el: '#chart_tongdoanhthu',
            url: "@chart('tong_doanh_thu_chart')",
            hooks: new ChartisanHooks()
                .colors(['#00CC00', '#4299E1','#FF0000','#FFD32D'])
                .responsive()
                .beginAtZero()
                .title('Biểu đồ Chi tiết DT - TB')
                .legend({ position: 'bottom' })
        });
</script>
@endsection