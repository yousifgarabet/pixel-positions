<?php

namespace App\Http\Controllers;

use App\Models\Job;

class SearchController extends Controller
{
    function __invoke()
    {
        $jobs = Job::query()
        ->with(['employer', 'tags']) // this good to run in to N+1 problem
        ->where('title', 'LIKE', '%'.request('q').'%')
        ->get();

    return view('results', ['jobs' => $jobs]);
    }
}
