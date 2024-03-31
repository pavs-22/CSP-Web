<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scholar;

class ScholarController extends Controller
{
    // Returns scholar dashboard
    public function index()
    {
        return view('scholar.index');
    }

    // Returns list of scholars
    public function list()
    {
        return view('scholar.list');
    }
    public function college()
    {
        return view('scholar/scholartype.college');
    }
    public function highSchool()
    {
        return view('scholar/scholartype.highschool');
    }
    public function seniorHigh()
    {
        return view('scholar/scholartype.seniorhigh');
    }

    public function fetchPaginate(Request $request)
    {
        $searchValue = $request->input('search.value');
        $start = $request->input('start');
        $length = $request->input('length');
        $page = $request->input('draw');

        $query = Scholar::query()
            ->where('account', true)
            ->when($searchValue, function ($query, $searchValue) {
                return $query->where(function ($query) use ($searchValue) {
                    $query->where('scholar_Code', 'like', "%{$searchValue}%")
                        ->orWhere('institution', 'like', "%{$searchValue}%")
                        ->orWhere('unit', 'like', "%{$searchValue}%")
                        ->orWhere('area', 'like', "%{$searchValue}%")
                        ->orWhere('fullname', 'like', "%{$searchValue}%")
                        ->orWhere('batch', 'like', "%{$searchValue}%")
                        ->orWhere('name_of_member', 'like', "%{$searchValue}%")
                        ->orWhere('year_level', 'like', "%{$searchValue}%")
                        ->orWhere('status', 'like', "%{$searchValue}%")
                        ->orWhere('course', 'like', "%{$searchValue}%");
                });
            });

        if ($searchValue) {
            $page = 1;
        }

        $data = $query->paginate($length, ['*'], 'page', $page);

        return response()->json([
            'draw' => intval($request->input('draw')),
            'recordsTotal' => $data->total(),
            'recordsFiltered' => $data->total(),
            'data' => $data->items(),
        ]);
    }

    public function fetchHighSchool(Request $request)
{
    $searchValue = $request->input('search.value');
    $start = $request->input('start');
    $length = $request->input('length');
    $page = $request->input('draw');

    $query = Scholar::query()
        ->whereIn('year_level', ['GRADE 7','GRADE 8','GRADE 9','GRADE 10']) // Use whereIn instead of where
        ->when($searchValue, function ($query, $searchValue) {
            return $query->where(function ($query) use ($searchValue) {
                $query->where('scholar_Code', 'like', "%{$searchValue}%")
                ->orWhere('institution', 'like', "%{$searchValue}%")
                ->orWhere('unit', 'like', "%{$searchValue}%")
                ->orWhere('area', 'like', "%{$searchValue}%")
                ->orWhere('fullname', 'like', "%{$searchValue}%")
                ->orWhere('batch', 'like', "%{$searchValue}%")
                ->orWhere('name_of_member', 'like', "%{$searchValue}%")
                ->orWhere('year_level', 'like', "%{$searchValue}%")
                ->orWhere('status', 'like', "%{$searchValue}%")
                ->orWhere('course', 'like', "%{$searchValue}%");
            });
        });

    if ($searchValue) {
        $page = 1;
    }

    $data = $query->paginate($length, ['*'], 'page', $page);

    return response()->json([
        'draw' => intval($request->input('draw')),
        'recordsTotal' => $data->total(),
        'recordsFiltered' => $data->total(),
        'data' => $data->items(),
    ]);
}



    public function fetchSeniorHigh(Request $request)
    {
        $searchValue = $request->input('search.value');
        $start = $request->input('start');
        $length = $request->input('length');
        $page = $request->input('draw');

        $query = Scholar::query()
            ->whereIn('year_level', ['GRADE 11','GRADE 12'])
            ->when($searchValue, function ($query, $searchValue) {
                return $query->where(function ($query) use ($searchValue) {
                    $query->where('scholar_Code', 'like', "%{$searchValue}%")
                        ->orWhere('institution', 'like', "%{$searchValue}%")
                        ->orWhere('unit', 'like', "%{$searchValue}%")
                        ->orWhere('area', 'like', "%{$searchValue}%")
                        ->orWhere('fullname', 'like', "%{$searchValue}%")
                        ->orWhere('batch', 'like', "%{$searchValue}%")
                        ->orWhere('name_of_member', 'like', "%{$searchValue}%")
                        ->orWhere('year_level', 'like', "%{$searchValue}%")
                        ->orWhere('status', 'like', "%{$searchValue}%")
                        ->orWhere('course', 'like', "%{$searchValue}%");
                });
            });

        if ($searchValue) {
            $page = 1;
        }

        $data = $query->paginate($length, ['*'], 'page', $page);

        return response()->json([
            'draw' => intval($request->input('draw')),
            'recordsTotal' => $data->total(),
            'recordsFiltered' => $data->total(),
            'data' => $data->items(),
        ]);
    }


    public function fetchCollege(Request $request)
    {
        $searchValue = $request->input('search.value');
        $start = $request->input('start');
        $length = $request->input('length');
        $page = $request->input('draw');

        $query = Scholar::query()
            ->where('year_level', ['FIRST YEAR','SECOND YEAR','THIRD YEAR','FOURTH YEAR','FIFTH YEAR',])
            ->when($searchValue, function ($query, $searchValue) {
                return $query->where(function ($query) use ($searchValue) {
                    $query->where('scholar_Code', 'like', "%{$searchValue}%")
                        ->orWhere('institution', 'like', "%{$searchValue}%")
                        ->orWhere('unit', 'like', "%{$searchValue}%")
                        ->orWhere('area', 'like', "%{$searchValue}%")
                        ->orWhere('fullname', 'like', "%{$searchValue}%")
                        ->orWhere('batch', 'like', "%{$searchValue}%")
                        ->orWhere('name_of_member', 'like', "%{$searchValue}%")
                        ->orWhere('year_level', 'like', "%{$searchValue}%")
                        ->orWhere('status', 'like', "%{$searchValue}%")
                        ->orWhere('course', 'like', "%{$searchValue}%");
                });
            });

        if ($searchValue) {
            $page = 1;
        }

        $data = $query->paginate($length, ['*'], 'page', $page);

        return response()->json([
            'draw' => intval($request->input('draw')),
            'recordsTotal' => $data->total(),
            'recordsFiltered' => $data->total(),
            'data' => $data->items(),
        ]);
    }

    public function create()
    {
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
            'institution'=> 'nullable',
            'unit'=> 'nullable',
            'area'=> 'nullable',
            'fullname'=> 'nullable',
            'name_of_member'=> 'nullable', // Changed from 'name of member' to 'name_of_member' for consistency
            'batch'=> 'nullable',
            'scholarship_type'=> 'nullable', // Changed from 'scholarship type' to 'scholarship_type' for consistency
            'year_level'=> 'nullable', // Typo corrected from 'Yearl_level' to 'Year_level'
            'course'=> 'nullable',
            'contact'=> 'nullable',
            'Address'=> 'nullable',
            'status'=> 'nullable',
            'remarks'=> 'nullable',
        ]);
    
        // Set default values for each field if they are not provided
        $defaults = [
            'institution' => ' ',
            'unit' => ' ',
            'area'=> ' ',
            'fullname' => ' ',
            'name_of_member' => ' ',
            'batch' => ' ',
            'scholarship_type' => ' ',
            'year_level' => ' ', // Typo corrected from 'Yearl_level' to 'Year_level'
            'course' => ' ',
            'contact' => '0',
            'address' => ' ',
            'status' => ' ',
            'remarks' => ' ',
        ];
    
        foreach ($defaults as $key => $default) {
            if (empty($data[$key])) {
                $data[$key] = $default;
            }
        }
    
        $data['scholar_code'] = $newScholarCode;
        $data['account'] = true; // Assign the generated Scholar_Code
    
        $newScholar = Scholar::create($data);
    
        return redirect(route('scholar.list'));
    }

    public function show($id)
    {
        $scholar = Scholar::findOrFail($id);
        return view('scholar.info', ['scholar' => $scholar]);
    }

    public function softDelete($id)
    {
        $scholar = Scholar::findOrFail($id);
        $scholar->update(['account' => false]);

        return response()->json(['message' => 'Record soft deleted successfully']);
    }

    public function edit($id)
    {
        $scholar = Scholar::findOrFail($id);
        return view('scholar.edit', ['scholar' => $scholar]);
    }

    public function update(Request $request, $id)
    {
        $scholar = Scholar::findOrFail($id);
        $scholar->update($request->all());

        return redirect()->route('scholar.list')->with('success', 'Scholar updated successfully.');
    }
}
