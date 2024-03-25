<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scholar;
use App\Rules\ValidSuffix; // Import the custom validation rule

class ScholarController extends Controller
{
    public function index(){
        return view('scholar.index');
    }

    public function fetchPaginate(Request $request) {
        $searchValue = $request->input('search.value');
        $start = $request->input('start');
        $length = $request->input('length');
        $page = $request->input('draw');

        $query = Scholar::query()
            ->when($searchValue, function ($query, $searchValue) {
                // Lagay mo dito brad kung ano gusto mo ilagay na mga isesearch pa na columns
                return $query->where('Scholar_Code', 'like', "%{$searchValue}%")
                            ->orWhere('Institution', 'like', "%{$searchValue}%")
                            ->orWhere('Unit', 'like', "%{$searchValue}%")
                            ->orWhere('Area', 'like', "%{$searchValue}%")
                            ->orWhere('fullname', 'like', "%{$searchValue}%")
                            ->orWhere('batch', 'like', "%{$searchValue}%")
                            ->orWhere('name_of_member', 'like', "%{$searchValue}%")
                            ->orWhere('Year_level', 'like', "%{$searchValue}%")
                            ->orWhere('course', 'like', "%{$searchValue}%");
            });

        if($searchValue) {
            $page = 1;
        }

        $data = $query->paginate($length, ['*'], 'page', $page);

        return response()->json([
            'draw' => intval($request->input('draw')),
            'recordsTotal' => $data->total(),
            'recordsFiltered' => $data->total(), // Consider updating for accurate filtering count
            'data' => $data->items(),
        ]);
    }
    
    public function create(){
        return view('scholar.create');
    }
    public function info(){
        $Scholar = Scholar::all();
        return view('scholar.info', ['scholars' => $Scholar]);
    }
    
    public function store(Request $request){
        $lastScholar = Scholar::orderBy('id', 'desc')->first(); // Get the last stored Scholar
    
        // Increment the Scholar_Code
        if ($lastScholar) {
            $lastScholarCode = $lastScholar->Scholar_Code;
            $lastNumber = (int)substr($lastScholarCode, 3); // Extract the numeric part
            $newNumber = $lastNumber + 1;
            $newScholarCode = 'CSP' . str_pad($newNumber, 5, '0', STR_PAD_LEFT); // Pad the number with zeros
        } else {
            // If no Scholar exists, start with 00001
            $newScholarCode = 'CSP00001';
        }
    
        $data = $request->validate([
            'Institution'=> 'nullable',
            'Unit'=> 'nullable',
            'Area'=> 'nullable',
            'fullname'=> 'nullable',
            'name_of_member'=> 'nullable', // Changed from 'name of member' to 'name_of_member' for consistency
            'batch'=> 'nullable',
            'scholarship_type'=> 'nullable', // Changed from 'scholarship type' to 'scholarship_type' for consistency
            'Year_level'=> 'nullable', // Typo corrected from 'Yearl_level' to 'Year_level'
            'course'=> 'nullable',
            'contact'=> 'nullable',
            'Address'=> 'nullable',
            'status'=> 'nullable',
            'Remarks'=> 'nullable',
            
        ]);
    
        // Set default values for each field if they are not provided
        $defaults = [
            'Institution' => ' ',
            'Unit' => ' ',
            'Area'=> ' ',
            'fullname' => ' ',
            'name_of_member' => ' ',
            'batch' => ' ',
            'scholarship_type' => ' ',
            'Year_level' => ' ', // Typo corrected from 'Yearl_level' to 'Year_level'
            'course' => ' ',
            'contact' => '0',
            'Address' => ' ',
            'status' => ' ',
            'Remarks' => ' ',
        ];
    
        foreach ($defaults as $key => $default) {
            if (empty($data[$key])) {
                $data[$key] = $default;
            }
        }
    
        $data['Scholar_Code'] = $newScholarCode;
        $data['account'] = true; // Assign the generated Scholar_Code
    
        $newScholar = Scholar::create($data);
    
        return redirect(route('scholar.index'));
    }
    


    public function edit (Scholar $scholar){
        return view('scholar.edit', ['scholars' => $scholar]);
        
    }
    public function account(Scholar $scholar) {
        $data = [
            'account' => false
        ]; 
        $scholar->update($data);

        return redirect(route('scholar.index'));

    }
    

    public function update(Scholar $scholar, Request $request){
        $data = $request->validate([
            'Scholar_Code'=> 'nullable',
            'Institution'=> 'nullable',
            'Unit'=> 'nullable',
            'Area'=> 'nullable',
            'fullname'=> 'nullable',
            'name_of_member'=> 'nullable', // Changed from 'name of member' to 'name_of_member' for consistency
            'batch'=> 'nullable',
            'scholarship_type'=> 'nullable', // Changed from 'scholarship type' to 'scholarship_type' for consistency
            'Year_level'=> 'nullable', // Typo corrected from 'Yearl_level' to 'Year_level'
            'course'=> 'nullable',
            'contact'=> 'nullable',
            'Address'=> 'nullable',
            'status'=> 'nullable',
            'Remarks'=> 'nullable',
        ]);
    
        // Set default values for each field if they are not provided
        $defaults = [
          
            'Institution' => ' ',
            'Unit' => ' ',
            'Area'=> ' ',
            'fullname' => ' ',
            'name_of_member' => ' ',
            'batch' => ' ',
            'scholarship_type' => ' ',
            'Year_level' => ' ', // Typo corrected from 'Yearl_level' to 'Year_level'
            'course' => ' ',
            'contact' => '0',
            'Address' => ' ',
            'status' => ' ',
            'Remarks' => ' ',
        ];
    
        foreach ($defaults as $key => $default) {
            if (empty($data[$key])) {
                $data[$key] = $default;
            }
        }
        
        $scholar->update($data);
    
        return redirect(route('scholar.index'));  }
    

    public function delete(Scholar $scholar, Request $request){
        $scholar->delete();
        return redirect(route('scholar.index'))->with('success','Scholar Information Deleted Successfuly');
    }
}