<?php

namespace App\Http\Controllers;

use App\Models\Report_Daily;
use App\Models\Report;
use App\Models\Name;
use App\Models\Brand;
use App\Models\Type;
use App\Models\Customer;
use Illuminate\Http\Request;

class ReportDailyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.daily_reports.index', [
            'reports' => Report_Daily::all(),
            'uid' => session()->get('firebaseUserId')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.daily_reports.create', [
            'products' => Name::all(),
            'brands' => Brand::all(),
            'types' => Type::all(),
            'customers' => Customer::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report_Daily  $report_Daily
     * @return \Illuminate\Http\Response
     */
    public function show(Report_Daily $report_Daily)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report_Daily  $report_Daily
     * @return \Illuminate\Http\Response
     */
    public function edit(Report_Daily $report_Daily)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report_Daily  $report_Daily
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report_Daily $report_Daily)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report_Daily  $report_Daily
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report_Daily $report_Daily)
    {
        //
    }
}
