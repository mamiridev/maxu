@extends('admin.layout.master')
@section('styles')
@endsection

@section('scripts')
    <script src="assets/js/pages/charts/c3.js"></script>
@endsection

@section('content')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>نمودار C3</h1>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="inlineblock vivify swoopInTop delay-900 mr-4">بازدیدکنندگان <span id="mini-bar-chart1" class="mini-bar-chart"></span></div>
                    <div class="inlineblock vivify swoopInTop delay-950 mr-4">بازدیدها <span id="mini-bar-chart2" class="mini-bar-chart"></span></div>
                    <div class="inlineblock vivify swoopInTop delay-1000">چت ها <span id="mini-bar-chart3" class="mini-bar-chart"></span></div>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row row-cards">
                <div class="col-xl-8 col-lg-7 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>رشد اشتغال</h2>
                        </div>
                        <div class="body">
                            <div id="chart-employment" style="height: 300px"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>میانگین دما ماهانه</h3>
                        </div>
                        <div class="body">
                            <div id="chart-temperature" style="height: 300px"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>نمودار ناحیه</h2>
                        </div>
                        <div class="body">
                            <div id="chart-area" style="height: 300px"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>نمودار مرحله</h2>
                        </div>
                        <div class="body">
                            <div id="chart-step" style="height: 300px"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>نمودار مرحله پر</h2>
                        </div>
                        <div class="body">
                            <div id="chart-area-step" style="height: 300px"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>نمودار نوار پشته</h2>
                        </div>
                        <div class="body">
                            <div id="chart-bar-stacked" style="height: 300px"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>نمودار ترکیبی</h2>
                        </div>
                        <div class="body">
                            <div id="chart-combination" style="height: 300px"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>نمودار دایره ای</h2>
                        </div>
                        <div class="body">
                            <div id="chart-pie" style="height: 300px"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>نمودار دونات</h2>
                        </div>
                        <div class="body">
                            <div id="chart-donut" style="height: 300px"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>نمودار محدوده</h2>
                        </div>
                        <div class="body">
                            <div id="chart-area-spline-sracked" style="height: 300px"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>نمودار چرخش</h2>
                        </div>
                        <div class="body">
                            <div id="chart-spline-rotated" style="height: 300px"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>نمودار نوار چرخش</h2>
                        </div>
                        <div class="body">
                            <div id="chart-bar-rotated" style="height: 300px"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>نمودار میله ای</h2>
                        </div>
                        <div class="body">
                            <div id="chart-bar" style="height: 300px"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>نمودار پراکندگی</h2>
                        </div>
                        <div class="body">
                            <div id="chart-scatter" style="height: 300px"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="header">
                            <h2>سرعت باد در دو روز</h2>
                        </div>
                        <div class="body">
                            <div id="chart-spline" style="height: 300px"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
