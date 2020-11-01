@extends('admin.layout.master')
@section('styles')
@endsection

@section('scripts')

    <script src="../assets/vendor/jquery-sparkline/js/jquery.sparkline.min.js"></script>
    <script src="assets/js/pages/charts/sparkline.js"></script>
@endsection

@section('content')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>نمودار اسپارک لاین</h1>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="inlineblock vivify swoopInTop delay-900 mr-4">بازدیدکنندگان <span id="mini-bar-chart1" class="mini-bar-chart"></span></div>
                    <div class="inlineblock vivify swoopInTop delay-950 mr-4">بازدیدها <span id="mini-bar-chart2" class="mini-bar-chart"></span></div>
                    <div class="inlineblock vivify swoopInTop delay-1000">چت ها <span id="mini-bar-chart3" class="mini-bar-chart"></span></div>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>همه</strong> نمونه ها</h2>
                            <ul class="header-dropdown dropdown">

                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">اقدام</a></li>
                                        <li><a href="javascript:void(0);">دیگر اقدام</a></li>
                                        <li><a href="javascript:void(0);">یک چیز دیگر</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <p> سرعت ماوس <span id="mousespeed">بارگذاری..</span></p>
                                    <p> درونی <span class="sparkline-1">10,8,9,3,5,8,5</span> نمودار خط <span class="sparkline-1">8,4,0,0,0,0,1,4,4,10,10,10,10,0,0,0,4,6,5,9,10</span></p>
                                    <p> نمودارهای نوار<span class="sparkbar">10,8,9,3,5,8,5</span> مقادیر منفی: <span class="sparkbar">-3,1,2,0,3,-1</span> انباشته شده: <span class="sparkbar">0:2,2:4,4:2,4:1</span></p>
                                    <p> کامپوزیت خطی <span id="compositeline">8,4,0,0,0,0,1,4,4,10,10,10,10,0,0,0,4,6,5,9,10</span></p>
                                    <p> درونی با محدوده طبیعی <span id="normalline">8,4,0,0,0,0,1,4,4,10,10,10,10,0,0,0,4,6,5,9,10</span></p>
                                    <p> نوار کامپوزیت <span id="compositebar">4,6,7,7,4,3,2,1,4</span></p>
                                    <p> گسسته <span class="discrete1">4,6,7,7,4,3,2,1,4,4,5,6,7,6,6,2,4,5</span><br>
                                        گسسته با
                                        آستانه <span id="discrete2">4,6,7,7,4,3,2,1,4</span></p>
                                    <p> نمودار گلوله<br>
                                        <span class="sparkbullet">10,12,12,9,7</span><br>
                                        <span class="sparkbullet">14,12,12,9,7</span><br>
                                        <span class="sparkbullet">10,12,14,9,7</span><br>
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <p> سفارشی کردن اندازه و رنگ <span id="linecustom">10,8,9,3,5,8,5,7</span></p>
                                    <p> نمودارهای سه گانه <span class="sparktristate">1,1,0,1,-1,-1,1,-1,0,0,1,1</span><br>
                                        (فکر می کنم بازی ها برنده، گم شده یا کشیده شده اند) </p>
                                    <p> نمودار سه گانه با استفاده از یک نقشه رنگی: <span class="sparktristatecols">1,2,0,2,-1,-2,1,-2,0,0,1,1</span></p>
                                    <p>نمودار جعبه: <span class="sparkboxplot">4,27,34,52,54,59,61,68,78,82,85,87,91,93,100</span><br>
                                        طرح جعبه پیش محاسبه شده <span class="sparkboxplotraw">بارگذاری..</span></p>
                                    <p><span class="sparkpie">1,1,2,4,3</span><span class="sparkpie">1,5</span><span class="sparkpie">20,50,80</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
