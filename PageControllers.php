<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PagesController extends Controller
{
    public function getIndex(){
        return view('index');
    }

    public function getBlogpost(){
        return view('blogpost');
    }

    public function getCreate(){
        return view('create');
    }

    public function getEdit(){
        return view('edit');
    }



}