@extends('admin.layout.master')
@section('styles')
@endsection

@section('scripts')
    <script>
        $('.toggle-email-nav').on('click', function() {
            $('.mail-left').toggleClass('open');
        });
    </script>
@endsection

@section('content')
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>ایمیل</h2>
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
                        <div class="mail-inbox">
                            <div class="mobile-left">
                                <a href="javascript:void(0);" class="btn btn-primary toggle-email-nav"><i class="fa fa-bars"></i></a>
                            </div>
                            <div class="body mail-left">
                                <div class="mail-compose m-b-20">
                                    <a href="app-compose.html" class="btn btn-danger btn-block">نوشتن</a>
                                </div>
                                <div class="mail-side">
                                    <ul class="nav">
                                        <li class="active"><a href="javascript:void(0);"><i class="icon-drawer"></i>صندوق ورودی<span class="badge badge-primary float-right">6</span></a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-cursor"></i>ارسال<span class="badge badge-warning float-right">6</span></a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-envelope-open"></i>پیش نویس</a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-action-redo"></i>صندوق پستی</a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-trash"></i>زباله</a></li>
                                    </ul>
                                    <h3 class="label">برچشب ها</h3>
                                    <ul class="nav">
                                        <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-danger"></i>کارگاه</a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-info"></i>خصوصی</a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-dark"></i>پی پال</a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-primary"></i>شرکت</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="body mail-right check-all-parent">

                                <div class="mail-action clearfix m-l-15">
                                    <div class="pull-left">
                                        <div class="fancy-checkbox d-inline-block">
                                            <label>
                                                <input class="check-all" type="checkbox" name="checkbox">
                                                <span></span>
                                            </label>
                                        </div>
                                        <a href="javascript:void(0);" class="btn btn-danger btn-sm"><i class="icon-trash"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-light btn-sm hidden-sm"><i class="icon-refresh"></i></a>
                                        <div class="btn-group">
                                            <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-tag"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">برچسب 1</a>
                                                <a class="dropdown-item" href="javascript:void(0);">برچسب 2</a>
                                                <a class="dropdown-item" href="javascript:void(0);">برچسب 3</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pull-right ml-auto">
                                        <div class="pagination-email d-flex">
                                            <p>1-50/295</p>
                                            <div class="btn-group m-l-20">
                                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-angle-left"></i></button>
                                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-angle-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mail-list">
                                    <ul class="list-unstyled">
                                        <li class="clearfix">
                                            <div class="md-left">
                                                <label class="fancy-checkbox">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                    <span></span>
                                                </label>
                                                <a href="javascript:void(0);" class="mail-star active"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="md-right">
                                                <img class="rounded" src="../assets/images/xs/avatar1.jpg" alt="">
                                                <p class="sub"><a href="#" class="mail-detail-expand">آرش خادملو</a></p>
                                                <p class="dep"><span class="m-r-10">[exampldsd]</span>لورم ایپسوم به راحتی متن ساختگی چاپ و چاپ و نشر صنعت است.</p>
                                                <span class="time">23 تیر</span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="md-left">
                                                <label class="fancy-checkbox">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                    <span></span>
                                                </label>
                                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="md-right">
                                                <img class="rounded" src="../assets/images/xs/avatar2.jpg" alt="">
                                                <p class="sub"><a href="#" class="mail-detail-expand">آرش خادملو</a></p>
                                                <p class="dep"><span class="m-r-10">[Support]</span>لورم ایپسوم به راحتی متن ساختگی چاپ و چاپ و نشر صنعت است</p>
                                                <span class="time"><i class="fa fa-paperclip"></i> 23 تیر</span>
                                            </div>
                                        </li>
                                        <li class="clearfix unread">
                                            <div class="md-left">
                                                <label class="fancy-checkbox">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                    <span></span>
                                                </label>
                                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="md-right">
                                                <img class="rounded" src="../assets/images/xs/avatar3.jpg" alt="">
                                                <p class="sub"><a href="#" class="mail-detail-expand">آرش خادملو</a></p>
                                                <p class="dep"><span class="m-r-10">[Support]</span>لورم ایپسوم به راحتی متن ساختگی چاپ و چاپ و نشر صنعت است.</p>
                                                <span class="time">23 تیر</span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="md-left">
                                                <label class="fancy-checkbox">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                    <span></span>
                                                </label>
                                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="md-right">
                                                <img class="rounded" src="../assets/images/xs/avatar4.jpg" alt="">
                                                <p class="sub"><a href="#" class="mail-detail-expand">آرش خادملو</a></p>
                                                <p class="dep"><span class="m-r-10">[CSS]</span>لورم ایپسوم به راحتی متن ساختگی چاپ و چاپ و نشر صنعت است</p>
                                                <span class="time">23 تیر</span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="md-left">
                                                <label class="fancy-checkbox">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                    <span></span>
                                                </label>
                                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="md-right">
                                                <img class="rounded" src="../assets/images/xs/avatar5.jpg" alt="">
                                                <p class="sub"><a href="#" class="mail-detail-expand">آرش خادملو</a></p>
                                                <p class="dep"><span class="m-r-10">[GetBootstrap]</span>لورم ایپسوم به راحتی متن ساختگی چاپ و چاپ و نشر صنعت است.</p>
                                                <span class="time"><i class="fa fa-paperclip"></i> 23 تیر</span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="md-left">
                                                <label class="fancy-checkbox">
                                                    <input type="checkbox" name="checkbox" class="checkbox-tick">
                                                    <span></span>
                                                </label>
                                                <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                            </div>
                                            <div class="md-right">
                                                <img class="rounded" src="../assets/images/xs/avatar6.jpg" alt="">
                                                <p class="sub"><a href="#" class="mail-detail-expand">آرش خادملو</a></p>
                                                <p class="dep"><span class="m-r-10">[Awwwards]</span>لورم ایپسوم به راحتی متن ساختگی چاپ و چاپ و نشر صنعت است</p>
                                                <span class="time">23 تیر</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">قبلی</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">بعدی</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
