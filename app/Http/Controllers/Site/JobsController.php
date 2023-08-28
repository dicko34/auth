<?php

namespace App\Http\Controllers\Site;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobsController extends Controller
{
    use Traits\SimilarTrait;
    public function index()
    {
        $jobs = Job::all();
        return view('vendor.jobs.index', compact('jobs'));
    }

    public function search(Request $request)
    {
        $jobs = Job::all();
        $jobs_show = Job::where(
            [
                ['workplace', $request->workplace == 'الكل' ? '!=' : '=', $request->workplace == 'الكل' ? null : $request->workplace],
                ['specialization', $request->specialization == 'الكل' ? '!=' : '=', $request->specialization == 'الكل' ? null : $request->specialization],
                ['permanence', $request->permanence == 'الكل' || $request->permanence == '' ? '!=' : '=', $request->permanence == 'الكل' ? null : $request->permanence],
            ]
        )->get();
        return view('vendor.jobs.search', compact('jobs_show', 'jobs'));
    }

    public function product(Request $request)
    {
        $jobs = Job::all();
        $job = Job::find($request->job);
        $similar = $this->similar($jobs, $job, ['specialization' => 30,'workplace'=>70]);
        return view('vendor.jobs.details',compact('jobs','job','similar'));
    }

    public function add()
    {
        $jobs = Job::all();
        return view('vendor.jobs.add', compact('jobs'));
    }
}
