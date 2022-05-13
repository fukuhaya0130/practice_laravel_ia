<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Company;

class CompanyController extends Controller
{
    //
    public function index(){
        $companies = Company::all();
        $user_companies = collect(User::find(Auth::id())->company->toArray())->pluck('name');
        // dd($user_companies);
        foreach($companies as $company){
            $company->select = in_array($company->name, $user_companies->toArray());
        }
        // dd($companies);
        return view("companies.index",compact("companies"));
    }
}
