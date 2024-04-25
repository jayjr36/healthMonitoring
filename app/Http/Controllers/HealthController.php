<?php

namespace App\Http\Controllers;

use App\Models\Health;
use Illuminate\Http\Request;

class HealthController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'heart_rate' => 'required',
            'oxygen_level' => 'required',
        ]);

        Health::create([
            'heart_rate' => $data['heart_rate'],
            'oxygen_level' => $data['oxygen_level'],
        ]);

        return response()->json(['message' => 'Data stored successfully']);
    }

    public function index()
    {
        $healthdata = Health::latest()->get();

        return view('health-index', compact('healthdata'));
    }
}
