@extends('admin.layout.master')
@section('styles')

    <link rel="stylesheet" href="../assets/vendor/dropify/css/dropify.min.css">
@endsection

@section('scripts')
    <script src="../assets/vendor/dropify/js/dropify.js"></script>
    <script src="assets/js/pages/forms/dropify.js"></script>
@endsection

@section('content')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>آپلود فایل با کشیدن و رها کردن</h2>
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

                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>پیش فرض <small>گرفته شده از: https://github.com/JeremyFagis/dropify</small></h2>
                        </div>
                        <div class="body">
                            <input type="file" class="dropify">
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>با رویداد و پرونده پیش فرض <small>سعی کنید تصویر را حذف کنید</small></h2>
                        </div>
                        <div class="body">
                            <input type="file" id="dropify-event" data-default-file="https://via.placeholder.com/1024x640">
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>آپلود فایل غیرفعال شده</h2>
                        </div>
                        <div class="body">
                            <input type="file" class="dropify" disabled="disabled">
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>محدود کردن نوع فایل <small>سعی کنید فقط png یا pdf را آپلود کنید</small></h2>
                        </div>
                        <div class="body">
                            <input type="file" class="dropify" data-allowed-file-extensions="pdf png">
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>اندازه فایل محدود <small>سعی کنید فایل بزرگتر از 100 کیلوبایت آپلود کنید</small></h2>
                        </div>
                        <div class="body">
                            <input type="file" class="dropify" data-max-file-size="100K">
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>پیام های سفارشی برای پیش فرض <small>جایگزینی، حذف و خطا</small></h2>
                        </div>
                        <div class="body">
                            <input type="file" class="dropify-fr">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
