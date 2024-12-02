<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeadForm;



class LeadController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validate incoming data
            $validatedData = $request->validate([
                'student_name' => 'required|string|max:255',
                'parent_name' => 'required|string|max:255',
                'email_id' => 'required|email|max:255',
                'mobile_no' => 'required|string|max:15',
                'student_dob' => 'required|date',
                'class_name' => 'required|string',
                'class_session' => 'required|string',
                'school_branch_name' => 'required|string',
                'source' => 'required|string',
            ]);

            // Create the lead entry
            $lead = LeadForm::create($validatedData);

            return response()->json([
                'success' => true,
                'message' => 'Lead created successfully!',
                'data' => $lead,
            ], 201);  // Return 201 for successful creation
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors occurred.',
                'errors' => $e->errors(),
            ], 422); // Validation error
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An unexpected error occurred.',
                'error' => $e->getMessage(),
            ], 500);  // Internal server error
        }
    }

}
