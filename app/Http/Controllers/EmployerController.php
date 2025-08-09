<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Employer; // Import the Employer model
use Illuminate\Support\Facades\Auth; // For authentication

class EmployerController extends Controller
{
    use AuthorizesRequests;

    public function __construct()
    {
        // Require authentication for all methods in this controller
        $this->middleware('auth');
    }

    public function create()
    {
        // Authorize using the policy (make sure EmployerPolicy is defined)
        $this->authorize('create', Employer::class);

        return view('employer.create');
    }

    public function store(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'company_name'    => 'required|string|max:255',
            'company_address' => 'nullable|string|max:500',
        ]);

        // Get the currently authenticated user
        /** @var \App\Models\User $user */
        $user = Auth::user();

        // Create employer record using relationship in User model
        $user->employer()->create($validated);

        // Redirect to jobs index with success message
        return redirect()
            ->route('jobs.index')
            ->with('success', 'Your employer account was created!');
    }
}
