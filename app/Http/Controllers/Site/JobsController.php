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
        $jobs = Job::paginate(6);
        return view('vendor.jobs.index', compact('jobs'));
    }

    public function search(Request $request)
    {
        $jobs = Job::paginate(6);
        
        $jobs_show = Job::where(
            [
                ['workplace', $request->workplace == 'null' ? '!=' : 'like', $request->workplace == 'null' ? null : "%$request->workplace%"],
                ['specialization', $request->specialization == 'null' ? '!=' : 'like', $request->specialization == 'null' ? null : "%$request->specialization%"],
                ['permanence', $request->permanence == 'null' || $request->permanence == '' ? '!=' : 'like', $request->permanence == 'null' ? null : "%$request->permanence%"],
            ]
        )->paginate(6);
        
        if (count($jobs_show) < 1) {
            $jobs_show =  Job::paginate(6);
        } 
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
