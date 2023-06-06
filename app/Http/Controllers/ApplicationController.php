<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function index(){
        return view('pages.application.index');
    }

    public function create(){
        return view('pages.application.create');
    }

    public function show($application_id){
        $application = Application::find($application_id);
        return view('pages.application.show', compact('application'));
    }
}
