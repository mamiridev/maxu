@extends('admin.layout.master')
@section('styles')

    <link rel="stylesheet" href="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css">
    <link rel="stylesheet" href="../assets/vendor/multi-select/css/multi-select.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="../assets/vendor/nouislider/nouislider.min.css">

    <style>
        .demo-card label{ display: block; position: relative;}
        .demo-card .col-lg-4{ margin-bottom: 30px;}
    </style>

@endsection

@section('scripts')

    <script src="../assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script><!-- Bootstrap Colorpicker Js -->
    <script src="../assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js"></script><!-- Input Mask Plugin Js -->
    <script src="../assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js"></script>
    <script src="../assets/vendor/multi-select/js/jquery.multi-select.js"></script><!-- Multi Select Plugin Js -->
    <script src="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    <script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="../assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script><!-- Bootstrap Tags Input Plugin Js -->
    <script src="../assets/vendor/nouislider/nouislider.js"></script><!-- noUISlider Plugin Js -->
    <script src="assets/js/pages/forms/advanced-form-elements.js"></script>
@endsection

@section('content')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>عناصر پیشرفته</h2>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="inlineblock vivify swoopInTop delay-900 mr-4">بازدیدکنندگان <span id="mini-bar-chart1" class="mini-bar-chart"></span></div>
                    <div class="inlineblock vivify swoopInTop delay-950 mr-4">بازدیدها <span id="mini-bar-chart2" class="mini-bar-chart"></span></div>
                    <div class="inlineblock vivify swoopInTop delay-1000">چت ها <span id="mini-bar-chart3" class="mini-bar-chart"></span></div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <!-- Color Pickers -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>جمع کننده های رنگ <small>گرفته شده از <a href="https://github.com/mjolnic/bootstrap-colorpicker/" target="_blank">github.com/mjolnic/bootstrap-colorpicker</a></small></h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-6"><b>کد HEX</b>
                                    <div class="input-group colorpicker">
                                        <input type="text" class="form-control" value="#00AABB">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><span class="input-group-addon"><i></i></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"><b>کد RGB(A)</b>
                                    <div class="input-group colorpicker">
                                        <input type="text" class="form-control" value="rgba(0,0,0,0.7)">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><span class="input-group-addon"><i></i></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- datepicker -->
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>انتخاب تاریخ</h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">
                                    <label>پیش فرض</label>
                                    <div class="input-group mb-3">
                                        <input data-provide="datepicker" data-date-autoclose="true" class="form-control">
                                    </div>
                                    <div>
                                        <label>فرمت سفارشی (dd/mm/yyyy)</label>
                                        <div class="input-group mb-3">
                                            <input data-provide="datepicker" data-date-autoclose="true" class="form-control" data-date-format="dd/mm/yyyy">
                                        </div>
                                    </div>
                                    <div>
                                        <label>دامنه</label>
                                        <div class="input-daterange input-group" data-provide="datepicker">
                                            <input type="text" class="input-sm form-control" name="start">
                                            <span class="input-group-addon range-to">to</span>
                                            <input type="text" class="input-sm form-control" name="end">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <label>درون طی</label>
                                    <div class="inline-datepicker"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Masked Input -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>ورودی ماسک با آیکون <small>گرفته شده از <a href="https://github.com/RobinHerbots/jquery.inputmask" target="_blank">github.com/RobinHerbots/jquery.inputmask</a></small></h2>
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
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-6">
                                        <b>تاریخ</b>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-calendar"></i></span>
                                            </div>
                                            <input type="text" class="form-control date" placeholder="مثل: 30/07/2016">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <b>زمان (24 ساعت)</b>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-clock"></i></span>
                                            </div>
                                            <input type="text" class="form-control time24" placeholder="مثل: 23:59">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <b>زمان (12 ساعت)</b>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-clock"></i></span>
                                            </div>
                                            <input type="text" class="form-control time12" placeholder="مثل: 11:59 pm">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <b>زمان قرار</b>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            </div>
                                            <input type="text" class="form-control datetime" placeholder="مثل: 30/07/2016 23:59">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <b>شماره تلفن همراه</b>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-mobile-phone"></i></span>
                                            </div>
                                            <input type="text" class="form-control mobile-phone-number" placeholder="مثل: +00 (000) 000-00-00">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <b>شماره تلفن</b>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                            </div>
                                            <input type="text" class="form-control phone-number" placeholder="مثل: +00 (000) 000-00-00">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <b>پول (دلار)</b>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-dollar"></i></span>
                                            </div>
                                            <input type="text" class="form-control money-dollar" placeholder="مثل: 99,99 $">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <b>آدرس آی پی</b>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-desktop"></i></span>
                                            </div>
                                            <input type="text" class="form-control ip" placeholder="مثل: 255.255.255.255">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <b>کارت اعتباری</b>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                                            </div>
                                            <input type="text" class="form-control credit-card" placeholder="مثل: 0000 0000 0000 0000">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <b>آدرس ایمیل</b>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                                            </div>
                                            <input type="text" class="form-control email" placeholder="مثل: example@example.com">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <b>شماره سریال</b>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                                            </div>
                                            <input type="text" class="form-control key" placeholder="مثل: XXX0-XXXX-XX00-0XXX">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>ورودی متن ماسک</h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="phone" class="control-label">تلفن</label>
                                        <input type="text" id="phone" class="form-control">
                                        <span class="help-block">(999) 999-9999</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="phone-ex" class="control-label">تلفن + بیرون</label>
                                        <input type="text" id="phone-ex" class="form-control">
                                        <span class="help-block">(999) 999-9999? x99999</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="tax-id" class="control-label">شناسه مالیات</label>
                                        <input type="text" id="tax-id" class="form-control">
                                        <span class="help-block">99-9999999</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="ssn" class="control-label">شماره امنیت اجتماعی</label>
                                        <input type="text" id="ssn" class="form-control">
                                        <span class="help-block">999-99-9999</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="product-key" class="control-label">کلید محصول</label>
                                        <input type="text" id="product-key" class="form-control">
                                        <span class="help-block">a*-999-a999</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Multi Select -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>انتخاب چندگانهt <small>گرفته شده از <a href="https://github.com/lou/multi-select/" target="_blank">github.com/lou/multi-select</a></small></h2>
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
                            <select id="optgroup" class="ms" multiple="multiple">
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">West Virginia</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>انتخاب چندگانه</h2>
                        </div>
                        <div class="body demo-card">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-12">
                                    <label>پیش فرض</label>
                                    <div class="multiselect_div">
                                        <select id="multiselect1" name="multiselect1[]" class="multiselect" multiple="multiple">
                                            <option value="cheese">پنیر</option>
                                            <option value="tomatoes">گوجه فرنگی</option>
                                            <option value="mozarella">موزارلا</option>
                                            <option value="mushrooms">قارچ</option>
                                            <option value="pepperoni">پپپرونی</option>
                                            <option value="onions">پیازها</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <label>"انتخاب همه" گزینه فعال</label>
                                    <div class="multiselect_div">
                                        <select id="multiselect3-all" name="multiselect3[]" class="multiselect multiselect-custom" multiple="multiple">
                                            <option value="multiselect-all">انتخاب همه</option>
                                            <option value="cheese">پنیر</option>
                                            <option value="tomatoes">گوجه فرنگی</option>
                                            <option value="mozarella">موزارلا</option>
                                            <option value="mushrooms">قارچ</option>
                                            <option value="pepperoni">پپپرونی</option>
                                            <option value="onions">پیازها</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <label>گزینه های گروه</label>
                                    <div class="multiselect_div">
                                        <select id="multiselect5" name="multiselect5" class="multiselect-custom" multiple="multiple">
                                            <optgroup label="Mathematics">
                                                <option value="analysis">تحلیل و بررسی</option>
                                                <option value="algebra">جبر خطی</option>
                                                <option value="discrete">ریاضیات گسسته</option>
                                                <option value="numerical">تحلیل عددی</option>
                                                <option value="probability">نظریه احتمالی</option>
                                            </optgroup>
                                            <optgroup label="Computer Science">
                                                <option value="programming">مقدمه ای بر برنامه نویسی</option>
                                                <option value="automata">نظریه اتوماتیک</option>
                                                <option value="complexity">تئوری پیچیدگی</option>
                                                <option value="software">مهندسی نرم افزار</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <label>سایز کوچکتر</label>
                                    <div class="multiselect_div">
                                        <select id="multiselect-size" name="multiselect7[]" class="multiselect multiselect-custom" multiple="multiple">
                                            <option value="cheese">پنیر</option>
                                            <option value="tomatoes">گوجه فرنگی</option>
                                            <option value="mozarella">موزارلا</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <label>جعبه سفارشی</label>
                                    <div class="multiselect_div">
                                        <select id="multiselect2" name="multiselect2[]" class="multiselect multiselect-custom" multiple="multiple">
                                            <option value="cheese">پنیر</option>
                                            <option value="tomatoes">گوجه فرنگی</option>
                                            <option value="mozarella">موزارلا</option>
                                            <option value="mushrooms">قارچ</option>
                                            <option value="pepperoni">پپپرونی</option>
                                            <option value="onions">پیازها</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <label>انتخاب واحد</label>
                                    <div class="multiselect_div">
                                        <select id="single-selection" name="single_selection" class="multiselect multiselect-custom">
                                            <option value="cheese">پنیر</option>
                                            <option value="tomatoes">گوجه فرنگی</option>
                                            <option value="mozarella">موزارلا</option>
                                            <option value="mushrooms">قارچ</option>
                                            <option value="pepperoni">پپپرونی</option>
                                            <option value="onions">پیازها</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <label>فیلتر فعال</label>
                                    <div class="multiselect_div">
                                        <select id="multiselect4-filter" name="multiselect4[]" class="multiselect multiselect-custom" multiple="multiple">
                                            <option value="bootstrap">بوت استرپ</option>
                                            <option value="bootstrap-marketplace">بازار بوت استرپ</option>
                                            <option value="bootstrap-theme">تم بوت استرپ</option>
                                            <option value="html">HTML</option>
                                            <option value="html-template">قالب HTML</option>
                                            <option value="wp-marketplace">بازار وردپرس</option>
                                            <option value="wp-plugin">پلاگین وردپرس</option>
                                            <option value="wp-theme">قالب وردپرس</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <label>گزینه های غیر فعال</label>
                                    <div class="multiselect_div">
                                        <select id="multiselect6" name="multiselect6[]" class="multiselect multiselect-custom" multiple="multiple">
                                            <option value="cheese">پنیر</option>
                                            <option value="tomatoes">گوجه فرنگی</option>
                                            <option value="mozarella">موزارلا</option>
                                            <option value="mushrooms" disabled="disabled">قارچ</option>
                                            <option value="pepperoni" disabled="disabled">پپپرونی</option>
                                            <option value="onions" disabled="disabled">پیازها</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <label>لینک (btn-link)</label>
                                    <div class="multiselect_div">
                                        <select id="multiselect-link" name="multiselect8[]" class="multiselect multiselect-custom" multiple="multiple">
                                            <option value="cheese">پنیر</option>
                                            <option value="tomatoes">گوجه فرنگی</option>
                                            <option value="mozarella">موزارلا</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-12">
                                    <label>کلاس دکمه سفارشی (btn-primary)</label>
                                    <div class="multiselect_div">
                                        <select id="multiselect-color" name="multiselect9[]" class="multiselect multiselect-custom" multiple="multiple">
                                            <option value="cheese">پنیر</option>
                                            <option value="tomatoes">گوجه فرنگی</option>
                                            <option value="mozarella">موزارلا</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <label>کلاس دکمه سفارشی (btn-success)</label>
                                    <div class="multiselect_div">
                                        <select id="multiselect-color2" name="multiselect10[]" class="multiselect multiselect-custom" multiple="multiple">
                                            <option value="cheese">پنیر</option>
                                            <option value="tomatoes">گوجه فرنگی</option>
                                            <option value="mozarella">موزارلا</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tags Input -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>ورودی برچسب ها <small>گرفته شده از <a href="https://github.com/bootstrap-tagsinput/bootstrap-tagsinput" target="_blank">github.com/bootstrap-tagsinput/bootstrap-tagsinput</a></small></h2>
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
                            <div class="input-group demo-tagsinput-area">
                                <input type="text" class="form-control" data-role="tagsinput" value="Washington,Beijing,Cairo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Input Slider -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>اسلایدر ورودی</h2>
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
                                <div class="col-lg-6 col-md-12">
                                    <p><b>مثال پایه</b></p>
                                    <div id="nouislider_basic_example"></div>
                                    <div class="m-t-20 font-12"><b>Value: </b><span class="js-nouislider-value"></span></div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <p><b>مثال محدوده</b></p>
                                    <div id="nouislider_range_example"></div>
                                    <div class="m-t-20 font-12"><b>Value: </b><span class="js-nouislider-value"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
