<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Name;
use App\Models\Brand;
use App\Models\Type;
use App\Models\Customer;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.reports.index', [
            'reports' => Report::with(['product','brand','type','customer'])->get(),
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
        return view('dashboard.reports.create', [
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
        // dd($request);
        $validatedData = $request->validate([
            'product_id' => 'required',
            'brand_id' => 'required',
            'type_id' => 'required',
            'customer_id' => 'required',
            'serial_num' => 'required',
            'version' => 'max:255',
            'job_title' => 'required',
            'report_fault' => 'required',
            'action' => 'required',
            'remarks' => 'required',
            'status' => 'required'
        ]);

        $validatedData['user_id'] = session()->get('firebaseUserId');
        $validatedData['submit_date'] = date('Y-m-d');

        // dd($validatedData);

        Report::create($validatedData);

        return redirect('/reports')->with('success', 'New report has been submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        return view('dashboard.reports.show', [
            'report' =>  $report
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        return view('dashboard.reports.edit', [
            'report' => $report,
            'products' => Name::all(),
            'brands' => Brand::all(),
            'types' => Type::all(),
            'customers' => Customer::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        $rules = [
            'product_id' => 'required',
            'brand_id' => 'required',
            'type_id' => 'required',
            'customer_id' => 'required',
            'serial_num' => 'required',
            'version' => 'max:255',
            'job_title' => 'required',
            'report_fault' => 'required',
            'action' => 'required',
            'remarks' => 'required',
            'status' => 'required'
        ];

        $validatedData = $request->validate($rules);

        Report::where('id', $report->id)
            ->update($validatedData);
        
        return redirect('/reports')->with('success', 'Report has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        Report::destroy($report->id);

        return redirect('/reports')->with('success', 'Report has been deleted');
    }
}
