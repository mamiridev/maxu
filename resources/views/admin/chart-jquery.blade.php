@extends('admin.layout.master')
@section('styles')
@endsection

@section('scripts')
    <script src="../assets/vendor/jquery-knob/jquery.knob.min.js"></script><!-- Jquery Knob Plugin Js -->
    <script src="assets/js/pages/charts/jquery-knob.js"></script>
@endsection

@section('content')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>جی کوئری Knob</h1>
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
                <div class="col-lg-3">
                    <div class="card">
                        <div class="body text-center">
                            <p>نمونه های پایه</p>
                            <input type="text" class="knob" value="86" data-width="125" data-height="125" data-thickness="0.25" data-bgColor="#30373e" data-fgColor="#AA55AA">

                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="body text-center">
                            <p>گوشه های گرد</p>
                            <input type="text" class="knob" data-linecap="round" value="36" data-width="125" data-height="125" data-thickness="0.25" data-bgColor="#30373e" data-fgColor="#FFA117">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="body text-center">
                            <p>فقط خواندنی</p>
                            <input type="text" class="knob" value="77" data-width="125" data-height="125" data-thickness="0.25" data-bgColor="#30373e" data-fgColor="#5CB65F" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="body text-center">
                            <p>سبک ترون</p>
                            <input type="text" class="knob" data-skin="tron" value="89" data-width="125" data-height="125" data-thickness="0.2" data-angleArc="270"
                                   data-angleoffset="90" data-bgColor="#30373e" data-fgColor="#f66d9b">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>اندازه های متفاوت</h2>
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
                                <div class="col-md-2 m-b-20">
                                    <input type="text" class="knob" value="66" data-width="90" data-height="90" data-thickness="0.05" data-bgColor="#f7f7f7" data-fgColor="#ff598f">
                                </div>
                                <div class="col-md-2 m-b-20">
                                    <input type="text" class="knob" value="76" data-width="120" data-height="120" data-thickness="0.32" data-bgColor="#f7f7f7" data-fgColor="#64c8c0">
                                </div>
                                <div class="col-md-2 m-b-20">
                                    <input type="text" class="knob" value="47" data-width="120" data-height="120" data-thickness="0.50" data-bgColor="#f7f7f7" data-fgColor="#ffcd29">
                                </div>
                                <div class="col-md-2 m-b-20">
                                    <input type="text" class="knob" value="64" data-width="80" data-height="80" data-thickness="0.16" data-bgColor="#f7f7f7" data-fgColor="#cb8fe7">
                                </div>
                                <div class="col-md-2 m-b-20">
                                    <input type="text" class="knob" value="74" data-width="75" data-height="75" data-thickness="0.2" data-bgColor="#f7f7f7" data-fgColor="#f66d9b">
                                </div>
                                <div class="col-md-2 m-b-20">
                                    <input type="text" class="knob" value="33" data-width="120" data-height="120" data-thickness="0.12" data-bgColor="#f7f7f7" data-fgColor="#8bc3fe">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>زاویه های مختلف</h2>
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
                                <div class="col-md-2">
                                    <input type="text" class="knob" value="45" data-width="125" data-height="125" data-thickness="0.25" data-angleArc="250" data-angleoffset="-125" data-bgColor="#30373e" data-fgColor="#ff598f">
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="knob" value="53" data-width="125" data-height="125" data-thickness="0.25" data-angleArc="250" data-angleoffset="-305" data-bgColor="#30373e" data-fgColor="#64c8c0">
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="knob" value="22" data-width="125" data-height="125" data-thickness="0.25" data-angleArc="250" data-angleoffset="-35" data-bgColor="#30373e" data-fgColor="#ffcd29">
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="knob" value="67" data-width="125" data-height="125" data-thickness="0.25" data-angleArc="250" data-angleoffset="145" data-bgColor="#30373e" data-fgColor="#cb8fe7">
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="knob" value="92" data-width="125" data-height="125" data-thickness="0.25" data-angleArc="270" data-angleoffset="-0" data-bgColor="#30373e" data-fgColor="#f66d9b">
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="knob" value="39" data-width="125" data-height="125" data-thickness="0.25" data-angleArc="270" data-angleoffset="90" data-bgColor="#30373e" data-fgColor="#8bc3fe">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
