<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class GabrielDataController extends Controller
{
    // public function show(Request $request)
    // {
    //     $data = GabrielData::all();
    //     return Inertia::render('Gabriel/welcome.vue', [
    //         gabriel_data => GabrielData::all()->map(function ($data) {
    //             return [
    //                 'name' => $data->name,
    //                 'age' => $data->age,
    //                 'location' => $data->location,
    //                 'occupation' => $data->occupation,
    //                 'institution' => $data ->institution,
    //                 'program' => $data->program,
    //                 'hobbies' => $data->hobbies,
    //                 'email' => $data->email,
    //                 'phone_number' => $data->phone_number,
    //                 'linkedin' => $data->linkedin,
    //                 'github' =>  $data->github,
    //                 'mlsa' => $data->mlsa,
    //                 'company' => $data->company,
    //                 'role' => $data->role,
    //                 'startDate' => $data->startDate,
    //                 'endDate' => $data->endDate,
    //                 'responsabilities' => $data->responsabilities,
    //             ];
    //         }),
    //     ]);
    // }
    
    public function show(Request $request) 
    {
        $data = GabrielData::all();
        return Inertia::render('Gabriel/welcome.vue', [
            gabriel_data, $data
        ]);
    }
}
