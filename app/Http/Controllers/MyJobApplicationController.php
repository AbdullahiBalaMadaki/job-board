<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class MyJobApplicationController extends Controller
{
    public function index()
    {
        /** @var User $user */
        $user = Auth::user();

        return view(
            'my_job_application.index',
            [
                'applications' => $user->jobApplications()
                ->with([
                    'job' => fn($query) => $query->withCount('jobApplications')
                        ->withAvg('jobApplications', 'expected_salary'),
                    'job.employer'
                    ])
                    ->latest()
                    ->get()
            ]
        );
    }

    public function destroy(string $id)
    {
        //
    }
}
