@extends('admin.layout.master')
@section('styles')
    <link rel="stylesheet" href="../assets/vendor/fullcalendar/fullcalendar.min.css">
@endsection

@section('scripts')
    <script src="assets/bundles/fullcalendarscripts.bundle.js"></script><!--/ calender javascripts -->
    <script src="assets/bundles/knob.bundle.js"></script><!-- Jquery Knob-->
    <script src="assets/js/pages/calendar.js"></script>
    <script>
        $('.knob').knob({
            draw: function ()
            {
            }
        });
    </script>
@endsection

@section('content')


<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>تقویم</h2>
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
            <div class="col-lg-4 col-md-12">
                <button type="button" class="btn btn-warning btn-round btn-block mb-3" data-toggle="modal" data-target="#addevent">اضافه کردن رویداد جدید</button>
                <div class="card">
                    <div class="body">
                        <table class="table table-calendar mb-3">
                            <tbody>
                            <tr>
                                <th>دو</th>
                                <th>سه</th>
                                <th>چه</th>
                                <th>پن</th>
                                <th>جم</th>
                                <th>شن</th>
                                <th>یک</th>
                            </tr>
                            <tr>
                                <td class="text-muted">27</td>
                                <td class="text-muted">28</td>
                                <td class="text-muted">29</td>
                                <td class="text-muted">30</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td><a href="javascript:void(0)" class="table-calendar-link" title="ملاقات" data-toggle="tooltip">4</a></td>
                                <td>5</td>
                                <td><a href="javascript:void(0)" class="table-calendar-link" title="رویداد" data-toggle="tooltip">6</a></td>
                                <td>7</td>
                                <td>8</td>
                                <td>9</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td><a href="javascript:void(0)" class="table-calendar-link" title="بیرون رفتن با دوستان" data-toggle="tooltip">12</a></td>
                                <td>13</td>
                                <td>14</td>
                                <td><a href="javascript:void(0)">15</a></td>
                                <td>16</td>
                                <td>17</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td><a href="javascript:void(0)" class="table-calendar-link" title="محصول رویداد" data-toggle="tooltip">19</a></td>
                                <td><a href="javascript:void(0)" class="table-calendar-link" title="ملاقات" data-toggle="tooltip">20</a></td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                                <td>29</td>
                                <td>30</td>
                                <td class="text-muted">1</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2>لیست انجام</h2>
                    </div>
                    <div class="body">
                        <ul class="todo_list list-unstyled">
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked>
                                    <span>رویداد محصول در نیویورک</span>
                                </label>
                                <a href="javascript:void(0);" class="todo-delete"><i class="icon-trash"></i></a>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked>
                                    <span>ملاقات با تیم</span>
                                </label>
                                <a href="javascript:void(0);" class="todo-delete"><i class="icon-trash"></i></a>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>رویداد محصول برای محصول جدید</span>
                                </label>
                                <a href="javascript:void(0);" class="todo-delete"><i class="icon-trash"></i></a>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox" checked>
                                    <span>دوستان ناهار در یکشنبه</span>
                                </label>
                                <a href="javascript:void(0);" class="todo-delete"><i class="icon-trash"></i></a>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>ملاقات با تیم</span>
                                </label>
                                <a href="javascript:void(0);" class="todo-delete"><i class="icon-trash"></i></a>
                            </li>
                            <li>
                                <label class="fancy-checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <span>رویداد محصول برای محصول جدید</span>
                                </label>
                                <a href="javascript:void(0);" class="todo-delete"><i class="icon-trash"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="body">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Default Size -->
<div class="modal fade" id="addevent" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">افزودن رویداد</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="form-line">
                        <input type="number" class="form-control round" placeholder="تاریخ رویداد">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" class="form-control round" placeholder="عنوان رویداد">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <textarea rows="4" class="form-control no-resize" placeholder="شرح رویداد..."></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-round btn-primary">افزودن</button>
                <button type="button" class="btn btn-round btn-simple" data-dismiss="modal">بستن</button>
            </div>
        </div>
    </div>
</div>

@endsection

