@extends('admin.layout.master')
@section('styles')
@endsection

@section('scripts')
@endsection

@section('content')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>عناصر فرم پایه</h2>
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
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2> مثال پایه</h2>
                        </div>
                        <div class="body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="text" class="form-control" placeholder="نام کاربری" aria-label="نام کاربری" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="نام کاربری گیرنده" aria-label="نام کاربری گیرنده" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                                </div>
                            </div>

                            <label for="basic-url">آدرس سایت شما</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                </div>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">تومان</span>
                                </div>
                                <input type="text" class="form-control" aria-label="مقدار (به نزدیکترین تومان)">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">با ناحیه متن</span>
                                </div>
                                <textarea class="form-control" aria-label="با ناحیه متن"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>اندازه های مختلف</h2>
                        </div>
                        <div class="body">
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">کوچک</span>
                                </div>
                                <input type="text" class="form-control" aria-label="کوچک" aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">پیش فرض</span>
                                </div>
                                <input type="text" class="form-control" aria-label="پیش فرض" aria-describedby="inputGroup-sizing-default">
                            </div>

                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-lg">بزرگ</span>
                                </div>
                                <input type="text" class="form-control" aria-label="بزرگ" aria-describedby="inputGroup-sizing-sm">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>ورودی با چک باکس ها و رادیوها</h2>
                        </div>
                        <div class="body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" aria-label="چک باکس برای ورود متن زیر">
                                    </div>
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with checkbox">
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="radio" aria-label="دکمه رادیویی برای ورود متن زیر">
                                    </div>
                                </div>
                                <input type="text" class="form-control" aria-label="ورودی متن با دکمه رادیویی">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>افزونه های متعدد <small>افزونه های چندگانه پشتیبانی می شوند و می توانند با نسخه های ورودی جعبه و رادیو مخلوط شوند.</small></h2>
                        </div>
                        <div class="body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">تومان</span>
                                    <span class="input-group-text">0.00</span>
                                </div>
                                <input type="text" class="form-control" aria-label="مقدار (به نزدیکترین تومان)">
                            </div>

                            <div class="input-group">
                                <input type="text" class="form-control" aria-label="مقدار (به نزدیکترین تومان)">
                                <div class="input-group-append">
                                    <span class="input-group-text">تومان</span>
                                    <span class="input-group-text">0.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>چک باکس های سفارشی و دکمه های رادیویی</h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">
                                    <div class="fancy-checkbox">
                                        <label><input type="checkbox"><span>چک باکس فانتزی 1</span></label>
                                    </div>
                                    <div class="fancy-checkbox">
                                        <label><input type="checkbox" checked><span>چک باکس فانتزی 2</span></label>
                                    </div>
                                    <div class="fancy-checkbox">
                                        <label><input type="checkbox"><span>چک باکس فانتزی 3</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="fancy-radio">
                                        <label><input name="gender" value="male" type="radio" checked><span><i></i>مرد</span></label>
                                    </div>
                                    <div class="fancy-radio">
                                        <label><input name="gender" value="female" type="radio"><span><i></i>زن</span></label>
                                    </div>
                                    <br>
                                    <label class="fancy-radio"><input name="gender2" value="male" type="radio"><span><i></i>مرد</span></label>
                                    <label class="fancy-radio"><input name="gender2" value="female" type="radio" checked><span><i></i>زن</span></label>
                                    <br>
                                    <label class="fancy-radio custom-color-green"><input name="gender3" value="male" type="radio" checked><span><i></i>مرد</span></label>
                                    <label class="fancy-radio custom-color-green"><input name="gender3" value="female" type="radio"><span><i></i>زن</span></label>
                                    <br>
                                    <label class="fancy-radio custom-color-green"><input name="gender4" value="male" type="radio"><span><i></i>مرد</span></label>
                                    <label class="fancy-radio custom-color-green"><input name="gender4" value="female" type="radio" checked><span><i></i>زن</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>افزودن دکمه ورودی</h2>
                        </div>
                        <div class="body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary" type="button">دکمه</button>
                                </div>
                                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="نام کاربری گیرنده" aria-label="نام کاربری گیرنده" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">دکمه</button>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary" type="button">دکمه</button>
                                    <button class="btn btn-outline-secondary" type="button">دکمه</button>
                                </div>
                                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="نام کاربری گیرنده" aria-label="نام کاربری گیرنده" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">دکمه</button>
                                    <button class="btn btn-outline-secondary" type="button">دکمه</button>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <h6>کرکره ای دکمه ورودی</h6>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">کرکره ای</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">اقدام</a>
                                        <a class="dropdown-item" href="javascript:void(0);">اقدام دیگر</a>
                                        <a class="dropdown-item" href="javascript:void(0);">چیز دیگری اینجا</a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0);">پیوند جدا شده</a>
                                    </div>
                                </div>
                                <input type="text" class="form-control" aria-label="ورودی متن با دکمه کشویی">
                            </div>

                            <div class="input-group">
                                <input type="text" class="form-control" aria-label="ورودی متن با دکمه کشویی">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">کرکره ای</button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">اقدام</a>
                                        <a class="dropdown-item" href="javascript:void(0);">اقدام دیگر</a>
                                        <a class="dropdown-item" href="javascript:void(0);">چیز دیگری اینجا</a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0);">پیوند جدا شده</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <h6>دکمه ورودی با بخش</h6>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button type="button" class="btn btn-outline-secondary">اقدام</button>
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only">تعویض کرکره</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">اقدام</a>
                                        <a class="dropdown-item" href="javascript:void(0);">اقدام دیگر</a>
                                        <a class="dropdown-item" href="javascript:void(0);">چیز دیگری اینجا</a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0);">پیوند جدا شده</a>
                                    </div>
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                            </div>

                            <div class="input-group">
                                <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-outline-secondary">اقدام</button>
                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only">تعویض کرکره</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">اقدام</a>
                                        <a class="dropdown-item" href="javascript:void(0);">اقدام دیگر</a>
                                        <a class="dropdown-item" href="javascript:void(0);">چیز دیگری اینجا</a>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0);">پیوند جدا شده</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>فرم های سفارشی <small>گروه های ورودی شامل پشتیبانی از انتخاب های سفارشی و ورودی های فایل های سفارشی می باشد. نسخه های پیش فرض مرورگر این پشتیبانی نمی شوند.</small></h2>
                        </div>
                        <div class="body">
                            <h6>1. انتخاب سفارشی</h6>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">گزینه ها</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected>انتخاب...</option>
                                    <option value="1">یک</option>
                                    <option value="2">دو</option>
                                    <option value="3">سه</option>
                                </select>
                            </div>

                            <div class="input-group mb-3">
                                <select class="custom-select" id="inputGroupSelect02">
                                    <option selected>انتخاب...</option>
                                    <option value="1">یک</option>
                                    <option value="2">دو</option>
                                    <option value="3">سه</option>
                                </select>
                                <div class="input-group-append">
                                    <label class="input-group-text" for="inputGroupSelect02">گزینه ها</label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary" type="button">دکمه</button>
                                </div>
                                <select class="custom-select" id="inputGroupSelect03">
                                    <option selected>انتخاب...</option>
                                    <option value="1">یک</option>
                                    <option value="2">دو</option>
                                    <option value="3">سه</option>
                                </select>
                            </div>

                            <div class="input-group">
                                <select class="custom-select" id="inputGroupSelect04">
                                    <option selected>انتخاب...</option>
                                    <option value="1">یک</option>
                                    <option value="2">دو</option>
                                    <option value="3">سه</option>
                                </select>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">دکمه</button>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <h6>2. ورودی فایل سفارشی</h6>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">آپلود</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                                    <label class="custom-file-label" for="inputGroupFile01">انتخاب فایل</label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                                    <label class="custom-file-label" for="inputGroupFile02">انتخاب فایل</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">آپلود</span>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary" type="button">دکمه</button>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile03">
                                    <label class="custom-file-label" for="inputGroupFile03">انتخاب فایل</label>
                                </div>
                            </div>

                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile04">
                                    <label class="custom-file-label" for="inputGroupFile04">انتخاب فایل</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button">دکمه</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
