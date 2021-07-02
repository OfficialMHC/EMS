<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Department;
use App\Models\State;
use Illuminate\Http\Request;

class EmployeeDataController extends Controller
{
    public function departments()
    {
        $departments = Department::where('status', 1)->get();
        return response()->json($departments);
    }

    public function countries()
    {
        $countries = Country::where('status', 1)->get();
        return response()->json($countries);
    }

    public function states(Country $country)
    {
        return response()->json($country->states);
    }

    public function cities(State $state)
    {
        return response()->json($state->cities);
    }
}
