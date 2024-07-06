<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    
    public function index()
    {
        $company = Company::paginate(10);
        

        return view('company.index',compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         // Validate the incoming request data
    $request->validate([
        'name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'website' => 'nullable|string|max:255',
        'email' => 'nullable|email|max:255',
        'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048|dimensions:min_width=100,min_height=100', // Validate the logo upload
    ]);

    // Handle file upload if a logo file is provided
    if ($request->hasFile('logo')) {
        $logo = $request->file('logo');
        $logoName = time().'.'.$logo->getClientOriginalExtension();
        $logo->storeAs('public/logos', $logoName); // Store the file in storage/app/public/logos directory

        // Alternatively, you can use the following to store in a custom directory:
        // $path = $request->file('logo')->storeAs('custom_directory', $logoName);

    } else {
        $logoName = null; // Default to null if no logo is uploaded
    }

    // Create a new company record with validated data
    $company = new Company([
        'name' => $request->input('name'),
        'address' => $request->input('address'),
        'website' => $request->input('website'),
        'email' => $request->input('email'),
        'logo' => $logoName, // Assign the logo filename to the 'logo' field
    ]);

    $company->save();
 
        return redirect()->route('company')->with('success', 'Company added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $company = Company::findOrFail($id);
  
        return view('company.show', compact('company'));
    }

    public function show_api(string $id)
    {
        try {
            $company = Company::with('employees')->findOrFail($id);
    
            $employeeCount = $company->employees->count();
    
            return response()->json([
                'company' => $company,
                'employee_count' => $employeeCount,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Company not found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Company::findOrFail($id);
  
        return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'website' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validate the logo upload
        ]);
    
        // Find the company record by ID
        $company = Company::findOrFail($id);
    
        // Handle file upload if a new logo file is provided
        if ($request->hasFile('logo')) {
            // Delete the previous logo if exists
            if ($company->logo) {
                Storage::delete('public/logos/' . $company->logo);
            }
    
            // Store the new logo file
            $logo = $request->file('logo');
            $logoName = time().'.'.$logo->getClientOriginalExtension();
            $logo->storeAs('public/logos', $logoName); // Store the file in storage/app/public/logos directory
    
            // Update the company record with the new logo filename
            $company->logo = $logoName;
        }
    
        // Update other fields in the company record
        $company->name = $request->input('name');
        $company->address = $request->input('address');
        $company->website = $request->input('website');
        $company->email = $request->input('email');
    
        // Save the updated company record
        $company->save();
    
        return redirect()->route('company')->with('success', 'Company updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $company = Company::findOrFail($id);

        $company->delete();
 
        return redirect()->route('company')->with('success', 'Company deleted successfully');
    }
}
