<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jan = Unit::whereMonth('date','01')->whereYear('date',date('Y'))->sum('unit');
        $feb = Unit::whereMonth('date','02')->whereYear('date',date('Y'))->sum('unit');
        $mar = Unit::whereMonth('date','03')->whereYear('date',date('Y'))->sum('unit');
        $apr = Unit::whereMonth('date','04')->whereYear('date',date('Y'))->sum('unit');
        $may = Unit::whereMonth('date','05')->whereYear('date',date('Y'))->sum('unit');
        $jun = Unit::whereMonth('date','06')->whereYear('date',date('Y'))->sum('unit');
        $jul = Unit::whereMonth('date','07')->whereYear('date',date('Y'))->sum('unit');
        $aug = Unit::whereMonth('date','08')->whereYear('date',date('Y'))->sum('unit');
        $sep = Unit::whereMonth('date','09')->whereYear('date',date('Y'))->sum('unit');
        $oct = Unit::whereMonth('date','10')->whereYear('date',date('Y'))->sum('unit');
        $nov = Unit::whereMonth('date','11')->whereYear('date',date('Y'))->sum('unit');
        $dec = Unit::whereMonth('date','12')->whereYear('date',date('Y'))->sum('unit');
        $month = Unit::whereMonth('date',date('m'))->whereYear('date',date('Y'))->sum('unit');
        $year = Unit::whereYear('date',date('Y'))->sum('unit');

        return view('home',compact(['month','year','jan','feb',
                                    'mar','apr','may','jun','jul'
                                    ,'aug','sep','oct','nov','dec']));
    }
}
