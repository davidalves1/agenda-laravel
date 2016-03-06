<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Task;

class JobController extends Controller
{
    public function index()
    {
        $date = date('Y-m-d');
        return Response::json([Job::get($date)]);

    }
}
