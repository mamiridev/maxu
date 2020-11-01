<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function formsBasic()
    {
        return view('admin.forms-basic');
    }
    public function appCalendar()
    {
        return view('admin.app-calendar');
    }
    public function appChat()
    {
        return view('admin.app-chat');
    }
    public function appInbox()
    {
        return view('admin.app-inbox');
    }
    public function chartC()
    {
        return view('admin.chart-c3');
    }
    public function chartChartJs()
    {
        return view('admin.chart-chartjs');
    }
    public function chartFlot()
    {
        return view('admin.chart-flot');
    }
    public function chartJquery()
    {
        return view('admin.chart-jquery');
    }
    public function chartMorris()
    {
        return view('admin.chart-morris');
    }
    public function chartSparkline()
    {
        return view('admin.chart-sparkline');
    }
    public function formsAdvanced()
    {
        return view('admin.forms-advanced');
    }
    public function formsCropping()
    {
        return view('admin.forms-cropping');
    }
    public function formsDragDropUpload()
    {
        return view('admin.forms-dragdropupload');
    }


}
