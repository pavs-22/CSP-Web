<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scholar;
use App\Rules\ValidSuffix; // Import the custom validation rule

class ScholarController extends Controller
{
    public function index(){
        $Scholar = Scholar::where('account', '!=', false)->get();
        return view('scholar.index', ['scholars' => $Scholar]);
    }
    
    public function create(){
        return view('scholar.create');
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
            'firstname'=> 'nullable',
            'lastname'=> 'nullable',
            'middleinitial'=> 'nullable',
            'suffix'=> 'nullable', // Using the custom validation rule
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
            'firstname' => ' ',
            'lastname' => ' ',
            'middleinitial' => ' ',
            'suffix' => ' ',
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
            'firstname'=> 'nullable',
            'lastname'=> 'nullable',
            'middleinitial'=> 'nullable',
            'suffix'=> 'nullable', // Using the custom validation rule
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
            'firstname' => ' ',
            'lastname' => ' ',
            'middleinitial' => ' ',
            'suffix' => ' ',
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