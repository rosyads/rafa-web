<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Name;
use App\Models\Brand;
use App\Models\Type;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Schedule::all());
        $schedules = Schedule::all();
        $scheduleEvent = [];

        foreach($schedules as $schedule){
            $event = [];
            $user = User::getUser($schedule['user_id']);
            $color = '#000000';
            switch ($schedule['job_title']) {
                case "Install":
                $color = '#ff0000';
                break;
                case "Repair":
                    $color = '#00ff00';
                break;
                case "Update":
                    $color = '#0000ff';
                break;
                case "Training":
                    $color = '#00ffff';
                break;
                case "Maintenance":
                    $color = '#ff00ff';
                break;
                case "Refurbishment":
                    $color = '#ffff00';
                break;
            }

            $event['id'] = $schedule['id'];
            $event['title'] = $user['name']." - ".$schedule['job_title'];
            $event['start'] = $schedule['date_depart'];
            // $date = date($schedule['date_return'].'+1 day');
            $event['end'] = $schedule['date_return'];
            $event['backgroundColor'] = $color;
            $event['borderColor'] = $color;

            array_push($scheduleEvent, $event);

        }

        // dd(json_encode($scheduleEvent));
        // dd($scheduleEvent);

        return view('dashboard.schedules.index', [
            'schedules' => $scheduleEvent
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::getAllUsers();
        $departments = User::getAllDepartments();
        $dep = '';
        $usersByDepartment = [];

        // dd($departments);
        foreach ($departments as $department) {
            if(array_key_exists('nama_department', $department)){
                if($department['nama_department'] == 'Teknik'){
                    $dep = $department['id'];
                    break;
                }
            }
        }

        foreach($users as $user){
            // dd(User::getAllUsers());
            if(array_key_exists('departmentId', $user)){
                if($user['departmentId'] == $dep){
                    array_push($usersByDepartment, $user);
                }
            }
        }

        return view('dashboard.schedules.create', [
            'products' => Name::all(),
            'brands' => Brand::all(),
            'types' => Type::all(),
            'users' => $usersByDepartment,
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
        $validatedData = $request->validate([
            'user_id' => 'required',
            'type_id' => 'required',
            'customer_id' => 'required',
            'serial_num' => 'required',
            'version' => 'max:255',
            'job_title' => 'required',
            'date_depart' => 'required',
            'date_return' => 'required'
        ]);

        // $end = substr($validatedData['date_return'], 8) + 1;
        // $validatedData['date_return'] = substr($validatedData['date_return'], 0, 8).$end;

        $end = strtotime(date("Y-m-d", strtotime($validatedData['date_return'])) . " +1 day");
        $validatedData['date_return'] = date("Y-m-d", $end);

        // dd($validatedData['date_return']);

        $user = User::getUser($request['user_id']);
        // dd($user);

        Schedule::create($validatedData);

        return redirect('/schedules')->with('success', 'New Schedule for '.$user['name'].' has been added');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        // dd($schedule);
        $engineer = User::getUser($schedule->user_id);
        return view('dashboard.schedules.show', [
            'schedule' => $schedule,
            'engineer' => $engineer['name']
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        $users = User::getAllUsers();
        $departments = User::getAllDepartments();
        $dep = '';
        $usersByDepartment = [];

        // dd($departments);
        foreach ($departments as $department) {
            if(array_key_exists('nama_department', $department)){
                if($department['nama_department'] == 'Teknik'){
                    $dep = $department['id'];
                    break;
                }
            }
        }

        foreach($users as $user){
            // dd(User::getAllUsers());
            if(array_key_exists('departmentId', $user)){
                if($user['departmentId'] == $dep){
                    array_push($usersByDepartment, $user);
                }
            }
        }

        return view('dashboard.schedules.edit', [
            'schedule' => $schedule,
            'products' => Name::all(),
            'brands' => Brand::all(),
            'types' => Type::all(),
            'users' => $usersByDepartment,
            'customers' => Customer::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
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

        Schedule::where('id', $schedule->id)
            ->update($validatedData);
        
        return redirect('/schedule')->with('success', 'Schedule has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        Schedule::destroy($schedule->id);

        return redirect('/schedules')->with('success', 'Schedule has been deleted');
    }
}
