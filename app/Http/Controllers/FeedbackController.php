<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:255',
            'review' => 'required|string',
            'team_id' => 'required|exists:businesses,id', // Validación de existencia del Business
        ]);

        Feedback::create([
            'business_id' => $request->input('team_id'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'review' => $request->input('review'),
        ]);

        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }
}
