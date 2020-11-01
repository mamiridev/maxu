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
                    <h2>چت</h2>
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="chatapp_list">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="جستجو...">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                    </div>
                                </div>
                                <ul class="right_chat list-unstyled mb-0">
                                    <li class="offline">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="https://via.placeholder.com/140x140" alt="">
                                                <div class="media-body">
                                                    <span class="name font-bold">آرش خادملو</span>
                                                    <span class="message">آفلاین</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="online">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="https://via.placeholder.com/140x140" alt="">
                                                <div class="media-body">
                                                    <span class="name font-bold">آرش خادملو</span>
                                                    <span class="message">آنلاین</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="online">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="https://via.placeholder.com/140x140" alt="">
                                                <div class="media-body">
                                                    <span class="name font-bold">آرش خادملو</span>
                                                    <span class="message">آنلاین</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="online">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="https://via.placeholder.com/140x140" alt="">
                                                <div class="media-body">
                                                    <span class="name font-bold">آرش خادملو</span>
                                                    <span class="message">آنلاین</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="offline">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="https://via.placeholder.com/140x140" alt="">
                                                <div class="media-body">
                                                    <span class="name font-bold">آرش خادملو</span>
                                                    <span class="message">آفلاین since May 12</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="online">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="https://via.placeholder.com/140x140" alt="">
                                                <div class="media-body">
                                                    <span class="name font-bold">آرش خادملو</span>
                                                    <span class="message">آنلاین</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="offline">
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="https://via.placeholder.com/140x140" alt="">
                                                <div class="media-body">
                                                    <span class="name font-bold">آرش خادملو</span>
                                                    <span class="message">آفلاین since Jan 18</span>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="chatapp_body">
                                <div class="chat-header clearfix">
                                    <div class="row clearfix">
                                        <div class="col-lg-12">
                                            <div class="chat-about">
                                                <h6 class="m-b-0">آرش خادملو</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-history">
                                    <ul class="message_data">
                                        <li class="right clearfix">
                                            <img class="user_pix" src="https://via.placeholder.com/140x140" alt="avatar">
                                            <div class="message">
                                                <span>سلام آیدن، چطوری؟<br> پروژه چگونه می آید؟</span>
                                            </div>
                                            <span class="data_time">10:12 صبح، امروز</span>
                                        </li>
                                        <li class="left clearfix">
                                            <img class="user_pix" src="https://via.placeholder.com/140x140" alt="avatar">
                                            <div class="message">
                                                <span>آیا ما امروز ملاقات می کنیم؟</span>
                                            </div>
                                            <span class="data_time">10:12 صبح، امروز</span>
                                        </li>
                                        <li class="right clearfix">
                                            <img class="user_pix" src="https://via.placeholder.com/140x140" alt="avatar">
                                            <div class="message">
                                                <span>پروژه چگونه می آید؟</span>
                                            </div>
                                            <span class="data_time">10:12 صبح، امروز</span>
                                        </li>
                                        <li class="left clearfix">
                                            <img class="user_pix" src="https://via.placeholder.com/140x140" alt="avatar">
                                            <div class="message">
                                                <span>پروژه در حال حاضر تمام شده است و من<br> نتایج به شما نشان می دهد.</span>
                                            </div>
                                            <span class="data_time">10:12 صبح، امروز</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="chat-message clearfix">
                                    <div class="input-group mb-0">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <a href="javascript:void(0);" class="btn btn-link"><i class="icon-camera text-warning"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-link"><i class="icon-camcorder text-warning"></i></a>
                                        </span>
                                        </div>
                                        <textarea  row="" class="form-control" placeholder="متن را اینجا وارد کنید..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="chatapp_detail text-center vivify pullLeft delay-150">
                                <div class="profile-image"><img src="../assets/images/user.png" class="rounded-circle mb-3" alt=""></div>
                                <h5 class="mb-0">آرش خادملو</h5>
                                <small class="text-muted">آدرس: </small>
                                <p> تهران</p>
                                <small class="text-muted">آدرس ایمیل: </small>
                                <p>louispierce@example.com</p>
                                <small class="text-muted">موبایل: </small>
                                <p>+ 202-222-2121</p>
                                <button class="btn btn-round btn-success">نمایش مشخصات</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
