<?php

namespace App\Http\Controllers\Admin\Doctor;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Doctor\Specialitie;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Models\Doctor\DoctorScheduleHour;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function config(){
        $roles = Role::all();

        $specialities = Specialitie::where("state",1)->get();

        $hours_days = collect([]);

        $doctor_schedule_hours = DoctorScheduleHour::all();
      
        foreach($doctor_schedule_hours-> groupBy("hour") as $Key =>$schedule_hour )
        {
            $hours_days -> push([
                "hour"=> $Key,
                "format_hour"=> Carbon::parse(date("Y-m-d").' '.$Key.":00:00")->format("h:i A"),
                "items" => $schedule_hour ->map(function($hour_item){
                    return[
                        "id" => $hour_item->id,
                        "hour_start"=> $hour_item->hour_start,
                        "hour_end" => $hour_item->hour_end,
                        "format_hour_start" => Carbon::parse(date("Y-m-d").' '.$hour_item->hour_start)->format("h:i A"),
                        "formart_hour_end" => Carbon::parse(date("Y-m-d").' '.$hour_item->hour_end)->format("h:i A"),
                        "hour"=> $hour_item->hour,
                    ];

                }),
            ]);
        }

        return response()->json([
            "roles"=> $roles,
            "specialities" =>$specialities,
            "hours_days" => $hours_days,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
