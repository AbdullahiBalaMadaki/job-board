<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests; // ✅ Import this

class JobApplicationController extends Controller
{
    use AuthorizesRequests; // ✅ Add this trait

    public function create(Job $job)
    {
        $this->authorize('apply', $job);
        return view('job_application.create', ['job' => $job]);
    }

    public function store(Job $job, Request $request)
    {
        $this->authorize('apply', $job);
        $job->jobApplications()->create([
            'user_id' => $request->user()->id,
            ...$request->validate([
                'expected_salary' => 'required|min:1|max:1000000'
            ])
        ]);

        return redirect()->route('jobs.show', $job)
            ->with('success', 'Job application submitted.');
    }

    public function destroy(string $id)
    {
        //
    }
}
